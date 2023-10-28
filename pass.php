<?php
require("routeros_api.class.php");
$API = new routeros_api();
$API->debug = false;
$user_mikrotik  = "admin";
$password_mikrotik  = "";
$ip_mikrotik    = "192.168.4.1";

if($API->connect($ip_mikrotik, $user_mikrotik, $password_mikrotik)){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $API->comm("/ip/hotspot/user/set", array(	 
          ".id"     		=> $username,
          "password"	 	=> $password,
  
			));
 echo "<script>window.location='http://192.168.14.1/sukses.html'</script>";
} else {
  echo "Mikrotik tidak konek";
  }
?>