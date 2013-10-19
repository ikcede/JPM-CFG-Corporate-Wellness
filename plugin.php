<?php
include_once("views/globals.tpl.php");
include_once("views/header.tpl.php");

?>
  <body>
  
   <?php include_once("views/menu.tpl.php"); ?>

    <hr>
    <center><h2><b> Plugins Connected </b> </h2></center>
       
    
    <div class="container" >
        <div class="jumbotron"> 
        <table class="table table-hover">
            <thead>
              <tr>
                <th><center>Plugin Name </center></th>
                <th><center>Status</center></th>
              </tr>
            </thead>
            <tbody>
              <tr class="success">
                <td><center><img src="img/runkeeper.png" alt="runkeeper" height="25" width="25">Run Keeper</center></td>
                <td><center> Connected</center></td>
              </tr>
              <tr >
                <td><center>Nike Plus</center></td>
                <td><center> Not Connected</center></td>
              </tr>
              <tr >
                <td><center>Map My Run</center></td>
                <td><center>Not Connected </center> </td>
              </tr>
              <tr >
                <td><center>Map Fitness Pal </center></td>
                <td><center>Not Connected </center> </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
    
    

  </body>
</html>