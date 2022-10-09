<?php session_start(); 
        
           
    if(isset($_POST['sbtAdmin'])){
        
        $admin = array('Admin' => 'Admin_1');
        
        
        $Username = isset($_POST['username_ad']) ? $_POST['username_ad'] : '';
        $Password = isset($_POST['password_ad']) ? $_POST['password_ad'] : '';
        
                   
        if (isset($admin[$Username]) && $admin[$Username] == $Password){
                
                $_SESSION['UserData']['Username']=$admin[$Username];
                header("location:admin.php");
                exit;
        } else {
                $failed = true;
        }
    }
?>