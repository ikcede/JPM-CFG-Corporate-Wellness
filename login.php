<?php
include_once("views/globals.tpl.php");
include_once("views/header.tpl.php");
?>

<body>
    <div class="container">
        <div id="login" class="col-md-3 absolute-center">
          <img id="manalogo" src="http://mananutrition.org/img/logo-mana.png" />
    
          <form class="form-signin">
            <span class="form-signin-heading">ManaBurn Login:</span>
            <input id="username" type="text" class="form-control" placeholder="Username" autofocus>
            <input id="password" type="password" class="form-control" placeholder="Password">
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-primary" type="submit">Sign in</button>
          </form>
        <?php
            
            $hostName= "localhost";
            $dbName="Calorie_Cloud";
            $data = new PDO("mysql:host=$hostName; dbname=$dbName", "root", "bitnami");
            
        ?>
        
        </div>
    </div><!-- /container -->

</body>

</html>