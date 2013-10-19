<?php

// THIS FILE IS NOW DEPRECATED! TO EDIT, GO TO GLOBAL.TPL.PHP


include_once("views/globals.tpl.php");
include_once("views/header.tpl.php");
?>
  <body>
    <?php include_once("views/menu.tpl.php"); ?>
    <br>
    <div class="container" >
        <div class="jumbotron">
            <div id="total-calories"><span id="amount">44800</span> Cals</div>
        </div>
    </div>
    
        <div class="container" >
            <div class="jumbotron">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><center>1</center></th>
                    <th><center>Team</center></th>
                    <th><center>Calories Burned</center></th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr  class="success">
                    <td>1</td>
                    <td>IT Dept </td>
                    <td>10000 calories</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>HR Dept</td>
                    <td>9999 calories</td>
                   
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Exec-team</td>
                    <td>9998 calories</td>
                    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Others People</td>
                    <td>50 calories</td>
                  </tr>
                </tbody>
              </table>
        </div>
            
        </div>
    </div>
    
    
     
        


  </body>
</html>
