<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
	$submitted = FALSE;
	
	if($_POST['zip'])
	{
		$action = 'http://labs.healthtronics.com/physicianfinder/physicianfinder.asmx/PhysicianFinder';
		$type = $_POST['physician_type'];
		$zip  = $_POST['zip'];
		$formVars = "zipcode=". $zip ."&results=10&condition=" . $type;
		$handle = curl_init($action);
		$submitted = TRUE;
		
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handle, CURLOPT_POST, TRUE);
		curl_setopt($handle, CURLOPT_POSTFIELDS, $formVars);
		try
		{
			// the response is returned as xml with a node <string>
			// which has a json response in it
			// so we need to grab the value out of the xml
			// before processing as json
			$doc  	 = new SimpleXMLElement(curl_exec($handle));
			$json 	 = json_decode($doc);
			$success = TRUE;
		}catch(Exception $e){
			$error = TRUE;
			$errorMessage = 'Caught exception: ' . $e->getMessage();
			print 'Reponse: <br />' . curl_exec($handle);
		}
		curl_close($handle);
		$total = count($json);
	}else{
		$no_search_yet = TRUE;
	}
?>

<h2 id="title" class="find-a-md-title">Find a HealthTronics Affliated Physician</h2>
<?php if ($success && $total > 0) :?>
<div id="find-a-physician-result-summary"><?php print count($json); ?> HealthTronics Physicians found near you.</div>
<!-- Body  -->
<div class="find-a-md-result-container">
	<?php foreach($json as $physician):?>
		<?php
		 	$address = $physician->Address;
			$city = $physician->City;
			$state = $physician->State;
			$zip = $physician->Zip;
			$addressString = $address.', '.$city.', '.$state.''.$zip;
		?>
		<div class="row">
			<div data-location="<?php print $addressString; ?>" class="map find-a-md-map span3">
				Loading Map...
			</div>
			<div class="find-a-md-result span6">
				<h2><?php print $physician->Physician; ?></h2>
				<p class="address">
					<?php print $addressString ?><br />
					<?php print $physician->Phone; ?><br />
					<a href="http://maps.google.com/maps?q=<?php print $addressString; ?>" class="map-link" target="_blank">Map it.</a>
				</p>
			</div>
		</div>
	<?php endforeach ?>
<?php elseif($submitted && $total < 1): ?>
	<div id="find-a-physician-result-summary">Sorry, we couldn't find any doctors that matched your zip code.</div>
<?php endif ?>

 <?php if($error) :?>
 	<h3>Error</h3>
 	<p class="address"><?php print $errorMessage; ?></p>
 <?php elseif(!$submitted): ?>
	<div id="find-a-physician-result-summary">
		HealthTronics helps physicians provide better care for you. Use the short form on the left to locate the HealthTronics affiliated physician closest to you.
	</div>
 <?php endif?>

</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/sites/all/themes/healthtronicsv2/js/event_map/map.js"></script>
<!-- /Body -->