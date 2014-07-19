<?php
   require './routeros_api.class.php';
   
   $API= new routeros_api();
   $API->debug=false;
   
   $server='192.168.56.100';
   $username='admin';
   $password='';
   
   $API->connect($server, $username, $password);
   
   if (!$API){
       die ("koneksi gagal");
   }