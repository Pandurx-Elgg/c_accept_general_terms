<?php

?>

<style>

	#c_accepted_general_terms_status_bar {
		background-color: green;
		text-align: center;
		color: white;
	}

	#c_notaccepted_general_terms_status_bar {
		background-color: red;
		text-align: center;
		color: white;
	}

</style>

<?php 

// only admins can see this status
if (get_loggedin_user()->isAdmin()) {
	if (get_private_setting(elgg_get_page_owner_entity()->guid, 'general_terms_accepted')) {
		echo '<div id="c_accepted_general_terms_status_bar">';
		echo elgg_echo('acgt:accepted');
	} else {
		echo '<div id="c_notaccepted_general_terms_status_bar">';
		echo elgg_echo('acgt:not_accepted');
	}
	echo '</div>';
}

?>
