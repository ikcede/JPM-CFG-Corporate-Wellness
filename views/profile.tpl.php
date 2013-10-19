<div class="page" content="profile">
    <div class="container" >
        <div class="jumbotron">
            <div id="total-calories"><span id="amount">1800</span> Cals</div>
            
            <div class="row text-left">
                <!-- Three columns here: team burnt, favorite activity, weekly cal, children saved, badges -->
                <div class="col-md-4">
                    Team burnt: 
                    <span id="teamburn"><?php echo $totalteam; ?></span>
                </div>
                <div class="col-md-4">
                    Favorite Activity:
                    <span id="favact-personal"><?php echo $personalfavorite; ?></span>
                </div>
                <div class="col-md-4">
                    Total Week:
                    <span id="weekly-personal"><?php echo $totalweek; ?></span>
                </div>
            </div>
            
            <div class="row text-left">
                <div class="col-md-4">
                    Packets Earned:
                    <span id="packets-personal"><?php echo $packets; ?></span>
                </div>
                <div class="col-md-8">
                   Badges: <img src="http://i203.photobucket.com/albums/aa128/downtown630/flash.jpg" height="15" width="15">
                   <img src="http://s3.amazonaws.com/commendablekids.com.prod/badges/56/large.png?1287263039" height="15" width="15">
                   <img src="http://cdn.business2community.com/wp-content/uploads/2012/12/you-tried-star-resized-600.png" height="15" width="15">
                   <img src="http://kleinletters.com/Blog/wp-content/uploads/2008/01/wwemblem.jpg" height="15" width="15">
                   <img src="http://www.vectortemplates.com/raster/superman-logo-012.png" height="15" width="15">
                    <img src="http://www.andersons.com/~/media/Andersons/Products/School-Awards/Buttons/Magnet-Buttons/9001BSM_0425/701--9001BSM_0425--Magnet-Button-Most-Improved--000.ashx?w=230&h=230&bc=FFFFFF" height="15" width="15">
                </div>
            </div>
            
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
</div>