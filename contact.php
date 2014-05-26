<?php 
	$title = "Contact Us";
	$headerImage = "congregation.jpg";
	$headerImageAlt = "Image Courtesy Troy Freund Photography";
?>
<?php require 'includes/top.php'; ?>
<?php require 'includes/header.php'; ?>

<div id="primeColumn">
	<h1>Contact Us</h1>
	<?php 
	// Print a text box
	function input_text($element_name, $values) {
		print '<input type="text" name="' . $element_name .'" id="' . $element_name .'" class="inputGeneral" maxlength="50" value="';
		print htmlentities($values[$element_name]) . '">';
	}
	// Print a phone text box
	function input_phonetext($element_name, $values) {
		print '<input type="text" name="' . $element_name .'" id="' . $element_name .'" maxlength="12" value="';
		print htmlentities($values[$element_name]) . '">';
	}
	// Print a zip text box
	function input_ziptext($element_name, $values) {
		print '<input type="text" name="' . $element_name .'" id="' . $element_name .'" class="zipCodeInput" maxlength="10" value="';
		print htmlentities($values[$element_name]) . '">';
	}
	// Print a text area
	function input_textarea($element_name, $values) {
		print '<textarea name="' . $element_name .'" id="' . $element_name .'" cols="65" rows="10">';
		print htmlentities($values[$element_name]) . '</textarea>';
	}
	// Print a radio button or checkbox
	function input_radiocheck($type, $element_name, $values, $element_value) {
	     print '<input class="checkbox" type="' . $type . '" name="' . $element_name .'" id="' . $element_name .'" value="' . $element_value . '" ';
	     if ($element_value == $values[$element_name]) {
	         print ' checked="checked"';
	     }
	     print '/>';
	}
	//print a <select> menu
	function input_select($element_name, $selected, $options, $multiple = false) {
		//print out the <select> tag
		print '<select name="' . $element_name;
		// if multiple choices are permitted, add the multiple attribute
		// and add a [ ]  to the end of the tag name
		if ($multiple) {print '[ ]" multiple="multiple'; }
		print '">';
		
		//set up the list of things to be selected
		$selected_options = array();
		if ($multiple) {
			foreach ($selected[$element_name] as $val) {
				$selected_options[$val] = true;
			}
		} else {
			$selected_options[ $selected[$element_name] ] = true;
		}
		
		//print out the <option> tags
		foreach ($options as $option => $label) {
			print '<option value="' . htmlentities($option) . '"';
			if ($selected_options[$option]) {
				print ' selected="selected"';
			}
			print '>' . htmlentities($label) . '</option>';
		}
		print '</select>';
	}
	
	// Print a submit button
	function input_submit($element_name, $label) {
		print '<input type="submit" name="' . $element_name .'" class="submitBtn" value="';
		print htmlentities($label) . '"/>';
	}
	
	// setup the arrays of choices in the select menus
	// these are needed in the display_form(), validate_form(),
	// and process_form(), so they are declared in the global scope
	$state = array('' => '',
					'AL' => 'AL',
					'AK' => 'AK',
					'AZ' => 'AZ',
					'AR' => 'AR',
					'CA' => 'CA',
					'CO' => 'CO',
					'CT' => 'CT',
					'DE' => 'DE',
					'DC' => 'DC',
					'FL' => 'FL',
					'GA' => 'GA',
					'HI' => 'HI',
					'ID' => 'ID',
					'IN' => 'IN',
					'IA' => 'IA',
					'KS' => 'KS',
					'KY' => 'KY',
					'LA' => 'LA',
					'ME' => 'ME',
					'MD' => 'MD',
					'MA' => 'MA',
					'MI' => 'MI',
					'MN' => 'MN',
					'MS' => 'MS',
					'MO' => 'MO',
					'MT' => 'MT',
					'NE' => 'NE',
					'NV' => 'NV',
					'NH' => 'NH',
					'NJ' => 'NJ',
					'NM' => 'NM',
					'NY' => 'NY',
					'NC' => 'NC',
					'ND' => 'ND',
					'OH' => 'OH',
					'OK' => 'OK',
					'OR' => 'OR',
					'PA' => 'PA',
					'RI' => 'RI',
					'SC' => 'SC',
					'SD' => 'SD',
					'TN' => 'TN',
					'TX' => 'TX',
					'UT' => 'UT',
					'VA' => 'VA',
					'VT' => 'VT',
					'WA' => 'WA',
					'WI' => 'WI',
					'WV' => 'WV',
					'WY' => 'WY',
					'-' => '-',
					'AB' => 'AB',
					'BC' => 'BC',
					'MB' => 'MB',
					'NB' => 'NB',
					'NF' => 'NF',
					'NT' => 'NT',
					'NS' => 'NS',
					'NU' => 'NU',
					'ON' => 'ON',
					'PE' => 'PE',
					'QC' => 'QC',
					'SK' => 'SK',
					'YT' => 'YT');
	
	// The main page logic
	// - If the form is submitted, validate and then process or redisplay
	// - If it's not submitted, display
	if ($_POST['_submit_check']) {
		// If validate_form() returns errors, pass them to show_form()
		if ($form_errors = validate_form()) {
			show_form($form_errors);
		} else {
			// The submitted data is valid, so process it
			process_form();
		}
	} else {
		// The form wasn't submitted, so display
		show_form();
	}
	
	function show_form($errors = '') {
		// If the form is submitted, get defaults from submitted parameters
		if ($_POST['_submit_check']) {
			$defaults = $_POST;
		} else {
		 $defaults = array('state' => array('state',''));
		}
	
		// If errors were passed in, put them in $error_text (with HTML markup)
		if ($errors) {
			$error_text = '<p class="error">Please correct the following errors:<br />';
			$error_text .= '<ul><li class="error">';
			$error_text .= implode('</li><li class="error">',$errors);
			$error_text .= '</li></ul></p>';
		} else {
			// No errors? Then $error_text is blank
			$error_text = '';
		}
	
		// Jump out of PHP mode to make displaying the HTML tags easier
	?>
	<p>Complete the form below to submit your questions, comments and concerns to the church.</p>
	<p><span class="error">*</span> <span class="creditLine">Indicates a required field. Information for contact purposes only. West Granville Presbyterian Church will not share any information with third parties.</span></p>
	<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>">
		<?php print $error_text ?>
		<label class="labelGeneral" for="firstname"><span class="error">*</span> First Name:</label>						
		<?php input_text('firstname', $defaults) ?>
		
		<label class="labelGeneral" for="lastname"><span class="error">*</span> Last Name:</label>						
		<?php input_text('lastname', $defaults) ?>
		
		<label class="labelGeneral" for="address1">Address:</label>						
		<?php input_text('address1', $defaults) ?><br />
		<?php input_text('address2', $defaults) ?>
		<fieldset class="floatLeft">
			<label class="labelGeneral" for="city">City:</label>									
			<?php input_text('city', $defaults) ?>
		</fieldset>
		<fieldset class="floatLeft stateFieldset">
			<label class="labelGeneral" for="state">State/Province:</label>
			<?php input_select('state', $defaults, $GLOBALS['state']); ?>
		</fieldset>
		<fieldset class="floatLeft">
			<label class="labelGeneral" for="zip">Zip Code:</label>									
			<?php input_ziptext('zip', $defaults) ?>
		</fieldset>
						
		<label class="labelGeneral clear" for="country">Country</label>
		<?php require 'includes/countryPulldown.php';?>
		
		<label class="labelGeneral" for="phone">Phone (012-345-6789):</label>									
		<?php input_phonetext('phone', $defaults) ?>
		
		<label class="labelGeneral" for="fax">Fax (012-345-6789):</label>						
		<?php input_phonetext('fax', $defaults) ?>
		
		<label class="labelGeneral" for="email"><span class="error">*</span> E-mail Address:</label>						
		<?php input_text('email', $defaults) ?>
		
		<label class="labelGeneral" for="comments">Comments or Questions:</label>	
		<?php input_textarea('comments', $defaults); ?>
		
		<fieldset class="emailListLabel">
			<?php input_radiocheck('checkbox', 'emailList', $defaults, 'Yes'); ?> <label for="emailList" class="labelCheckbox">Yes, please sign me up for the West Granville e-mail list.</label>
		</fieldset>
		<fieldset class="postalListLabel">
			<?php input_radiocheck('checkbox', 'postalList', $defaults, 'Yes'); ?> <label for="postalList" class="labelCheckbox">Yes, please sign me up for the West Granville postal mailing list.</label>
		</fieldset>
		<?php input_submit('submit', 'Submit'); ?> <a href="<?php echo $link ?>privacy.php" class="floatRight">Privacy Statement</a>
		
		<input type="hidden" name="_submit_check" value="1"/> 
	</form>
	<?php
		} // The end of show_form()
		
		function validate_form() {
			$errors = array();
				
			// firstname is required
			if (! strlen(trim($_POST['firstname']))) {
				$errors[ ] = 'Please enter your first name.';
			}
			// lastname is required
			if (! strlen(trim($_POST['lastname']))) {
				$errors[ ] = 'Please enter your last name.';
			}
			// email is required
			if (! strlen(trim($_POST['email']))) {
				$errors[ ] = 'Please enter your email address.';
			}
			// validate email address submitted
			if (! preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i',
							$_POST['email'])) {
				$errors[ ] = 'Please enter a valid email address.';
			}
			// if postalList is checked, then address1 must contain something
			if (($_POST['postalList'] == 'Yes') && (! strlen(trim($_POST['address1'])))) {
				$errors[ ] = 'Please enter your street address to receive West Granville Presbyterian Church postal mailings.';
			}
			// if postalList is checked, then city must contain something
			if (($_POST['postalList'] == 'Yes') && (! strlen(trim($_POST['city'])))) {
				$errors[ ] = 'Please enter your city to receive West Granville Presbyterian Church postal mailings.';
			}
			// if postalList is checked, then state must contain something
			if (($_POST['postalList'] == 'Yes') && (! strlen(trim($_POST['state'])))) {
				$errors[ ] = 'Please enter your state to receive West Granville Presbyterian Church postal mailings.';
			}
			// if postalList is checked, then zip must contain something
			if (($_POST['postalList'] == 'Yes') && (! strlen(trim($_POST['zip'])))) {
				$errors[ ] = 'Please enter your zip code to receive West Granville Presbyterian Church postal mailings.';
			}
			
			return $errors;
		}
			
		function process_form() {
			//look up the full names of the states in
			//the $GLOBALs['state'] array
			$state = $GLOBALS['state'][ $_POST['state'] ];
			
			// This section defines the variables for the mail script
			// ".\n" after each $msg variable is the code for a hard return for the e-mail results
			$recipient = 'wgpc@westgranville.org';
	     	$subject = 'West Granville Contact Us Form Submission';
		
			$msg = 'First Name: '.$_POST['firstname']."\n";
			$msg .= 'Last Name: '.$_POST['lastname']."\n";
			$msg .= 'Address Line 1: '.$_POST['address1']."\n";
			$msg .= 'Address Line 2: '.$_POST['address2']."\n";
			$msg .= 'City: '.$_POST['city']."\n";
			$msg .= 'State: '.$_POST['state']."\n";
			$msg .= 'Zip Code: '.$_POST['zip']."\n";
			$msg .= 'Country: '.$_POST['country']."\n";
			$msg .= 'Phone: '.$_POST['phone']."\n";
			$msg .= 'Fax: '.$_POST['fax']."\n";
			$msg .= 'E-mail Address: '.$_POST['email']."\n";
			$msg .= 'Comments or Questions: '.$_POST['comments']."\n";
			$msg .= 'E-mail Sign-up: '.$_POST['emailList']."\n";
			$msg .= 'Postal Mailing List Sign-up: '.$_POST['postalList']."\n";
			
			$header = "From: wgpc@westgranville.org";
			
			// send the message to wgpc@westgranville.org
			mail($recipient, $subject, $msg, $header);
			print nl2br("Thank you for contacting us.<br /> A representative from the church will respond to you soon.");
		}
	?>
</div>
<div id="secondColumn">
	<h2>Address</h2>
	<p>
		West Granville Presbyterian Church<br />
		6935 North 107th Street<br />
		Milwaukee, WI 53224-4316
	</p>
	<p>
		Telephone: (414)-353-8680
	</p>
	<div id="map" style="width: 400px; height: 300px;"></div><br />
	Enter your starting address:<br />
	<form action="http://maps.google.com/maps" method="get">
		<input type="text" name="saddr" id="saddr" size="35" value="" class="map" />
        <input type="submit" value="Get Directions" />
        <input type="hidden" name="daddr" value="6935 North 107th Street, Milwaukee, WI 53224-4316" />
       	<input type="hidden" name="hl" value="en" />
	</form>
</div>

<?php require 'includes/footer.php'; ?>	