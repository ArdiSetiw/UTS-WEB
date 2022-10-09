<?php

  require "login_admin.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="JavaScript.js"></script>
    <script src="js.js"></script>
    <title>Document</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <!-- Navigasi Bar -->
    <div id="home">
        <header id="container">
            <div onmouseover="judul_over()" onmouseout="judul_out()" id="judul">
                <p>MOBIL AUTOMOTIVE</p>
            </div>
            <div id="nav_bar">
                <nav class="navbar-custom">
                </nav>
            </div>
        </header>
    
        <!-- Home Page -->
        <section class="home" id="background">
            <div>
                <p onmouseover="welc_over()" onmouseout="welc_out()" id="welcome">WELCOME TO<br>MOBIL AUTOMOTIVE</p>
            </div> 

            <div id='admin_login' >
                <form action="" method="post" name="login_admin" autocomplete="off">
                    <table  align=center width='100%' id='tab'>
                        <tr>
                            <th colspan=2 align=center style="background: black; height: 100px;color:white;">Login Admin</th>
                        </tr>
                        <tr>
                            <th colspan=2 align=center style="background: black;"><?php if (isset($failed)) { ?>
                                                                                    <div style="color:red">Wrong Username or Password</div>
                                                                                <?php } ?>
                            </th>
                        </tr>
                        <tr>
                            <th colspan=2>Username</th>
                        </tr>
                        <tr>
                            <td colspan=2 align=center><input  type='text' name='username_ad' placeholder='Username' class='form'></td>
                        </tr>
                        <tr>
                            <th colspan=2 >Password</th>
                        </tr>
                        <tr>
                            <td colspan=2 align=center><input  type='password' name='password_ad' placeholder='Password' class='form'></td>
                        </tr>
                        <tr>
                            <td align=center ><input name='sbtAdmin' type="submit" value="Login" class="Button2"></td>
                        </tr>
                        <tr>
                            <td colspan=2 align=center><a href='index_user.php' style='color : black;'>Login User Click Here</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
    </div>

    <script src="js.js"></script>
</body>
</html>