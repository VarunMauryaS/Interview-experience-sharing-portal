<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title><?php echo get_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="." style="color:white;font-family:Monospace;font-weight:900;">IntExSharP</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
              <?php
              if(isset($_SESSION['user_id'])){
                echo '<ul class="nav navbar-nav">
                <li><a href="."><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="add.php"><span class="glyphicon glyphicon-plus"></span> Add new Experience</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['user_name'].'</a></li>
              <li>
                <form class="navbar-form" action="include/logout.inc.php" method="POST">
                  <button type="submit" name="submit" class="btn btn-danger">
                      <span class="glyphicon glyphicon-log-out"></span> Logout
                  </button>
                </form>
              </li>';
              }
              else {
                echo '<ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> login</a></li> &nbsp;
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                ';
              }
              ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br><br>
