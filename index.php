<?php
 
// Get data from server
$totalpersonal = 1800;
$totalweek = 800;
$packets = 2;
$personalfavorite = "Fly Fishing";
$totalteam = 304123; // total team calories
$teampackets = 608; // floor(Team calories/500);
$teamchildren = 5; // floor(children saved);
$teamfavorite = "Tough Mudder";

$totalglobal = 324170; // total global cals
 
?>

<?php

if(!isset($_GET["user"])) {
    header("Location: https://jpmcorporatewellness-c9-ikcede.c9.io/login.php");
}

$admin = false;
if($_GET["user"] == "admin") {
    $admin = true;
}
 
?>


<?php

include_once("views/globals.tpl.php");
include_once("views/header.tpl.php");

?>

<body>

<?php 

include_once("views/menu.tpl.php");

echo "<br>";

include_once("views/profile.tpl.php");
include_once("views/team.tpl.php");
include_once("views/global.tpl.php");

if($admin) {
    include_once("views/admin.tpl.php");
}

include_once("views/plugin.tpl.php");
?>

</body>
</html>
