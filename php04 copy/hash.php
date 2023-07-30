<?php
$pw=password_hash('test2',PASSWORD_DEFAULT);
echo $pw;
echo "<br>";
var_dump(password_verify('test2',$pw));

