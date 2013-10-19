<?php
include_once("views/globals.tpl.php");
include_once("views/header.tpl.php");
?>
  <body>

    <?php include_once("views/menu.tpl.php"); ?>
    
    <br>
    <div class="container" >
        <div class="jumbotron">
            <div id="total-calories"><span id="amount">1800</span> Cals</div>
            <!-- Three columns here: team burnt, favorite activity, weekly cal, children saved, badges -->
        </div>
    </div>
    
        <div class="container" >
            <div class="jumbotron">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><center>#</center></th>
                    <th><center>Activity</center></th>
                    <th><center>Calories Burned</center></th>
                  </tr>
                </thead>
                
                <?php
                   // function getActivities($con)
                    //{
                    $con = mysql_connect("localhost","root","bitnami");
                    //get UID for currently logged in user 
                    // $curUID = 
                    //$query = "SELECT activity.UID, activity.activity, caltable.calories FROM activity where activity.UID = '".$curUID."'";
                    //$result = mysql_query($query) or die(mysql_error());
		
		            // Return results of Select
	            	//return $result;
                  //  }
                //    if ($con){
                  //      echo "GOOD CONNECTION<br/>";
		                
	                //    }
                	//else{
		            //echo "BAD SQL CONNECTION<br />";
                    
                    //mysql_select_db("activity", $con);
                    //$result = getActivities($con);
                    
                    //echo "<br/>
	                //	<table border='1'>
			          ///  <tr>
				         //   <td><b>Activity</b></td>
				           // <td><b>Burned Calories</b></td>
			            //</tr>";
			            
			          /**  
			            while($row = mysql_fetch_array($result))
            			{
                			echo "<tr>";
                			echo "<td>";
                			echo $row['activity'];
                			echo "</td>";
                			echo "<td>";
                			echo $row['calories'];
                			echo "</td>";
                			echo "</tr>";
            			}
            			echo "</table>";
            			*/
                //	}
                //	mysql_close($con);
		      ?>
                    
                
                
                
                
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Walking</td>
                    <td>100 calories</td>
                    
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jogging</td>
                    <td>100 calories</td>
                   
                  </tr>
                  <tr class="success">
                    <td>3</td>
                    <td>Biking</td>
                    <td>300 calories</td>
                    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Walking</td>
                    <td>50 calories</td>
                  
                  </tr>
                  <tr class="warning">
                    <td>5</td>
                    <td>Swimming</td>
                    <td>600 calories</td>
                  
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Jogging</td>
                    <td>200 calories</td>
                  </tr>
                  <tr class="danger">
                    <td>7</td>
                    <td>Boxing </td>
                    <td> 800 calories</td>
                  </tr>
                </tbody>
              </table>
        </div>
            
        </div>
    </div>
    
    
     
        


  </body>
</html>
