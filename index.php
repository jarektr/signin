<?php
require_once 'config.php';
 
// Is the user already logged in? Redirect him/her to the private page
 
if($_SESSION['username'])
{
header("Location: ok.php");
exit;
}
 
if(isSet($_POST['submit']))
{
$do_login = true;
 
include_once 'do_login.php';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tieto Enterpise Cloud Orchestration Internal Search</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="index.php">
      <fieldset><legend>Login</legend>
        <h2 class="form-signin-heading">Login</h2>
<?php
if($login_error)
{
echo '<div id="error_notification">The submitted login info is incorrect.</div>';
}
?>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="autologin" value="1"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="submit" name="submit" type="submit">Sign in</button>
        </fieldset>

      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
