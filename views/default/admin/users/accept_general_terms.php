
<?php

echo get_loggedin_user()->username;
echo get_private_setting(get_loggedin_user()->guid, 'general_terms_accepted');

echo '<br/>';

echo get_private_setting(881,'general_terms_accepted');


?>