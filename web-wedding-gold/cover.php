<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      box-sizing: border-box;
    }

    .row::after {
      content: "";
      clear: both;
      display: block;
    }

    [class*="col-"] {
      float: left;
      padding: 10px;

    }

    html {
      font-family: "Lucida Sans", sans-serif;
    }

    body {
      background-image: url(images/wing5.webp);
      background-color: #390130;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      background-size: cover;
    }

    @media only screen and (min-width: 768px) {
      body {
        background-image: url('images/bg1-gold.webp');
      }
    }

    /* For desktop: */
    .col-1 {
      width: 8.33%;
    }

    .col-2 {
      width: 16.66%;
    }

    .col-3 {
      width: 25%;
    }

    .col-4 {
      width: 33.33%;
    }

    .col-5 {
      width: 41.66%;
    }

    .col-6 {
      width: 50%;
    }

    .col-7 {
      width: 58.33%;
    }

    .col-8 {
      width: 66.66%;
    }

    .col-9 {
      width: 75%;
    }

    .col-10 {
      width: 83.33%;
    }

    .col-11 {
      width: 91.66%;
    }

    .col-12 {
      width: 100%;
    }

    @media only screen and (max-width: 768px) {

      /* For mobile phones: */
      [class*="col-"] {
        width: 100%;
      }
    }

    a {
      outline: none;
      text-decoration: none;
      display: inline-block;
      width: 200px;
      border-radius: 30px;
      padding: 4px;
      margin-right: 0.625%;
      text-align: center;
      /*line-height: 3;*/
      color: black;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
      padding: 10px;
      border: 1px grey;

    }

    li:last-child a {
      margin-right: 0;
    }

    a:link,
    a:visited,
    a:focus {
      background: cornsilk;
    }

    a:hover {
      background: cornsilk;
    }

    a:active {
      background: cornsilk;
      color: black;
    }

    h6 {
      color: white;
    }

    h1 {
      color: white;
    }

    h2 {
      font-family: 'Brush Script MT', cursive;
      color: cornsilk;
    }

    .left {
      padding-top: 200px;
      padding-left: 200px;
      display: flex;
    }

    @media only screen and (max-width: 768px) {

      .left {
        padding-left: 10px;
        padding-top: 200px;

      }

      .right {
        padding-left: 0;
      }

      .left p {
        font-family: 'Brush Script MT', cursive;
        font-size: 30px;
        text-align: center;
        padding-top: 0 0;
        margin: 0;
        letter-spacing: 0.1em;
        padding-left: 25px;
        color: cornsilk;
      }

    }

    p {
      font-family: 'Brush Script MT', cursive;
      font-size: 50px;
      text-align: center;
      padding-top: 0 0;
      margin: 0;
      letter-spacing: 0.1em;
      padding-left: 25px;
      color: cornsilk;

    }
  </style>
</head>

<body>
  <div class="container">


    <div class="row">
      <div class="col-9 left">

        <img src="images/wing6.webp" style="height: 90px; width: 120px; margin-top: 0px;">
        <p> Nama <br>
          &<br>
          Nama
        </p>
      </div>
      <div class="col-3 right" style="padding-left:30px;">
        <h6>Kepada <br>
          Yth. Bapak/Ibu/Saudara/i</h6>
        <h1> </h1><br>
        <a href="index.php" class="btn btn-secondary">Buka Undangan</a>
      </div>

    </div>
  </div>
</body>

</html>