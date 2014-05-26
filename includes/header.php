<a name="top"></a>
<ul class="divNav" id="nav">
	<li id="panel1nav" class="off" title="Home"><a href="<?php echo $link ?>index.php"></a></li>
	<li id="panel2nav" class="off" title="About West Granville"><a href="<?php echo $link ?>about/about.php"></a></li>
	<li id="panel3nav" class="off" title="Pastor's Message"><a href="<?php echo $link ?>pastorsMessage/pastorsMessage.php"></a></li>
	<?php //<li id="panel4nav" class="off" title="Calendar of Events"><a href="javascript:;" onClick="window.open('http://www.westgranville.org/calendar/index.php','','toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,copyhistory=no,scrollbars=yes,width=750,height=600,left=0,top=0')"></a></li>?>
	<li id="panel5nav" class="off" title="Youth Education"><a href="#"></a>
     	<ul>
       		<li><img src="<?php echo $images ?>spacer.gif" height="1" width="350" alt="" border="0" /></li>
       		<li><a href="<?php echo $link ?>youthEducation/nursery.php">Nursery</a></li>
			<li><a href="<?php echo $link ?>youthEducation/scholarships.php">Scholarships</a></li>
			<!--li><a href="<?php echo $link ?>youthEducation/confirmation.php">Junior High &amp; Confirmation</a></li-->
		</ul>
	</li>
	<!--<li id="panel6nav" class="off" title="Articles"><a href="<?php echo $link ?>articles/pcusaFeeds.php"></a></li>-->
</ul>
<?php
//randomize the array of 6 banners
$banner = array("rhines-wedding.jpg", 
				"west-granville-bell-choir.jpg",
				"west-granville-benton-harbor.jpg",
				"west-granville-boy-scouts.jpg",
				"west-granville-cookout.jpg",
				"west-granville-kids.jpg",
				"west-granville-golf-outing.jpg");

//assign random banner to variable "$rand_banner"
$rand_banner = array_rand($banner, 6);
$bannerFinal = $banner[$rand_banner[0]];
switch ($title) {
	case "Home":
?>
	<div id="homeHeaderContainer">
		<img src="<?php echo $images ?>homeheaderImages/<?php echo $bannerFinal ?>" class="floatLeft" width="770" height="170" border="0" alt="We are West Granville." /><img src="<?php echo $images ?>homeheaderImages/churchHeader.jpg" class="floatLeft" width="224" height="170" border="0" alt="West Granville Presbyterian Church" />
	</div>
<?php
	break;
	default:
?>
	<div id="headerContainer">
		<img src="<?php echo $images ?>headerImages/<?php echo $headerImage ?>" width="770" height="55" alt="<?php echo $headerImageAlt ?>" />
	</div>
<?php } ?>
<div id="siteContainer">