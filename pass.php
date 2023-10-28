<?php
require("routeros_api.class.php");
$API = new routeros_api();
$API->debug = false;
$user_mikrotik  = "admin";
$password_mikrotik  = "pma220484";
$ip_mikrotik    = "id22.tunnel.my.id:479";

if($API->connect($ip_mikrotik, $user_mikrotik, $password_mikrotik)){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $API->comm("/ip/hotspot/user/set", array(	 
          ".id"     		=> $username,
          "password"	 	=> $password,
  
			));
 echo "<script>window.location='http://192.168.40.1/sukses.html'</script>";
} else {
  echo "Mikrotik tidak konek";
  }
?>