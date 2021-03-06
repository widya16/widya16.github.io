<?php
$conn = mysqli_connect("localhost", "root", "", "wedding");

function query($query)
{

  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama = $data(["name"]);
  $message = $data(["message"]);

  $query = "INSERT INTO pesan VALUES ('',
              '$nama',
              '$message')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

?>



<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wedding</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" media="print" onload="this.media='all'" />
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" />
  </noscript>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" media="print" onload="this.media='all'" />
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" />
  </noscript>
  <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
  <link href="css/font-awesome/css/all.min.css?ver=1.1.0" rel="stylesheet">
  <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
  <link href="css/ekko-lightbox.css?ver=1.1.0" rel="stylesheet">
  <link href="css/main.css?ver=1.1.0" rel="stylesheet">
  <noscript>
    <style type="text/css">
      [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
      }
    </style>
  </noscript>
</head>

<body id="top">
  <header></header>
  <div class="page-content">
    <div class="div">
      <div class="ww-home-page" id="home">
        <div class="ww-wedding-announcement d-flex align-items-center justify-content-start">
          <div class="container ww-announcement-container">
            <p class="ww-couple-name ww-title" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000"></p><img class="img-fluid mt-2" data-aos="zoom-in-down" src="images/title-gold.webp" data-aos-delay="300" data-aos-duration="1000" />
            <p style="color: gold;" class="h4 mt-2 ww-title" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="10">03<sup>th</sup> July, 2021</p>
          </div>
        </div>
      </div>
      <div class="ww-nav-bar sticky-top ">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container"><a href="#"></a>
            <h1 class="h2"><a class="pl-4 navbar-brand" href="#">Pengantin Pria & Wanita</a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ww-navbarNav" aria-controls="ww-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-uppercase" id="ww-navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#home"><i class="fas fa-home"></i></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#couple"><i class="fab fa-gratipay"></i></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#invite"><i class="fas fa-envelope"></i></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#gallery"><i class="fas fa-photo-video"></i></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#rsvp"><i class="fas fa-pen"></i></a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#loc"><i class="fas fa-map-marker-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="ww-section" id="couple" style="background-image: url(images/bg1-gold.webp); ">
        <div class="container">
          <center>
            <br><br>
            <img src="images/pawiwahan-gold.webp" data-aos="zoom-in-down" data-aos-duration="1000" style="height: 150px; width: 150px;">
            <br><br>
          </center>
          <div class="row text-center ">
            <div class="col-md-6">
              <div class="mt-3"><img class="img-fluid" style="border-radius: 50%; width: 300px; height: 300px;" src="images/p-22.webp" alt="Groom" data-aos="flip-left" data-aos-duration="1000" />
                <p class="pt-3 text-left text-muted"></p>
                <h3 class="h2 ww-title">Nama Pengantin Pria</h3>
                <p> Putra Pertama Pasangan <br>
                  Bapak Pengantin Pria & Ibu Pengantin Pria
                  <br> Beralamat di Jl. Mawar, No, xxx
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mt-3"><img class="img-fluid" style="border-radius: 50%; width: 300px; height: 300px;" src="images/p-11.webp" alt="Bride" data-aos="flip-right" data-aos-duration="1000" />
                <p class="pt-3 text-left text-muted"></p>
                <h3 class="h2 ww-title">Nama Pengantin Wanita</h3>
                <p> Putri Pertama Pasangan <br>
                  Bapak Pengantin Wanita & Ibu Pengantin Wanita
                  <br> Beralamat di Jl. Melati, No, xxx
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->

      <div class="ww-section" style="background-color:#fff7e0;">
        <div class="container ww-wedding-event" id="invite">
          <br><br>
          <center>
            <img src="images/undangan-gold.webp" data-aos="zoom-in-down" data-aos-duration="1000" style="height: 150px; width: 150px;">
            <br><br>
          </center>
          <center>
            <p>Atas Asung Kertha wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk menghadiri upacara pernikahan dan resepsi yang dilaksanakan pada: </p>
          </center>
          <center>
            <br>

            <div class="date">
              <h2>Kamis</h2>
              <div class="row">
                <div class="col-1"></div>
                <div class="col-4">
                  <hr>
                  <div class="month">Juli</div>
                  <hr>
                </div>
                <div class="col-2">
                  <br>
                  <div class="date-round">03</div>
                </div>
                <div class="col-4">
                  <hr>
                  <div class="year">2021</div>
                  <hr>
                </div>
                <div class="col-1"></div>
              </div>
            </div>
            <br>
            <h3 class="ww-title" style="color: gold;">Resepsi Pernikahan</h3>
            <br>
            <h5> 10.00 Wita s/d Selesai</h5>
            <h5>Jln. Mawar, No xxx</h5>
            <h5>Denpasar</h5>

            <br>
            <a href="#loc" class="btn btn-secondary" style="border-radius: 30px; background-color: transparent; border-color: gold; color: gold; hover:grey;">Google Maps</a>
            <br><br>
            <audio autoplay="true" controls>
              <source src="vow.mp3" type="audio/mpeg">
            </audio>
            <br><br>
            <div class="d-flex justify-content-center">
              <div class="countdown">
                <div id="hari">NA</div>
                <div id="jam">NA</div>
                <div id="menit">NA</div>
                <div id="detik">NA</div>
              </div>
            </div>
            <br><br>
            <img src="images/split.webp" style="height: 150px; width: 300px;">

          </center>
        </div>
      </div>

      <div class="ww-section bg-light" id="gallery" style="background-image: url(images/bg1-gold.webp); ">
        <div class="ww-photo-gallery">
          <div class="container">
            <center>
              <br><br>
              <img src="images/gallery-gold.webp" data-aos="zoom-in-down" data-aos-duration="1000" style="height: 150px; width: 150px;">
              <br><br>
              <div>
                <div class="col-12 col-md-6">
                  <!--  <iframe class="embed-responsive-item embed-responsive-4by3" style="height: 300px; width: 100%;" src="images/vid.mp4"  allowfullscreen ></iframe> -->
                  <video controls style="height: 300px; width: 100%;" class="embed-responsive-item embed-responsive-4by3">
                    <source src="images/vid.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </center>
            <br><br>
            <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
              <div class="card-columns">
                <div class="card" data-groups="[&quot;vacation&quot;,&quot;ceremony&quot;]"><a href="images/g-1.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/g-1.webp" alt="w1" /></a></div>
                <div class="card" data-groups="[&quot;party&quot;,&quot;wedding&quot;]"><a href="images/g-2.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/g-2.webp" alt="u" /></a></div>
                <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/g-3.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/g-3.webp" alt="t" /></a></div>
                <div class="card" data-groups="[&quot;party&quot;,&quot;vacation&quot;]"><a href="images/g-4.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/g-4.webp" alt="Gallery Pic 4" /></a></div>
                <div class="card" data-groups="[&quot;wedding&quot;,&quot;ceremony&quot;,&quot;party&quot;]"><a href="images/g-5.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/g-5.webp" alt="Gallery Pic 6" /></a></div>
                <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/g-6.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/g-6.webp" alt="Gallery Pic 7" /></a></div>
                <div class="card" data-groups="[&quot;wedding&quot;,&quot;party&quot;]"><a href="images/g-7.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/g-7.webp" alt="Gallery Pic 8" /></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ww-section ww-rsvp-detail text-white" id="rsvp">
        <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
          <div class="col text-center">
            <br><br>
            <h2 class="h1 ww-title pb-3" data-aos="zoom-in-down" data-aos-duration="1000">Buku Tamu</h2>
          </div>
          <div class="row ww-rsvp-form">
            <div class="col-md-10">
              <div class="card-body">
                <form id="myForm">
                  <div class="row">
                    <div class="col md-6 pb-3">
                      <div class="form-group">
                        <label for="name-input">Nama*</label>
                        <input class="form-control" id="name" type="text" name="name" required="required" />
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-group">
                        <label for="email">Email*</label>
                        <input class="form-control" id="email" type="email" name="email" required="required" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col md-6 pb-3">
                      <div class="form-group">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="guest" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">Hadir</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="guest" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">Ragu-Ragu</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="guest" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">Tidak Hadir</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="body" name="message" id="message" rows="4"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-center">
                      <button class="btn btn-primary btn-submit" type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <center>
        <div id="messageList" class="message-list " style="background-image: url(images/bg1-gold.webp); ">
          <center>
            <?php
            $message = query("SELECT * FROM pesan"); ?>
            <?php foreach ($message as $row) : ?>
              <div class="card-guest ">
                <div class="card">
                  - <?php echo $row["nama"]; ?>-

                  <h6 style="font-family: cursive;"><?php echo $row["pesan"]; ?> </h6>
                </div>
              </div>
            <?php endforeach;  ?>
          </center>
        </div>
      </center>
      <div class="loc" id="loc">
        <br><br>
        <center>
          <img src="images/lokasi-gold.webp" data-aos="zoom-in-down" data-aos-duration="1000" style="height: 150px; width: 150px;">
        </center>
        <br><br>
        <center>
          <div class="px-2 px-md-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.8896265171766!2d115.28809531393298!3d-8.510096688518619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd217dbdb729089%3A0x17a52420649da254!2sLapangan%20Sapta%20Dharma!5e0!3m2!1sid!2sid!4v1621397639071!5m2!1sid!2sid" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </center>
      </div>
      <br>

      <div class="info">
        <div class="container">
          <h2>Event Info</h2>
          <p>Kami menghimbau kepada Bapak/Ibu/Saudara/i untuk tetap Menggunakan <b>Menggunakan Masker</b>, <b>Mencuci Tangan</b> di area cuci tangan yang telah disediakan, Serta tetap <b>Menjaga Jarak</b> dari setiap orang yang hadir pada Upacara Pernikahan Kami. </p>
          <div class="img-kes">
            <img src="images/k-2.webp" alt="">
            <img src="images/k-1.webp" alt="">
            <img src="images/k-3.webp" alt="">
          </div>
          <br>
          <p><b> Atasa perhatian dan kesadaran Bapak/Ibu/Saudara/i, Kami ucapkan Terimakasih. </b></p>
        </div>
      </div>

      <center>
        <a href="#" style="font-size: 50px; text-align: center;"><i class="fas fa-arrow-circle-up"></i></a>
      </center>

      <script type="text/javascript">
        var countDate = new Date('Jul 03 2021 00:00:00').
        getTime();

        function newYear() {
          var now = new Date().getTime();
          gap = countDate - now;

          var detik = 1000;
          var menit = detik * 60;
          var jam = menit * 60;
          var hari = jam * 24;

          var h = Math.floor(gap / (hari));
          var j = Math.floor((gap % (hari)) / (jam));
          var m = Math.floor((gap % (jam)) / (menit));
          var d = Math.floor((gap % (menit)) / (detik));

          document.getElementById('hari').innerText = h;
          document.getElementById('jam').innerText = j;
          document.getElementById('menit').innerText = m;
          document.getElementById('detik').innerText = d;
        }
        setInterval(function() {
          newYear();
        }, 1000);
      </script>

      <div class="ww-footer bg-light">
        <div class="container text-center py-4">
          <p class="my-0">&copy; baliantprojects.com</p>
        </div>
      </div>
    </div>
  </div>

  <footer></footer>
  <script src="scripts/jquery.min.js?ver=1.1.0"></script>
  <script src="scripts/bootstrap.bundle.min.js?ver=1.1.0"></script>
  <script src="scripts/aos.js?ver=1.1.0"></script>
  <script src="scripts/ekko-lightbox.min.js?ver=1.1.0"></script>
  <script src="scripts/main.js?ver=1.1.0"></script>
</body>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  function sendEmail() {
    const name = $("#name");
    const email = $("#email");
    const subject = $("#subject");
    const body = $("#body");

    if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
      $.ajax({
        url: 'sendEmail.php',
        method: 'POST',
        dataType: 'json',
        data: {
          name: name.val(),
          email: email.val(),
          subject: subject.val(),
          body: body.val()
        },
        success: function(response) {
          $('#myForm')[0].reset();
          $('.sent-notification').text("Message Sent Successfully.");
        }
      });
    }

    appendMessage(name.val(), body.val())
  }

  function appendMessage(name, body) {
    const messageElement = document.getElementById('messageList')

    const newMessage = `<div class="card-guest">
                            <div class="card">
                            <p>-${name}-</p>

                            <h6 style="font-family: cursive;">${body}<h6> 
                            </div>
                            </div>`
    messageElement.insertAdjacentHTML('beforeend', newMessage)
  }

  function isNotEmpty(caller) {
    if (caller.val() == "") {
      caller.css('border', '1px solid red');
      return false;
    } else
      caller.css('border', '');

    return true;
  }

  ;
</script>

</html>