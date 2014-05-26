<?php 
	$title = "Site Map";
	$headerImage = "congregation.jpg";
	$headerImageAlt = "Image Courtesy Troy Freund Photography";
?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/header.php'; ?>

<div id="primeColumnFull">
	<h1>Site Map</h1>
	
	<ul class="siteMapColumn">
		<li><a href="<?php echo $link ?>index.php">Home</a></li>
		<li><a href="<?php echo $link ?>about/about.php">About West Granville</a></li>
		<li><a href="<?php echo $link ?>pastorsMessage/pastorsMessage.php">Pastor&#8217;s Message</a></li>
		<!--<li><a href="javascript:;" onclick="window.open('http://www.westgranville.org/calendar/index.php','','toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,copyhistory=no,scrollbars=no,width=600,height=600,left=0,top=0')">Calendar of Events</a></li>-->
	</ul>
	<ul class="siteMapColumn">
		<li>Youth Education
			<ul>
				<li><a href="<?php echo $link ?>youthEducation/nursery.php">Nursery</a></li>
				<li><a href="<?php echo $link ?>youthEducation/scholarships.php">Scholarships</a></li>
				<li><a href="<?php echo $link ?>youthEducation/confirmation.php">Junior High &amp; Confirmation</a></li>
			</ul>
		</li>
	</ul>
	<ul class="siteMapColumn">
		<!--<li><a href="<?php echo $link ?>articles/pcusaFeeds.php">Articles</a></li>-->
		<li><a href="<?php echo $link ?>contact.php">Contact Us</a></li>
		<li><a href="<?php echo $link ?>community.php">Community Links</a></li>
		<li><a href="http://affiliate.kickapps.com/kickapps/_/club/59568/9920.html">Adult Choir</a></li>
	</ul>
</div>

<?php require 'includes/footer.php'; ?>