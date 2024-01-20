<?php 
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurusu-Programming</title>
    <link
      rel="shortcut icon"
      href="<?php echo ambil_gambar('3')?>"
      type="image/png"
    />
    <style>
        * {
  text-decoration: none;
  margin: 0px;
  padding: 0px;
}

body {
  margin: 0px;
  padding: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.wrapper {
  width: 1100px;
  margin: auto;
  position: relative;
}

.logo a {
  font-size: 50px;
  font-weight: 800;
  float: left;
  font-family: courier;
  color: #364f6b;
}

.menu {
  float: right;
}

nav {
  width: 100%;
  margin: auto;
  display: flex;
  line-height: 80px;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background: #ffffff;
  z-index: 1;
  border-bottom: 1px solid #364f6b;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

nav ul li {
  float: left;
}

nav ul li a {
  color: black;
  font-weight: bold;
  text-align: center;
  padding: 0px 16px 0px 16px;
  text-decoration: none;
}

nav ul li a:hover {
  text-decoration: underline;
}

section {
  margin: auto;
  display: flex;
  margin-bottom: 50px;
}

.kolom {
  margin-top: 50px;
  margin-bottom: 50px;
}

.kolom .deskripsi {
  font-size: 20px;
  font-weight: bold;
  font-family: "comic sans ms";
  color: #364f6b;
}

h2 {
  font-family: "comic sans ms";
  font-weight: 800;
  font-size: 45px;
  margin-bottom: 20px;
  color: #364f6b;
  width: 100%;
  line-height: 50px;
}

a.tbl-biru {
  background: #3f72af;
  border-radius: 20px;
  margin-top: 20px;
  padding: 15px 20px 15px 20px;
  color: #ffffff;
  cursor: pointer;
  font-weight: bold;
}

a.tbl-biru:hover {
  background: #fc5185;
  text-decoration: none;
}

a.tbl-pink {
  background: #fc5185;
  border-radius: 20px;
  margin-top: 20px;
  padding: 15px 20px 15px 20px;
  color: #ffffff;
  cursor: pointer;
  font-weight: bold;
}

a.tbl-pink:hover {
  background: #3f72af;
  text-decoration: none;
}

p {
  margin: 10px 0px 10px 0px;
  padding: 10px 0px 10px 0px;
}

.tengah {
  text-align: center;
  width: 100%;
}

.tutor-list {
  width: 100%;
  position: relative;
  display: flex;
  flex-wrap: wrap;
}

.kartu-tutor {
  width: 20%;
  margin: 0 auto;
}

.kartu-tutor img {
  width: 80%;
  border-radius: 50%;
}

.kartu-tutor p {
  font-family: "comic sans ms";
  font-weight: 800;
  font-size: 25px;
  text-align: center;
  color: #364f6b;
}

.partner-list {
  width: 100%;
  position: relative;
  display: flex;
  flex-wrap: wrap;
}

.kartu-partner {
  width: 20%;
  margin: 0 auto;
}

.kartu-partner img {
  width: 150px;
  border-radius: 50%;
}

#contact {
  background: #dedede;
  padding: 50px 0px 50px 0px;
}

.footer {
  width: 100%;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  margin: auto;
}

.footer-section {
  width: 20%;
  margin: 0 auto;
}

h3 {
  font-family: "comic sans ms";
  font-weight: 800;
  font-size: 30px;
  margin-bottom: 20px;
  color: #364f6b;
  width: 100%;
  line-height: 50px;
}

#copyright {
  text-align: center;
  width: 100%;
  padding: 50px 0px 50px 0px;
  margin-top: 50px;
}

@media screen and (max-width: 991.98px) {
  .wrapper {
    width: 90%;
  }

  .logo a {
    display: block;
    width: 100%;
    text-align: center;
  }

  nav .menu {
    width: 100%;
    margin: 0;
  }

  nav .menu ul {
    text-align: center;
    margin: auto;
    line-height: 60px;
  }

  nav .menu ul li {
    display: inline-block;
    float: none;
  }

  section {
    display: block;
  }

  section img {
    display: block;
    width: 100%;
    height: auto;
  }

  .kartu-tutor {
    width: 50%;
  }

  .kartu-partner {
    width: 50%;
  }
}

/* tambahan dari pendaftaran dan verifikasi */
table {
  width: 600px;
}

@media screen and (max-width: 700px) {
  table {
    width: 90%;
  }
}
table td {
  padding: 5px;
}
td.label {
  width: 40%;
}
.input {
  border: 1px solid #cccccc;
  background-color: #dfdfdf;
  border-radius: 5px;
  padding: 10px;
  width: 100%;
}
input.tbl-biru {
  border: none;
  background-color: #3f72af;
  border-radius: 20px;
  margin-top: 20px;
  padding: 15px 20px 15px 20px;
  color: #ffffff;
  cursor: pointer;
  font-weight: bold;
}
input.tbl-biru:hover {
  background-color: #fc5185;
  text-decoration: none;
}
.error {
  padding: 20px;
  background-color: #f44336;
  color: #ffffff;
  margin-bottom: 15px;
}

.sukses {
  padding: 20px;
  background-color: #2196f3;
  color: #ffffff;
  margin-bottom: 15px;
}

.error ul {
  margin-left: 10px;
}

    </style>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar()?>'> <img src="<?php echo ambil_gambar('3')?>" alt="logo" width="48px"> Kurusu</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar()?>#home">Home</a></li>
                    <li><a href="<?php echo url_dasar()?>#courses">Courses</a></li>
                    <li><a href="<?php echo url_dasar()?>#tutors">Tutors</a></li>
                    <li><a href="<?php echo url_dasar()?>#partners">Partners</a></li>
                    <li><a href="<?php echo url_dasar()?>#contact">Contact</a></li>
                    <li>
                    <?php if(isset($_SESSION['members_nama_lengkap'])){
                        echo "<a href='".url_dasar()."/ganti_profile.php'>".$_SESSION['members_nama_lengkap']."</a> | <a href='".url_dasar()."/logout.php'>Logout</a>";
                    }else{?>
                        <a href="pendaftaran.php" class="tbl-biru">Sign Up</a>
                    <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">