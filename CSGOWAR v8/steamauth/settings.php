<?php
$steamauth['apikey'] = "A82662AA5247FEEFCF1636A28DB233A8"; //  Steam WebAPI-Key бота http://steamcommunity.com/dev/apikey
$steamauth['domainname'] = "http://csgoforward.ru/"; // название сайта
$steamauth['buttonstyle'] = ""; // Style of the login button [small|large_no|large] 
$steamauth['logoutpage'] = ""; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
$steamauth['loginpage'] = "index.php"; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!

// System stuff
if (empty($steamauth['apikey'])) {die("<div style='display: block; width: 100%; background-color: red; text-align: center;'>SteamAuth:<br>Please supply an API-Key!</div>");}
if (empty($steamauth['domainname'])) {$steamauth['domainname'] = "localhost";}
if ($steamauth['buttonstyle'] != "small" and $steamauth['buttonstyle'] != "large") {$steamauth['buttonstyle'] = "large_no";}
?>