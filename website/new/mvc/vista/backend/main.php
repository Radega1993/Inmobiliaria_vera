<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass']){
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  
  $dir = 'sqlite:db/Quizionality.db':
  $db = new PDO($dir) or die ("Unable to open");

  if($pass=="123"){
    $_SESSION['password']=$pass;
  }else{
    $error="Incorrect Pssword";
  }
}

if(isset($_POST['page_logout'])){
  unset($_SESSION['password']);
}
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/backend_style.css">
  </head>
  <body>
    <div id="wrapper">

      <?php
        if($_SESSION['password']=="123"){
      ?>
      <h1>Create Password Protected Webpage Using PHP, HTML And CSS</h1>
      <form method="post" action="" id="logout_form">
        <input type="submit" name="page_logout" value="LOGOUT">
      </form>
      <?php
      }else{
      ?>
        <form method="post" action="" id="login_form">
          <h1>LOGIN TO PROCEED</h1>
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pass" placeholder="*******">
          <input type="submit" name="submit_pass" value="Log In">
          <p>"Password : 123"</p>
          <p><font style="color:red;"><?php echo $error;?></font></p>
        </form>
      <?php	
      }
      ?>
    </div>
  </body>
</html>