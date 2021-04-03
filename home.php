<?php
//index.php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>MYSQL LEARNING</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <header>
        <a href="#" class="logo">MYSQL LEARNING<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="#banner"onclick="toggleMenu();">BERANDA</a></li>
            <li><a href="#about"onclick="toggleMenu();">TENTANG</a></li>
            <li><a href="#menu"onclick="toggleMenu();">VIDEO LEARNING</a></li>
            <li><a href="#expert"onclick="toggleMenu();">MYSQL JURNAL</a></li>
            <li><a href="#testimonials"onclick="toggleMenu();">FOUNDER</a></li>
            <li><a href="#contact"onclick="toggleMenu();">KRITIK</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2>Welcome</h2>
            <p>
                Selamat Datang Di Pembelajaran Myql Learning
            </p>
            <a href="index.php" class="btn">Keluar website</a>
        </div>
    </section>


    <section class="about" id="about" style=" height: 100vh;
    width: 100%;
    background-image: url(img/gambar1.png);
    background-size: cover;
    background-position: center;
    display: table;
    background-attachment: fixed;
">
        <div class="row">
            <div class="co150">
                <h2 class="titleText"><span>T</span>entang</h2><br><br>
                <p>Assalamualaikum Warahmatullahi Wabarakatuh<br>MySQL adalah sebuah database management system (manajemen basis data) menggunakan perintah dasar SQL (Structured Query Language) yang cukup terkenal. Database management system (DBMS) MySQL multi pengguna dan multi alur ini sudah dipakai lebih dari 6 juta pengguna di seluruh dunia.
                    MySQL adalah DBMS yang open source dengan dua bentuk lisensi, yaitu Free Software (perangkat lunak bebas) dan Shareware (perangkat lunak berpemilik yang penggunaannya terbatas). Jadi MySQL adalah database server yang gratis dengan lisensi GNU General Public License (GPL) sehingga dapat Anda pakai untuk keperluan pribadi atau komersil tanpa harus membayar lisensi yang ada.
                    Seperti yang sudah disinggung di atas, MySQL masuk ke dalam jenis RDBMS (Relational Database Management System). Maka dari itu, istilah semacam baris, kolom, tabel, dipakai pada MySQL. Contohnya di dalam MySQL sebuah database terdapat satu atau beberapa tabel.

SQL sendiri merupakan suatu bahasa yang dipakai di dalam pengambilan data pada relational database atau database yang terstruktur. Jadi MySQL adalah database management system yang menggunakan bahasa SQL sebagai bahasa penghubung antara perangkat lunak aplikasi dengan database server.</p>
            </div>
            <div class="s150">
                <div class="imgBx">
                    <img src="img/foto_2.jpeg">
                </div>
                </div>
                </div>
    </section>

    <section class="menu" id="menu"style=" height: 100vh;
    width: 100%;
    background-image: url(img/gambar2.jpeg);
    background-size: cover;
    background-position: center;
    display: table;
    background-attachment: fixed;
">
        <div class="title">
            <h2 class="titleText">VIDEO <span>L</span>EARNING</h2>
            <p>MYSQL VIDEO LEARNING</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <video src="video/Cara Download & Instal XAMPP Serta Menjalankan MYSQL Pertama Kali-sZEkM4kxY0c.mkv" controls="controls" loop="loop"></video>
                </div>
                <div class="text">
                    <h3>Cara Download & Instal XAMPP Serta Menjalankan MYSQL Pertama Kali</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <video src="video/MySQL Tutorial for Beginners [Full Course]-7S_tz1z_5bA.mkv" controls="controls" loop="loop"></video>
                </div>
                <div class="text">
                    <h3>MySQL Tutorial for Beginners [Full Course]</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <video src="video/TUTORIAL MYSQL DATABASE BAHASA INDONESIA-xYBclb-sYQ4.mkv" controls="controls" loop="loop" ></video>
                </div>
                <div class="text">
                    <h3>TUTORIAL MYSQL DATABASE BAHASA INDONESIA</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <video src="video/PHP CRUD Tutorial with MySQL & Bootstrap 4 (Create, Read, Update, Delete)-3xRMUDC74Cw.mkv" controls="controls" loop="loop"></video>
                </div>
                <div class="text">
                    <h3>PHP CRUD Tutorial with MySQL</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <video src="video/MySQL Beginner Tutorial 1 - Introduction to MySQL-nN4Kjdverzs.mkv" controls="controls" loop="loop"></video>
                </div>
                <div class="text">
                    <h3>MySQL Beginner Introduction</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <video src="video/Procedure dan Function pada MySQL-fmUUXs2dezA.mp4" controls="controls" loop="loop"></video>
                </div>
                <div class="text">
                    <h3>Family Gathering Teknik Informatika</h3>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="#" class="btn">Beranda</a>
        </div>
    </section>

    <section class="expert" id="expert"style=" height: 100vh;
    width: 100%;
    background-image: url(img/gambar3.png);
    background-size: cover;
    background-position: center;
    display: table;
    background-attachment: fixed;
">
        <div class="title">
            <h2 class="titleText">MYSQL <span>J</span>urnal</h2>
            <p>Berikut adalah Jurnal Mysql</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="img/sampul.png">
                </div>
                <div class="text">
                    <h5>Pemrograman WEB dengan PhP dan MySQL</h3>
                </div>
                <div class="jurnal">
                    <a href="jurnal/Pemrograman_WEB_dengan_PhP_dan_MySQL.pdf" class="btn">KLIK</a>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/sampul2.jpeg">
                </div>
                <div class="text">
                    <h5>Belajar Mysql dengan Phpmyadmin</h3>
                </div>
                <div class="jurnal">
                    <a href="jurnal/sofwan-mysqldanphpmyadmin.pdf" class="btn">KLIK</a>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/sampul2.png">
                </div>
                <div class="text">
                    <h5>Dasar Pemrograman PHP
                        dan MySQL</h3>
                </div>
                <div class="jurnal">
                    <a href="jurnal/yrlg1395823105.pdf" class="btn">KLIK</a>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/terakhir.jpeg">
                </div>
                <div class="text">
                    <h5>PENGEMBANGAN EVALUASI PEMBELAJARAN BERBASIS
                        MULIMEDIA DENGAN FLASH, PHP, DAN MYSQL</h3>
                </div>
                <div class="jurnal">
                    <a href="jurnal/18249-Article Text-21114-1-10-20111001.pdf" class="btn">KLIK</a>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials" id="testimonials"style=" height: 100vh;
    width: 100%;
    background-image: url(img/gambar4.jpeg);
    background-size: cover;
    background-position: center;
    display: table;
    background-attachment: fixed;
">
        <div class="title white">
            <h2 class="titleText">FOUNDER<span>M</span>YSQL</h2>
            <p>Berikut Adalah founder mysql</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="img/pendiri1.jpeg">
                </div>
                <div class="text">
                <p>FOUNDER</p>
                <h3>MICHEL WILDENIUS</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/pendiri2.jpeg">
                </div>
                <div class="text">
                <p>FOUNDER</p>
                <h3>ALLAN LARSON</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/pendiri_3.jpeg">
                </div>
                <div class="text">
                <p>FOUNDER</p>
                <h3>DAVID AXMARK</h3>
                </div>
            </div>
        </div>
    </section>



<section class="contact" id="contact" style="height: 100vh;
    width: 100%;
    background-image: url(img/gambar5.jpeg);
    background-size: cover;
    background-position: center;
    display: table;
    background-attachment: fixed;
">
<div class="title">
            <h2 class="titleText"><span>K</span>ritikan</h2>
            <p>Kekuarangan Dan kelebihan website pembelajaran ini </p>
        </div>
  <br />
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Masukkan Nama Anda" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Kritik Dan Saran Mengenai website ini" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
  </section>
  <script type="text/javascript">
    window.addEventListener('scroll',function(){
        const header = document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);
    });


    function toggleMenu() {
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
        
    }
    </script>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>