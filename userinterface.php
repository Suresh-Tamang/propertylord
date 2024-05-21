<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: "Montserrat", sans-serif;

    }

    .upperpart {
      height: auto;
      display: inline-block;
      position: relative;
    }

    .upperpart img {
      width: 100%;
      height: 385px;
      display: block;
    }

    .txt1 {
      position: absolute;
      top: 50px;
      left: 30%;
      font-size: 40px;
      color: white;
    }

    .txt2 {
      position: absolute;
      top: 100px;
      left: 30%;
      font-size: 20px;
      color: white;
    }

    .search {
      position: absolute;
      top: 140px;
      left: 30%;
      font-size: 20px;
    }

    form {
      background: #fff;
      width: 550px;
      height: 55px;
      display: flex;
    }

    form input {
      flex: 1;
      border: none;
      outline: none;
      font-size: 20px;
      margin-left: 10px;
    }

    form button {
      background: tomato;
      padding: 10px 50px;
      border: none;
      outline: none;
      color: white;
      letter-spacing: 1px;
    }

    ::placeholder {
      font-size: 20px;
      padding-left: 10px;
      padding-top: 40px;
    }

    .sub-bar {
      position: absolute;
      left: 15%;
    }



    .card a {
      text-decoration: none;
      color: #7175e9;
      font-size: 18px;
      font-weight: bold;

    }

    .card {

      display: inline-block;
      margin-left: 40px;
      margin-top: 40px;
      background-color: whitesmoke;
      width: 190px;
      height: 50px;
      border-radius: 7px;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      transition: 0.30s;
    }

    .card:hover {
      box-shadow: 1px 1px 7px black;
    }
  </style>
</head>

<body>
  <?php
    include 'navbar.php';
    ?>
  <div class="upperpart">
    <img src="bg.jpg" class="img1">
    <div class="text-container">

      <div class="txt1">Explore top real estate in Nepal</div>
      <div class="txt2">Find houses,lands for sale or rent</div>
      <div class="search">
        <form>
          <input type="text" placeholder="Search for House, Land, Room">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>

  <div class="sub-bar">
    <div class="card">
      <a href="">
        <span style="margin-left: 60px;">House</span><br>
        <span style="margin-left: 60px;">For Sale</span>
      </a>
    </div>
    <div class="card">
      <a href="">
        <span style="margin-left: 60px;">Land</span><br>
        <span style="margin-left: 60px;">For Sale</span>
      </a>
    </div>
    <div class="card">
      <a href="">
        <span style="margin-left: 40px;">House, Room</span><br>
        <span style="margin-left: 60px;">For Rent</span>
      </a>
    </div>

  </div>
</body>

</html>