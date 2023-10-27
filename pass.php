<?php
require("routeros_api.class.php");
$API = new routeros_api();
$API->debug = false;
$user_mikrotik  = "xervio";
$password_mikrotik  = "lead2707";
$ip_mikrotik    = "id3.labkom.us:6564";

if($API->connect($ip_mikrotik, $user_mikrotik, $password_mikrotik)){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $API->comm("/ip/hotspot/user/set", array(	 
          ".id"     		=> $username,
          "password"	 	=> $password,
  
			));
 echo "<script>window.location='http://10.10.10.1/sukses.html'</script>";
} else {
  echo "Mikrotik tidak konek";
  }
?>