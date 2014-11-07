<?php
if ( isset($_POST['email']) ) {
	file_put_contents ( "signup.txt" , $_POST['email'] . "\r\n", FILE_APPEND);
} else {
	header('Location: /');
}