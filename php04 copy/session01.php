<?php

session_start();// session
$sid=session_id();
echo $sid;

$_SESSION["name"]="小笠原";
$_SESSION["age"]=30;



//これまでページ上での受け渡しは(local storage以外)できなかったが、phpではsessionという仕組みでできる！
//
