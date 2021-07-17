<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" />
  <style>
    * {
      box-sizing: border-box;
    }





    body {
      background-image: url('images/cover.webp');
      /* background-coverlor: #390130; */
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      background-position: 70%;
      background-size: cover;
    }

    @media only screen and (min-width: 768px) {
      body {
        background-image: url('images/cover.webp');
      }

    }

    .cover {
      padding-top: 35%;
      text-align: center;
    }

    .label {
      padding-top: 65%;
    }

    @media only screen and (min-width: 768px) {

      .cover {
        padding-top: 10%;
        text-align: center;
        display: flex;
        padding-left: 250px;
      }

      .name h1 {
        font-family: "Great Vibes", cursive;
        font-size: 60px;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.658);
        color: white;
      }

      .label {
        padding-top: 20%;
        text-align: center;
      }



    }


    .btn {
      background-color: #1016218f;
      border-radius: 30px;
      box-sizing: border-box;
      transition-property: #012a6b;
      box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.65);
      color: white;
    }

    .btn:hover {
      background-color: darkgray;

    }

    .name h1 {
      font-family: "Great Vibes", cursive;
      font-size: 45px;
      text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.658);
      color: white;
    }


    /* For desktop: */
  </style>
</head>

<body>
  <div class="container">


    <div class="cover">
      <div class="name">
        <h1> Nama <br>
          &<br>
          Nama
        </h1>
      </div>
      <div class="label">
        <h6>Kepada <br>
          Yth. Bapak/Ibu/Saudara/i</h6>
        <h1> ddd</h1>
        <br>
        <a href="index2.php" class="btn">Buka Undangan</a>
      </div>

    </div>
  </div>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>