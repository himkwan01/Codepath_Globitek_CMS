<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$users_result = find_user_by_id($_GET['id']);
// No loop, only one result
$user = db_fetch_assoc($users_result);

if(is_post_request()){
  $result = delete_user($user);
  if($result === true){
    redirect_to('index.php');
  }
}
?>

<?php $page_title = 'Staff: Delete User ' . $user['first_name'] . " " . $user['last_name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="show.php?id=<?php echo h(u($user['id'])); ?>">Back to Users Detials</a><br />
  
  <h1>Delete User: <?php echo h($user['first_name']) . " " . h($user['last_name']); ?></h1>
  <form action="delete.php?id=<?php echo h(u($user['id'])); ?>" method="POST">
    <p> PERMANETLY DELETE the user: 
    <?php echo h($user['first_name']) . " " . h($user['last_name']) . "?"; ?></p>
    <input type="submit" name="DELETE" value="DELETE" />
  </form>
</div>