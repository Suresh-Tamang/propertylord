<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-weight: weight;
    font-style: normal;
  }

    .header {
      min-height: 100vh;
      width: 100%;

    }

    .main-nav {
      padding-top: 18px;
      height: 60px;
      background-color: whitesmoke;
    }

    .bar ul li {
      list-style: none;
      float: left;
      padding: 8px 12px;
    }

    .bar {

      float: right;
      padding-right: 30px;

    }

    .bar ul li a {
      text-decoration: none;
      color: black;
      font-size: 15px;
      transition: 0.5s;
    }


    .bar ul li::after {
      content: '';
      width: 0%;
      height: 2px;
      background: #f44336;
      display: block;
      margin: auto;
      transition: 0.5s;
    }

    .bar ul li:hover::after {
      width: 100%;
    }

    #login-icon {
      padding-top: 11px;
      margin-left: 10px;
      display: inline-block
    }

    #login-icon::after {
      content: '';
      width: 0%;
      height: 2px;
      background: #f44336;
      display: block;
      margin: auto;
      transition: 0.5s;
    }

    #login-icon:hover::after {
      width: 100%;
    }
  </style>
  <title>navbar</title>
</head>

<body>
  <nav>
    <div class="main-nav">
      <a href="navbar.php"><img src="" alt="">LOGO</a>
      <div class="bar">
        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="">ABOUT</a></li>
          <li><a href="">RENT</a></li>
          <li><a href="">BUY</a></li>

          <a href="login.php"><i class="fa-solid fa-right-to-bracket" id="login-icon"></i></a>

        </ul>
      </div>
    </div>
  </nav>
</body>

</html>