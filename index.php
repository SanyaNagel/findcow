<?php
ob_start();
$new_url = 'https://findcow.herokuapp.com/track.php';
header('Location: '.$new_url);
exit();
?>