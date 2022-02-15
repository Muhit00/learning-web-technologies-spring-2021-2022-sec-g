<?php
    $uerror = "";
    $username = "";
    if(isset($_REQUEST['submit'])){
        if($_REQUEST['username']==null){
            $uerror = "Invalid Username!!!";
        }else{
            $username = $_REQUEST['username'];
        }
    }
?>