<div class="container">
  <div class="masthead">
    <ul id="header" class="nav nav-justified">
      <li class="tab active" page="profile"><a href="#">Profile</a></li>
      <li class="tab" page="team"><a href="#">Team</a></li>
      <li class="tab" page="global"><a href="#">Global</a></li>
      
      <?php if($admin) print('<li class="tab" page="admin"><a href="#">Admin</a></li>'); ?>
      
      <li id="settings">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://png-2.findicons.com/files/icons/1786/oxygen_refit/128/system_config_services.png" WIDTH="20"></a>
        <ul class="dropdown-menu" role="menu">
            <li><a data-toggle="modal" href="#pluginModal">Plugins</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
      <li id="companylogo"><a target="_blank" href="http://www.jpmorgan.com/"><img src="http://www.jpmorgan.com/images/jpmorgan_logo.png" WIDTH="80" ></a></li>
      
    </ul>
  </div>
</div> <!-- /container -->