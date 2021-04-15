<?php
$conn=mysqli_connect("localhost","root","","sanserv") or die(mysqli_error($conn));
if (!isset($_SESSION['email'])) {
 session_start();
}
?>