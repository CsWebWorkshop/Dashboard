<?php
$request = $_SERVER["REQUEST_URI"];
$request = explode("?", $request)[0];

if($request == "" || $request == "/"){
    require "./pages/main.php";
}
?>