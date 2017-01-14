<?php
  require_once('../private/initialize.php');
  // Set default values for all variables the page needs.
  unset($errors);
  $errors=[];   // create error message array
  $first_name=isset($_POST['first_name'])?$_POST['first_name']:'';
  $last_name=isset($_POST['last_name'])?$_POST['last_name']:'';
  $email=isset($_POST['email'])?$_POST['email']:'';
  $username=isset($_POST['username'])?$_POST['username']:'';

  // if this is a POST request, process the form
  // Hint: private/functions.php can help
  
  // Confirm that POST values are present before accessing them.
  if(is_post_request()){

    // Perform Validations
    // Hint: Write these in private/validation_functions.php
    if(is_blank($_POST['first_name'])){
      $errors[]="First name cannot be blank.";
    }
    else if(!has_length($_POST['first_name'],['min'=>2,'max'=>255])){
      $errors[]="First name must be between 2 and 255 characters.";
    }
    if(is_blank($_POST['last_name'])){
      $errors[]="Last name cannot be blank.";
    }
    else if(!has_length($_POST['last_name'],['min'=>2,'max'=>255])){
      $errors[]="Last name must be between 2 and 255 characters.";
    }
    if(is_blank($_POST['email'])){
      $errors[]="email cannot be blank.";
    }
    else if(!has_valid_email_format($_POST['email'])){
      $errors[]="Email must be a valid format.";
    }
    if(is_blank($_POST['username'])){
      $errors[]="Username cannot be blank.";
    }
    else if(!has_length($_POST['username'],['min'=>8,'max'=>255])){
      $errors[]="Username must be at least 8 characters.";
    }

    // if there were no errors, submit data to database
    if(!sizeof($errors)){
      $date=date("Y-m-d H:i:s"); 
      // Write SQL INSERT statement
      $sql = "INSERT INTO users(first_name,last_name,email,username,created_at)
        VALUES('$first_name','$last_name','$email','$username','$date')";

      // For INSERT statments, $result is just true/false
       $result = db_query($db, $sql);
       if($result) {
         db_close($db);

        //   TODO redirect user to success page
        header("Location: registration_success.php");
        exit;
       }
       else{
         // The SQL INSERT statement failed.
         // Just show the error, not the form
         echo db_error($db);
         db_close($db);
         exit;
       }
    }
  }
?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    // Hint: private/functions.php can help
    echo display_errors($errors);
  ?>

  <!-- TODO: HTML form goes here -->
  <form form action="register.php" method="post">
    First Name:<br>
    <input type="text" name="first_name" value=<?php echo h($first_name); ?>><br>
    Last Name:<br>
    <input type="text" name="last_name" value=<?php echo h($last_name); ?>><br>
    Email:<br>
    <input type="text" name="email" value=<?php echo h($email); ?>><br>
    Username:<br>
    <input type="text" name="username" value=<?php echo h($username); ?>><br>
    <input type="submit" value="Submit">
  </form>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
