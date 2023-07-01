<?php

session_start();
session_unset();
session_destroy();
echo "welcome" . $_SESSION['username'];
echo "<br> your fav category is ". $_SESSION['favCat'];
echo "<br> you have been loged out";

?>