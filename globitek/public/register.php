<?php
  require_once('../private/initialize.php');
  // Set default values for all variables the page needs.
  $errors=array();   // create error message array
  $user=array(
    'first_name' => '',
    'last_name' => '',
    'username' => '',
    'email' => ''
  );

  // if this is a POST request, process the form
  // Hint: private/functions.php can help
  
  // Confirm that POST values are present before accessing them.
  if(is_post_request()){
    // Confirm that values are present before accessing them.
    if(isset($_POST['first_name'])) { $user['first_name'] = $_POST['first_name']; }
    if(isset($_POST['last_name'])) { $user['last_name'] = $_POST['last_name']; }
    if(isset($_POST['username'])) { $user['username'] = $_POST['username']; }
    if(isset($_POST['email'])) { $user['email'] = $_POST['email']; }
    
    // Perform Validations
    // Hint: Write these in private/validation_functions.php
    if(is_blank($user['first_name'])){
      $errors[]="First name cannot be blank.";
    }
    else if(!has_length($user['first_name'],['min'=>2,'max'=>255])){
      $errors[]="First name must be between 2 and 255 characters.";
    }
    else if(!has_valid_name_format($user['first_name'])){
      $errors[]="Invalid first name, whitelist characters: letter, symbols: - , . ' ";
    }
    if(is_blank($user['last_name'])){
      $errors[]="Last name cannot be blank.";
    }
    else if(!has_length($user['last_name'],['min'=>2,'max'=>255])){
      $errors[]="Last name must be between 2 and 255 characters.";
    }
    else if(!has_valid_name_format($user['last_name'])){
      $errors[]="Invalid last name, whitelist characters: letter, symbols: - , . ' ";
    }
    if(is_blank($user['email'])){
      $errors[]="email cannot be blank.";
    }
    else if(!has_valid_email_format($user['email'])){
      $errors[]="Email must be a valid format.";
    }
    if(is_blank($user['username'])){
      $errors[]="Username cannot be blank.";
    }
    else if(!has_length($user['username'],['min'=>8,'max'=>255])){
      $errors[]="Username must be at least 8 characters.";
    }

    // if there were no errors, submit data to database
    if(!sizeof($errors)){
      $date=date("Y-m-d H:i:s"); 
      // Write SQL INSERT statement
      $sql = "INSERT INTO users";
      $sql .= "(first_name,last_name,email,username,created_at)";
      $sql .= "VALUES(";
      $sql .= "'" . db_escape($db, $user['first_name']) . "',";
      $sql .= "'" . db_escape($db, $user['last_name']) . "',";
      $sql .= "'" . db_escape($db, $user['email']) . "',";
      $sql .= "'" . db_escape($db, $user['username']) . "',";
      $sql .= "'" . $date . "'";
      $sql .= ");";

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
  <form action="register.php" method="post">
    First Name:<br>
    <input type="text" name="first_name" value="<?php echo h($user['first_name']); ?>" ><br>
    Last Name:<br>
    <input type="text" name="last_name" value="<?php echo h($user['last_name']); ?>" ><br>
    Email:<br>
    <input type="text" name="email" value="<?php echo h($user['email']); ?>" ><br>
    Username:<br>
    <input type="text" name="username" value="<?php echo h($user['username']); ?>" ><br>
    <input type="submit" name="submit" value="Create"  />
  </form>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
