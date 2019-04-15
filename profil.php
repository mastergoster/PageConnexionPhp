<?php
require 'connect.php';

echo "mon profil est super secu <br />";
echo "my name is ".substr($username, -3)." ".substr($username, 0, -3)."-".substr($username, -3)." <br />";

?>

<a href="page.php">Site</a><br/>
<a href="profil.php">Mon Profil</a><br/>
<a href="?deconnect=true">déconnexion</a>
