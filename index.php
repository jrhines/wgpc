<?php $title = "Home"; ?>

<?php require 'includes/top.php'; ?>

<?php require 'includes/header.php'; ?>

<div id="primeColumn">

	<h1>The Meaning of Faithful Community</h1>
	<h3>West Granville Presbyterian Church</h3>
	<p>West Granville is an open and living congregation which believes that each person bears a reflection of the image and likeness of our Creator. Within the church family we are encouraged to share our insights, feelings and reflections freely. We treasure deeply held values and yet teach tolerance and respect. There is a true freedom from being accepted in a community of faith while being challenged to grow deeper in our walk with God.</p>
	<h2 class="secondArticlePosition">West Granville&#8217;s Welcoming Statement</h2>
	<p class="creditLine">Unanimously adopted by the West Granville Session: August 23, 2004</p>
	<p>The Apostle Paul tells us in Galatians that we are all one in Christ Jesus.</p>
	<p>Recognizing that God&#8217;s Grace is available to everyone, we open our doors and strive for full participation for all believers regardless of their gender, age, ethnicity, sexual identity, physical or mental ability, social status, or family structure.</p>
	<p>Guide our steps as we work toward unity.</p>

	<br /><br /><br />

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick" />
		<input type="hidden" name="hosted_button_id" value="ZCDNM3NXXYYLN" />
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" />
		<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
	</form>

	<br /><br /><br />

	<h2>Portrait Sign-Up</h2>
	<p>The Member Care Committee will be doing an updated picture directory for 2015 with Lifetouch Photography. The portraits will be taken right at West Granville and families now have an opportunity to sign up for a time slot. Lifetouch will be shooting on March 17th, 18th, 19th, 20th &amp; 21st.</p>
	<p>If you are thinking about having a new family portrait taken, this is a great way to accomplish that and help our Committee make this directory a success! Lifetouch Photography prides themselves on being very low pressure. All families will receive one FREE 8x10 photo, $5 off with a donation to the Food Pantry and all additional portrait orders are 20% off or more!</p>
	<p>Sign up now! Click the link below to start.</p>
	<p>
		<a href="javascript:;" onclick="window.open('https://www.securedata-trans14.com/ap/westgranvillepresbyterianchurch/index.php?page=10','','toolbar=yes,location=yes,directories=no,status=yes,menubar=yes,resizable=yes,copyhistory=no,scrollbars=yes,width=800,height=600,left=0,top=0')">Schedule your Photo Shoot here!</a>
	</p>
	<iframe width="410" height="231" src="https://www.youtube.com/embed/zU6waBsnMgs?showinfo=0" allowfullscreen></iframe>
</div>

<div class="highlightField scheduleFieldPosition">

	<div class="highlightFieldBorder">

		<dl>

			<?php

				$text1 = strftime('%b%d%Y', $sunday1);

				$text2 = strftime('%b%d%Y', $sunday2);

				$text3 = strftime('%b%d%Y', $sunday3);

				$text4 = strftime('%b%d%Y', $sunday4);

			?>

			<dt>Worship Service</dt>

			<dd>

				<p class="worshipDateContainer">

					<span class="worshipDate"><?php print strftime('%d', $sunday1);?></span>

					<span class="worshipMonth"><?php print strftime('%b', $sunday1);?></span>

					10:30

				</p>

				<p class="worshipDateDetails"><?php require ("text/".$text1.".php"); ?></p>

			</dd>

			<dd>

				<p class="worshipDateContainer">

					<span class="worshipDate"><?php print strftime('%d', $sunday2);?></span>

					<span class="worshipMonth"><?php print strftime('%b', $sunday2);?></span>

					10:30

				</p>

				<p class="worshipDateDetails"><?php require ("text/".$text2.".php"); ?></p>

			</dd>

			<dd>

				<p class="worshipDateContainer">

					<span class="worshipDate"><?php print strftime('%d', $sunday3);?></span>

					<span class="worshipMonth"><?php print strftime('%b', $sunday3);?></span>

					10:30

				</p>

				<p class="worshipDateDetails"><?php require ("text/".$text3.".php"); ?></p>

			</dd>

			<dd>

				<p class="worshipDateContainer">

					<span class="worshipDate"><?php print strftime('%d', $sunday4);?></span>

					<span class="worshipMonth"><?php print strftime('%b', $sunday4);?></span>

					10:30

				</p>

				<p class="worshipDateDetails"><?php require ("text/".$text4.".php"); ?></p>

			</dd>

		</dl>

	</div>

</div>

<div class="floatRight">

	<div class="highlightField">

		<div class="highlightFieldBorder">

			<dl>

				<dt>Latest News / Events</dt>

				<?php require 'text/homeNews.php'; ?>

			</dl>

		</div>

	</div>

	<script src="http://serve.a-widget.com/kickapps/service/getFlashEmbedXml.kickAction?b=165583" type="text/javascript"></script>

</div>

<?php require 'includes/footer.php'; ?>