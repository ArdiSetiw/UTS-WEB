<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="JavaScript.js"></script>
    <title>Document</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body style='background-color:gray;'>
    <!-- Navigasi Bar -->
    <div>
        <header id="container">
            <div onmouseover="judul_over()" onmouseout="judul_out()" id="judul">
                <p>MOBIL AUTOMOTIVE</p>
                <p align=right>Admin Page</p>
            </div>
            <div id="nav_bar">
                <nav class="navbar-custom">
                </nav>
            </div>
        </header>
    </div>
    
    <section id='admin'>
        <div id='input_form'>
            <form action="" method='get' autocomplete="off">
                <table width='40%' id='table_input' style='margin-top: 10px; margin-left:auto; margin-right:auto;'>
                    <tr>
                        <td colspan=3 align=center height=80px style='background-color:black;color:white;'><h1>Menginput Data Mobil</h1></td>
                    </tr>
                    <tr>
                        <td align=center><label for="merek" >Merek Mobil</label></td>
                        <td>:</td>
                        <td align=center><input type="text" id='merek' name='merek' placeholder='Merek Mobil' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="nama">Nama Mobil</label></td>
                        <td>:</td>
                        <td align=center><input type="text" id='nama' name='nama' placeholder='Merek Mobil' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="trans">Transmisi Mobil</label></td>
                        <td>:</td>
                        <td align=center>
                            <input type="radio" id='Automatic' name='trans' value='Automatic'  required>
                            <label for="Automatic" >Automatic</label>
                            <input type="radio" id='Manual' name='trans' value='Manual' required>
                            <label for="Manual" >Manual</label>
                            <input type="radio" id='CVT' name='trans' value='CVT'  required>
                            <label for="CVT" >CVT</label>
                        </td>
                    </tr>
                    <tr>
                        <td align=center><label for="harga">Harga Mobil</label></td>
                        <td>:</td>
                        <td align=center><input type="number" id='harga' name='harga' placeholder='Harga Mobil' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="warna">Warna Mobil</label></td>
                        <td>:</td>
                        <td align=center><input type="text" id='warna' name='warna' placeholder='Warna Mobil' class='input' required></td>
                    </tr>
                    <tr>
                        <td colspan=3 align=center height=70px><input type="submit" value="Submit" class="Button2"></td>
                    </tr>
                </table>
            </form>
        </div>
 

        <div>
            <table width='40%' id='table_input' style='margin-top: 50px; margin-left:auto; margin-right:auto;'>
                <tr>
                    <td colspan=3 align=center height=80px style='background-color:black;color:white;' ><h1>Hasil Input</h1></td>
                </tr>
                <tr>
                    <td align=center height=40px>Merek Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $merk = isset($_GET['merek']) ? $_GET['merek'] : "";
                            echo $merk;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Nama Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $nama = isset($_GET['nama']) ? $_GET['nama'] : "";
                            echo $nama;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Transmisi Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $trans = isset($_GET['trans']) ? $_GET['trans'] : "";
                            echo $trans;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Harga Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $harga = isset($_GET['harga']) ? $_GET['harga'] : "";
                            echo "$harga";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align=center height=40px>Warna Mobil</td>
                    <td>:</td>
                    <td align=center>
                        <?php
                            $warna = isset($_GET['warna']) ? $_GET['warna'] : "";
                            echo $warna;
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <script src="JavaScript.js"></script>
</body>
</html>