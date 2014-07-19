<?php

if (isset($_GET["file"])) {
    $menu = $_GET["file"];
//IP Firewall-> Filter Rules
    if ($menu == "TambahFilter") {
        include BASEPATH . "./filter/TambahFilter.php";
    } elseif ($menu == "SimpanFilter") {
        include BASEPATH . "./filter/SimpanFilter.php";
    } elseif ($menu == "HapusFilter") {
        include BASEPATH . "./filter/HapusFilter.php";
    } elseif ($menu == "UbahFilter") {
        include BASEPATH . "./filter/UbahFilter.php";
    } elseif ($menu == "ViewFilter") {
        include BASEPATH . "./filter/ViewFilter.php";
    } elseif ($menu == "SimpanUbahFilter") {
        include BASEPATH . "./filter/SimpanUbahFilter.php";
    }
//    IP Firewall-> Layer 7 Protocol
    elseif ($menu == "ViewLayer") {
        include BASEPATH . "./Layer/ViewLayer.php";
    } elseif ($menu == "TambahLayer") {
        include BASEPATH . "./Layer/TambahLayer.php";
    } elseif ($menu == "SimpanLayer") {
        include BASEPATH . "./Layer/SimpanLayer.php";
    } elseif ($menu == "HapusLayer") {
        include BASEPATH . "./Layer/HapusLayer.php";
    } elseif ($menu == "UbahLayer") {
        include BASEPATH . "./Layer/UbahLayer.php";
    } elseif ($menu == "SimpanUbahLayer") {
        include BASEPATH . "./Layer/SimpanUbahLayer.php";
    }
    
//    IP Firewall-> Mangle
    elseif ($menu == "ViewMangle") {
        include BASEPATH . "./Mangle/ViewMangle.php";
    } elseif ($menu == "TambahMangle") {
        include BASEPATH . "./Mangle/TambahMangle.php";
    } elseif ($menu == "SimpanMangle") {
        include BASEPATH . "./Mangle/SimpanMangle.php";
    } elseif ($menu == "HapusMangle") {
        include BASEPATH . "./Mangle/HapusMangle.php";
    } elseif ($menu == "UbahMangle") {
        include BASEPATH . "./Mangle/UbahMangle.php";
    } elseif ($menu == "SimpanUbahMangle") {
        include BASEPATH . "./Mangle/SimpanUbahMangle.php";
    }
}
