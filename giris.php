<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Giriş Sayfası</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("dimg/backgrand.jpg") 50% fixed;
  background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
 
  flex-direction: column;
 
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background: rgba(4, 40, 68, 0.85);
}



footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

body ul {
 margin: 0px;
 padding: 0px;
 list-style-type: none;
 margin-top: 200px;
}
body ul li a {
 display: block;
 height: 50px;
 width: 200px;
 padding-left: 5px;
 line-height: 40px;
 background-color: #5f9ea0;
 color: #FFF;
 text-decoration: none;
 margin-bottom: 5px;
        font-family: Tahoma;
        font-size: 20px; 
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

 
  <div class="wrapper">
  <h1>Lütfen Uygun Kullanıcı Girişini Seçiniz </h1>
  <ul>
    <li><a href="index.php">Anasayfa</a></li>
    <li><a href="adPanel/production/login.php">Yönetici Girişi</a></li>
    <li><a href="doktor.php">Doktor Girişi</a></li>
    <li><a href="#">Hemşire Girişi</a></li>
    <li><a href="#">Hasta Bakıcı Girişi</a></li>
    <li><a href="#">Hasta Girişi</a></li>
    <li><a href="hasta.php">Hasta Yakını Girişi</a></li>
  </ul>


  <footer></footer>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
