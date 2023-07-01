<?php

session_start();
echo "welcome" . $_SESSION['username'];
echo "<br> your fav category is ". $_SESSION['favCat'];
echo "<br>";

?>