<!DOCTYPE html>
<html>
<head>

	<title><?php echo $head["title"]; ?></title>
	<?php
	foreach($head["meta"] as $k => $v) {
		print("<meta name='$k' content = '$v'>\n");
	}
	print("\n");
	foreach($head["css"] as $val) {
		print("<link rel='stylesheet' type='text/css' href='$val' />\n");
	}
	print("\n");
	foreach($head["script"] as $val) {
		print("<script type='text/javascript' src='$val'> </script>\n");
	}
	print("\n");
	if(isset($head["base"])) print("<base href='".$head["base"]["href"]."' target='".
		$head["base"]["target"]."'>\n");
	if(isset($head["favicon"])) {
		print("<link rel='shortcut icon' href='".$head["favicon"]."' type='image/x-icon'/>\n");
	}
	print("\n");
	print($head["custom"]);
	?>
	
</head>