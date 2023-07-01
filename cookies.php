<?php
echo "Welcome to the world of cookies!";

//cookies - directly stored in browser
//session- sensitive data, stored on server, used to store secure categories

//syntax to send cookies

setcookie("category", "books", time() + 86400, "/"); 
echo "the cookie is set <br>";
?>