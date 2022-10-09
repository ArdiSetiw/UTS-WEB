<?php 
    session_start();
        
            
    if(isset($_POST['sbtUser'])){
        
        $admin = array('User' => 'User_1');
        
        
        $Username = isset($_POST['username_ad']) ? $_POST['username_ad'] : '';
        $Password = isset($_POST['password_ad']) ? $_POST['password_ad'] : '';
        
                   
        if (isset($admin[$Username]) && $admin[$Username] == $Password){
                
                $_SESSION['UserData']['Username']=$admin[$Username];
                header("location:user.html");
                exit;
        } else {
                $failed = true;
        }
    }
?>