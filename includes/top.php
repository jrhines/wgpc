<!DOCTYPE html> 
<html>

<?php

$url = "";
$link = "";
$images = "";


$url = $_SERVER["SERVER_NAME"];

switch ($url) {
	case "wgpc":
		if(isset($link)) {
			$link = "http://wgpc:8080/";
		}
	break;
	
	default:
		if(isset($link)) {
			$link = "http://www.westgranville.org/";
		}
}

$images = $link."images/";


//This php variable looks at the current string and assigns the directory folder name to it
$file = dirname ($_SERVER['PHP_SELF']); // $file is set to "/etc"

switch ($file) {
	
	case "/about":
		$navstate1 = "hover";
		$navstate2 = "visited";
		$navstate3 = "hover";
		$navstate4 = "hover";
		$navstate5 = "hover";
		$navstate6 = "hover";
	break;
	
	case "/pastors_message":
		$navstate1 = "hover";
		$navstate2 = "hover";
		$navstate3 = "visited";
		$navstate4 = "hover";
		$navstate5 = "hover";
		$navstate6 = "hover";
	break;
	
	case "/calendar":
		$navstate1 = "hover";
		$navstate2 = "hover";
		$navstate3 = "hover";
		$navstate4 = "visited";
		$navstate5 = "hover";
		$navstate6 = "hover";
	break;
	
	case "/youth_education":
		$navstate1 = "hover";
		$navstate2 = "hover";
		$navstate3 = "hover";
		$navstate4 = "hover";
		$navstate5 = "visited";
		$navstate6 = "hover";
	break;
	
	case "/articles":
		$navstate1 = "hover";
		$navstate2 = "hover";
		$navstate3 = "hover";
		$navstate4 = "hover";
		$navstate5 = "hover";
		$navstate6 = "visited";
	break;
	
	default:
		$navstate1 = "hover";
		$navstate2 = "hover";
		$navstate3 = "hover";
		$navstate4 = "hover";
		$navstate5 = "hover";
		$navstate6 = "hover";
}

//These php variables determine the date at present, find the next calendar Sunday 
//and then calculate the next 3 calendar Sundays
$now = time();
$sunday1 = strtotime('this Sunday',$now);
$sunday2 = strtotime('+7day',$sunday1);
$sunday3 = strtotime('+14day',$sunday1);
$sunday4 = strtotime('+21day',$sunday1);

?>

<head>
<title>West Granville Presbyterian Church: <?php echo $title ?></title>
<meta name="description" content="West Granville Presbyterian Church is a congregation that welcomes witnesses, works and worships with Christian brothers and Christian sisters in accordance with the Holy Scriptures." />
<meta name="keywords" content="church, presbyterian, West Granville, Milwaukee, Wisconsin, faith, God, Lord, worship, Christian, holy, scriptures, gospel, religion" />
<meta name="verify-v1" content="pnMSvg5+XMZUgZuaPVKhMlFenm7mqcEAbv/pGviHvj4=" />

<link rel="stylesheet" type="text/css" href="<?php echo $link ?>css/wgpcPositions.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $link ?>css/wgpcText.css" />
<style type="text/css" media="all">
	/*hover states*/
	#panel1nav a:<?php echo $navstate1 ?>, #panel1nav:<?php echo $navstate1 ?> a, #panel1nav.over a {
		background-position: 0 -20px;
	}
	#panel2nav a:<?php echo $navstate2 ?>, #panel2nav:<?php echo $navstate2 ?> a, #panel2nav.over a {
		background-position: -40px -20px;
	}
	#panel3nav a:<?php echo $navstate3 ?>, #panel3nav:<?php echo $navstate3 ?> a, #panel3nav.over a {
		background-position: -170px -20px;
	}
	#panel4nav a:<?php echo $navstate4 ?>, #panel4nav:<?php echo $navstate4 ?> a, #panel4nav.over a {
		background-position: -277px -20px;
	}
	#panel5nav a:<?php echo $navstate5 ?>, #panel5nav:<?php echo $navstate5 ?> a, #panel5nav.over a {
		background-position: -394px -20px;
	}
	#panel6nav a:<?php echo $navstate6 ?>, #panel6nav:<?php echo $navstate6 ?> a, #panel6nav.over a {
		background-position: -498px -20px;
	}
</style>

<script src="<?php echo $link ?>westgranville.js" type="text/javascript"></script>
<?php 
	if ($title == "Contact Us")
  		echo "<script src='http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAASkB-eyvCOQDOCStfofo7VRSzL32jSXp5-sWDZMNc6C-SPle_KhRfpQSvQdl39m4vQ4eGwV7-BMFxaw' type='text/javascript'></script>";
?>
</head>

<body <?php if ($title == "Contact Us")  echo "onload='initAll()' onunload='GUnload()'"; else echo "onload='initStartList()'";?>>