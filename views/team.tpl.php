<div class="page" content="team">
    <div class="container" >
        <div class="jumbotron">
            <div id="Team-Total-Calories"><span id="amount"><span id="teamburn"><?php echo $totalteam; ?></span></span> Cals</div>
            
            <div class="row text-left">
                <!-- Three columns here: team burnt, favorite activity, weekly cal, children saved, badges -->
                <div class="col-md-4">
                    Packets Earned: 
                    <span id="packets-team"><?php echo $teampackets; ?></span>
                </div>
                <div class="col-md-4">
                    Children Saved:
                    <span id="children-team"><?php echo $teamchildren; ?></span>
                </div>
                <div class="col-md-4">
                    Favorite Activity: 
                    <span id="favact-team"><?php echo $teamfavorite; ?></span>
                </div>
            </div>
            
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
                    <td><center>Bill G</center></td>
                  </tr>
                  <tr>
                    <td><center>2</center></td>
                    <td><center>Steve Jobs</center></td>
                  </tr>
                  <tr>
                    <td><center>3</center></td>
                    <td><center>Woz</center></td>
                  </tr>
                  <tr  class="warning">
                    <td><center>4</center></td>
                    <td><center> Cook</center></td>
                  </tr>
                  <tr class="danger">
                    <td><center>5</center></td>
                    <td><center>Steve B</center> </td>
                  </tr>
                </tbody>
              </table>
    
    </div>
    
    
    <div class="col-md-4"><b><center>Team Message Board</center></b>
        <!-- take 5 most recent activity posts from the activity table -->
        <!-- match the ID with the user's first name -->
        <!-- find the teamID -->
        <!-- only display those who's team ID match your team ID -->
        
        <?php
            //connect to database
            //get cur user's teamID
            //create query
            //query: Select A.activity, I.ID from activity, User.ID, T.teamID from JP WHERE
                        
                        
                        
              //  echo "<br/>
                
                //	<table border='1'>
    	          //  <tr>
    		        //    <td><b>Teammate</b></td>
    		          //  <td><b>Update</b></td>
    	            //</tr>";
			            
			          /**  
			            while($row = mysql_fetch_array($result))
            			{
                			echo "<tr>";
                			echo "<td>";
                			echo $row['teammate'];
                			echo "</td>";
                			echo "<td>";
                			echo $row['update'];
                			echo "</td>";
                			echo "</tr>";
            			}
            			echo "</table>";
            			*/
                //	}
                //	mysql_close($con);
		      ?>
        
        <table class="table table-hover ">
            <tbody>
              <tr>
                <td><center>Keep it Up!</center></td>
              </tr>
              <tr >
                <td><center> Bill G ran 2 miles today</center></td>
              </tr>
              <tr >
                <td><center>Hey we are in second place, lets go Kayaking this weekend!</center> </td>
              </tr>
            </tbody>
          </table>
        
        
        
        
        
    </div>
    <div class="col-md-2"></div>
    
    
  
   </div>
</div>