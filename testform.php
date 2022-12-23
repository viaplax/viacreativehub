<?php
if($_POST["message"]) {
mail("victoria.plaxton@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: cheeky.lacamelina@gmail.com");
}
?>