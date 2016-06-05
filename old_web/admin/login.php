<?php
/*
$string = file_get_contents("/admin/content/users.json");
$json_a = json_decode($string, true);

var $success = false;
foreach ($json_a as $person_name => $person_a) {
    if ($person_a['username'] == $_POST['inputEmail'] &&
        $person_a['password'] == $_POST['inputPassword']) {
        $success = true;
        header( 'Location: http://localhost:8080/admin/admin.php');
    }
}

if(!$success)
    header( 'Location: http://localhost:8080/admin/index.php');
*/