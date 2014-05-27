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
					9:30
				</p>
				<p class="worshipDateDetails"><?php require ("text/".$text1.".php"); ?></p>
			</dd>
			<dd>
				<p class="worshipDateContainer">
					<span class="worshipDate"><?php print strftime('%d', $sunday2);?></span>
					<span class="worshipMonth"><?php print strftime('%b', $sunday2);?></span>
					9:30
				</p>
				<p class="worshipDateDetails"><?php require ("text/".$text2.".php"); ?></p>
			</dd>
			<dd>
				<p class="worshipDateContainer">
					<span class="worshipDate"><?php print strftime('%d', $sunday3);?></span>
					<span class="worshipMonth"><?php print strftime('%b', $sunday3);?></span>
					9:30
				</p>
				<p class="worshipDateDetails"><?php require ("text/".$text3.".php"); ?></p>
			</dd>
			<dd>
				<p class="worshipDateContainer">
					<span class="worshipDate"><?php print strftime('%d', $sunday4);?></span>
					<span class="worshipMonth"><?php print strftime('%b', $sunday4);?></span>
					9:30
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