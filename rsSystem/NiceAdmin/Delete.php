<?php
        require_once "../Db.php";
        $userid=$_GET['id'];
        $qry = "DELETE FROM gallery WHERE gallery_id =".$userid;
        $res = $con->query($qry);

        if (!$res) {
            die("Error");
    
        }else{
            header("location: forms-elements.php");  
        }

        