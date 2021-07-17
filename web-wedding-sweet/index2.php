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

    $query = "INSERT INTO pesan VALUES ('', '$nama','$message')";

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
                        <p class="ww-couple-name ww-title" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000"></p><img class="img-fluid mt-2" data-aos="zoom-in-down" src="images/ww-name.webp" data-aos-delay="300" data-aos-duration="1000" />

                        <div class="d-flex justify-content-center">
                            <div class="countdown">
                                <div id="hari">NA</div>
                                <div id="jam">NA</div>
                                <div id="menit">NA</div>
                                <div id="detik">NA</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ww-nav-bar sticky-top ">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container"><a href="#"></a>
                        <h1 class="h2"><a class="pl-4 navbar-brand" href="#">Pengantin Pria & Wanita</a></h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ww-navbarNav" aria-controls="ww-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse text-uppercase" id="ww-navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#home"><i class="fas fa-home"></i></a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#couple"><i class="fab fa-gratipay"></i></a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#story"><i class="fas fa-heartbeat"></i></a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#invitation"><i class="fas fa-envelope"></i></a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#gallery"><i class="fas fa-photo-video"></i></a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#rsvp"><i class="fas fa-pen"></i></a></li>
                                <li class="nav-item"><a class="nav-link smooth-scroll" href="#loc"><i class="fas fa-map-marker-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="ww-section profil" id="couple">
                <div class="container">
                    <center>
                        <br><br>
                        <img src="images/t-1.webp" data-aos="zoom-in-down" data-aos-duration="1000" style="height: 140px; width: 200px;">
                        <br><br>
                    </center>
                    <div class="row text-center ">
                        <div class="col-md-6">
                            <div class="mt-3"><img class="img-fluid" style="border-radius: 50%; width: 250px; height: 250px;" src="images/gr1.webp" alt="Groom" data-aos="flip-left" data-aos-duration="1000" />
                                <p class="pt-3 text-left text-muted"></p>
                                <h3 class="h2 ww-title">Nama Pengantin Pria</h3>
                                <p> Putra Pertama Pasangan <br>
                                    Bapak Pengantin Pria & Ibu Pengantin Pria
                                    <br> Beralamat di Jl. Mawar, No, xxx
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3"><img class="img-fluid" style="border-radius: 50%; width: 250px; height: 250px;" src="images/br1.webp" alt="Bride" data-aos="flip-right" data-aos-duration="1000" />
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

            <div class="ww-section story-love " id="story">
                <!-- <div class="container"> -->
                <br>


                <div id="fh5co-couple-story">
                    <div class="container">
                        <center>
                            <!-- <hr style="width: 50%; border:dashed; color: darkgray;"> -->
                            <div class="div-story">
                                <h1>Love Story</h1>
                            </div>
                        </center>
                        <hr style="width: 50%; border:dashed; color: darkgray;">
                        <div class="card-story">

                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                    <ul class="timeline animate-box">
                                        <li class="animate-box">
                                            <div class="timeline-badge" style="background-image:url(images/couple-1.webp);"></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h3 class="timeline-title">First We Meet</h3>
                                                    <span class="date">December 25, 2015</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente accusantium nisi nostrum, error eum perferendis quae minima quod maiores, tempore neque ducimus, vel ipsam saepe odio blanditiis assumenda facilis beatae?.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted animate-box">
                                            <div class="timeline-badge" style="background-image:url(images/couple-2.webp);"></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h3 class="timeline-title">First Date</h3>
                                                    <span class="date">December 28, 2015</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum id at, veniam modi placeat obcaecati, iste minus aliquid ab repellat cum quae, esse adipisci mollitia tempore atque odit repudiandae! Sed!</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate-box">
                                            <div class="timeline-badge" style="background-image:url(images/couple-3.webp);"></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h3 class="timeline-title">In A Relationship</h3>
                                                    <span class="date">January 1, 2016</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum id at, veniam modi placeat obcaecati, iste minus aliquid ab repellat cum quae, esse adipisci mollitia tempore atque odit repudiandae! Sed!</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted animate-box">
                                            <div class="timeline-badge" style="background-image:url(images/couple-3.webp);"></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h3 class="timeline-title">Proposal</h3>
                                                    <span class="date">January 1, 2016</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum id at, veniam modi placeat obcaecati, iste minus aliquid ab repellat cum quae, esse adipisci mollitia tempore atque odit repudiandae! Sed!</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="animate-box">
                                            <div class="timeline-badge" style="background-image:url(images/couple-3.webp);"></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h3 class="timeline-title">Wedding</h3>
                                                    <span class="date">January 1, 2016</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum id at, veniam modi placeat obcaecati, iste minus aliquid ab repellat cum quae, esse adipisci mollitia tempore atque odit repudiandae! Sed!</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <br><br>
            <br><br> -->
            <br>
            <div class="ww-section story " id="invitation">

                <div id="fh5co-couple-story">
                    <div class="container">
                        <br><br>
                        <div class="invt">
                            <div class="container">
                                <h1> Invitation </h1>

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, eius. Itaque eius incidunt deleniti! Voluptatem rem omnis libero natus, at ipsum. Voluptatum unde magnam debitis maiores consectetur, magni obcaecati amet? </p>
                                </center>
                                <center>
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
                                    <h3 class="ww-title">Resepsi Pernikahan</h3>
                                    <br>
                                    <h5> 10.00 Wita s/d Selesai</h5>
                                    <h5>Jln. Mawar, No xxx</h5>
                                    <h5>Denpasar</h5>

                                    <br>
                                    <a href="#loc" class="btn btn-secondary" style="border-radius: 30px; background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(253, 253, 253); ">Google Maps</a>
                                    <br><br>
                                    <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ww-section " id="gallery" style="background-image: url(images/); ">
                <div class="ww-photo-gallery">
                    <div class="container">
                        <center>
                            <br><br>
                            <img src="images/t-3.webp" data-aos-duration="1000" style="height: 140px; width: 200px;">

                            <div>
                                <div class="col-12 col-md-6">
                                    <!--  <iframe class="embed-responsive-item embed-responsive-4by3" style="height: 300px; width: 100%;" src="images/vid.mp4"  allowfullscreen ></iframe> -->
                                    <video controls style="height: 300px; width: 100%;" class="embed-responsive-item embed-responsive-4by3">
                                        <source src="images/vid.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>

                            <audio autoplay="true" controls>
                                <source src="vow.mp3" type="audio/mpeg">
                            </audio>
                        </center>
                        <br><br>
                        <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
                            <div class="card-columns">
                                <div class="card" data-groups="[&quot;vacation&quot;,&quot;ceremony&quot;]"><a href="images/e.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/e.webp" alt="e" /></a></div>
                                <div class="card" data-groups="[&quot;party&quot;,&quot;wedding&quot;]"><a href="images/home.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/home.webp" alt="u" /></a></div>
                                <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/d.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/d.webp" alt="t" /></a></div>
                                <div class="card" data-groups="[&quot;party&quot;,&quot;vacation&quot;]"><a href="images/q.webp" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/q.webp" alt="Gallery Pic 4" /></a></div>
                                <!-- <div class="card" data-groups="[&quot;wedding&quot;,&quot;ceremony&quot;,&quot;party&quot;]"><a href="images/w5.jpeg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/w5.jpeg" alt="Gallery Pic 6" /></a></div>
              <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/w6.jpeg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/w6.jpeg" alt="Gallery Pic 7" /></a></div>
              <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/w7.jpeg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/w7.jpeg" alt="Gallery Pic 7" /></a></div>
              <div class="card" data-groups="[&quot;wedding&quot;,&quot;party&quot;]"><a href="images/w7.jpeg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/w7.jpeg" alt="Gallery Pic 8" /></a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="ww-section ww-rsvp-detail text-white" id="rsvp">
                    <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="col text-center">
                            <br><br>
                            <h1 class=" ww-title pb-3" data-aos="zoom-in-down" data-aos-duration="1000">Buku Tamu</h1>
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
                    <br><br>
                    <hr style="width: 50%; border:dashed; color: darkgray;">
                    <h1 class=" ww-title " data-aos="zoom-in-down" data-aos-duration="1000">Friends Wishes</h1>
                    <hr style="width: 50%; border:dashed; color: darkgray;">
                    <div id="messageList" class="message-list " style="background-image: url(images/bg1-gold.webp); ">
                        <center>
                            <?php
                            $message = query("SELECT * FROM pesan"); ?>
                            <?php foreach ($message as $row) : ?>
                                <div class="card-guest ">
                                    <div class="card">
                                        <div class="card-message">
                                            - <?php echo $row["nama"]; ?>-

                                            <h6 style="font-family: cursive;"><?php echo $row["pesan"]; ?> </h6>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;  ?>
                        </center>
                    </div>
                </center>
                <div class="loc" id="loc">
                    <br><br>
                    <center>
                        <h1>Location</h1>
                    </center>

                    <center>
                        <div class="px-2 px-md-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.8896265171766!2d115.28809531393298!3d-8.510096688518619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd217dbdb729089%3A0x17a52420649da254!2sLapangan%20Sapta%20Dharma!5e0!3m2!1sid!2sid!4v1621397639071!5m2!1sid!2sid" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </center>
                </div>
            </div>
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

            <div class="ww-footer bg-light">
                <div class="container text-center py-4">
                    <p class="my-0">&copy; baliantprojects.com</p>
                    <p class="my-0"> @baliant.projects</p>
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
                            <div class="card-message">
                            <p>-${name}-</p>

                            <h6 style="font-family: cursive;">${body}<h6> 
                            </div>
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