<?php

elgg_register_event_handler('init', 'system', 'c_accept_general_terms_init');

function c_accept_general_terms_init() {
	//elgg_register_admin_menu_item('administer', 'accept_general_terms', 'users');
	elgg_extend_view("profile/owner_block", "c_accept_general_terms/profile_general_terms_status/profile_details", 1);
}
