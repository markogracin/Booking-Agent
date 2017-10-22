<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'config.php' ?>
    <?php include_once 'head.php' ?>
    
    <title><?php echo $title ?></title>
  </head>
  <body>
    <div class="nav">
      <ul>
        <li><a href="https://github.com/markogracin" target="blank">Github</a></li>
        <li><a href="https://codepen.io/markogracin" target="blank">Codepen</a></li>
        <li><a href="img/ERA.png" target="blank">ERA</a></li>
      </ul>
    </div>


    <div id="welcome">
        <div id="leftPane">
          <h1><b>Booking Agent</b></h1>
          <p>The agent you need</p>

            <form method="post" id="loginForm" autocomplete="off" action="login.php" >
              <input type="text" placeholder="email" id="email" name="email" value="<?php echo isset($_GET["email"]) ? $_GET["email"] : ""; ?>"><br /><br />
              <input type="password" placeholder="password" id="password" name="password">
              <input type="submit" value="Login" id="submit" name="login">
              <?php 
                if(isset($_GET['tryagain'])){
                echo "<div class='error'>Please try again..</div>";
                }

                if(isset($_GET['no_permission'])){
                echo "Log in required!";
                }
                if(isset($_GET['no_permission'])){
                echo "<p class='loginWrong'>Log in required!<p>";
                }
              ?>
            </form>
        </div>

        <div id="rightPane">
          <div class="agentHero"></div>
        </div>
    </div>
   <div class="credits"><p>Copyright Marko Gracin 2017.</p></div>
   <?php include_once 'script.php' ?>
  </body>
</html>
