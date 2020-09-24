<?php
    $getdate = $_POST['username'];
    $getdate2 = $_POST['passwd'];
    if($getdate=='1'&&$getdate2=="1")
    {
        echo "login success";
    }
    else echo "login fail";
?>