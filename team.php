<?php

include_once("views/globals.tpl.php");
include_once("views/header.tpl.php");

?>
  <body>

   <?php include_once("views/menu.tpl.php"); ?>

    <br>
    <div class="container" >
        <div class="jumbotron">
            <div id="Team Total-Calories"><span id="amount"> Total Team Calories Earned 3800</span> Cals</div>
        </div>
    </div>
    
   <div class="row">
   <div class="col-md-2"></div>
    <div class="col-md-4"><b><center>Team Rankings</center></b>

        <table class="table table-hover">
                <thead>
                  <tr>
                    <th><center>Ranking</center></th>
                    <th><center>Team Member</center></th>
                  </tr>
                </thead>
                <tbody>
                  <tr  class="success">
                    <td><center>1</center></td>
                    <td><center></center></td>
                  </tr>
                  <tr>
                    <td><center>2</center></td>
                    <td><center></center></td>
                  </tr>
                  <tr>
                    <td><center>3</center></td>
                    <td><center></center></td>
                  </tr>
                  <tr  class="warning">
                    <td><center>4</center></td>
                    <td><center></center></td>
                  </tr>
                  <tr class="danger">
                    <td><center>5</center></td>
                    <td><center></center> </td>
                  </tr>
                </tbody>
              </table>
    
    </div>
    
    
    <div class="col-md-4"><b><center>Team Message Board</center></b>
        
    </div>
    <div class="col-md-2"></div>
   </div>
    



  </body>
</html>
