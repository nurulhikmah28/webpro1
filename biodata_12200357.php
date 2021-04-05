<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- FONTAWESOME CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
<?php
/* Variabel Data Pribadi*/
    $nama = "Nurul Hikmah";
    $ttl = "Cilacap, 28 Desember 1994";
    $agama = "Islam";
    $status = "Belum Kawin";
    $kewarganegaraan = "Indonesia";
?>
<div class="print-area">
    <div class="header">
        <img src="foto.png">
        <div class="header-text">
            <h1>Curriculum Vitae</h1>
            <p>Web Developer</p>    
        </div>
    </div>

    <div class="content">
        <div class="left-area">
            <div class="contact">
                <h4>CONTACT</h4>
                <h5>Phone</h5>
                <p>0812-1183-5815</p>
                <h5>Email</h5>
                <p>nurulhikmah280512@gmail.com</p>
                <h5>Alamat</h5>
                <p>Jl Perjuangan Raya Rt.017/007 no.29 Tugu Selatan, Koja - Jakarta Utara</p>
            </div>
            <div class="skills">
                <h1>SKILLS</h1>
                <div class="bars">
                    <div class="bar">
                       <p>HTML</p>
                       <span></span> 
                    </div>
                    <div class="bar">
                       <p>CSS</p>
                       <span></span> 
                    </div>
                    <div class="bar">
                       <p>JAVASCRIPT</p>
                       <span></span> 
                    </div>
                </div>
            </div>
            <div class="follow">
                <h1>FOLLOW ME</h1>
                <h4>Facebook</h4>
                <p>facebook.com/nuna.raddliffe</p>
                <h4>Instagram</h4>
                <p>instagram.com/nuna.hikmah/</p>
            </div>
        </div>
    
        <div class="right-area">
            <div class="about">
                <div class="about-group">
                    <h1><span><i class="far fa-user"></i></span>DATA PRIBADI</h1>
                    <h3>Nama &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;: <?php echo $nama;?></h3>
                    <h3>Tempat dan Tanggal Lahir : <?php echo $ttl;?></h3>
                    <h3>Agama &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;&emsp;: <?php echo $agama;?></h3>
                    <h3>Status &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $status;?></h3>
                    <h3>Kewarganegaraan &emsp;&emsp;&emsp;&ensp;: <?php echo $kewarganegaraan;?></h3><hr>
                </div>
            </div>
            <div class="work">
                <h1><span><i class="fas fa-suitcase-rolling"></i></span>PENGALAMAN PEKERJAAN</h1>
                <div class="work-group">
                    <h3>Operator Warehouse</h3>
                    <h4>PT. Astra Honda Motor</h4>
                    <span>Maret 2014 s/d Desember 2015</span>
                </div>
                <div class="work-group">
                    <h3>Operator Assy</h3>
                    <h4>PT. Muramoto Elektronika Indonesia</h4>
                    <span>Maret 2019 s/d Februari 2020</span><hr>
                </div>
            </div>
            <div class="education">
                <h1><span><i class="fas fa-book"></i></span>PENDIDIKAN</h1>
                <div class="edu-group">
                    <h4>MI Nur Attaqwa Jakarta Utara</h4>
                    <span>2000 s/d 2006</span>
                    <p></p>   
                </div>
                <div class="edu-group">
                    <h4>SMP Negeri 270 Jakarta Utara</h4>
                    <span>2006 s/d 2009</span>
                    <p></p>   
                </div>
                <div class="edu-group">
                    <h4>SMK Ar Raudhah Jakarta Utara</h4>
                    <span>2009 s/d 2012</span>
                    <p>Administrasi Perkantoran</p>   
                </div>
                <div class="edu-group">
                    <h4>Universitas Bina Sarana Informatika (Pemuda)</h4>
                    <span>2020 s/d .......</span>
                    <p>Sistem Informasi</p>   
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<button>Print CV</button>


<!-- FONTAWESOME JS -->
<script type="text/javascript"></script>
<!-- CUSTOM JS -->
<script>
    var btn = document.querySelector("button");
    btn.onclick = () =>{
        window.print();
    }
</script>
</body>
</html>