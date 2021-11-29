<?php
function OpenCon () 
 {
 $dbhost = "localhost" ;  
 $dbuser = "root" ;  
 $dbpass = "" ;  
 $db = "web_trachanh" ;  
 $conn = new mysqli ( $dbhost , $dbuser , $dbpass , $db ) or die ( "Kết nối không thành công:%s\n". $conn -> connect_error ) ;   
 mysqli_set_charset ($conn,"utf8") ;  
 return $conn ; 
 }
 
function CloseCon ($conn) 
 {
 $conn -> close () ;  
 }
   
?>