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

    /* design for  search menu */
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
      background: #8386e3;
      padding: 10px 50px;
      border: none;
      outline: none;
      color: white;
      letter-spacing: 1px;
      transition: 0.6s;
    }

    form button:hover {
      background-color: skyblue;
    }

    ::placeholder {
      font-size: 20px;
      padding-left: 10px;
      padding-top: 40px;
    }

    /* design for house for sale card */
    .sub-bar {
      margin-left: 250px;
      width: max-content;
    }



    .card a {
      text-decoration: none;
      color: black;
      font-size: 16px;
      font-weight: bold;

    }

    .card {

      display: inline-block;
      margin-left: 55px;
      margin-top: 50px;
      background-color: whitesmoke;
      width: 190px;
      height: 40px;
      border-radius: 7px;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      transition: 0.30s;
    }

    .card:hover {
      box-shadow: 1px 1px 7px black;

    }

    /* design for contact card  */
    .sub-bar2 {
      margin-top: 50px;
    }

    .card-2 {
      display: inline-block;
      margin-left: 90px;
    }

    .card-2 a {
      text-decoration: none;
      color: black;
    }

    /* design for details */
    .sub-bar3 {
      margin-left: 30px;
      margin-top: 90px;
    }

    .card-3 {
      display: inline-block;
      background-color: #8386e3;
      height: max-content;
      width: 300px;
      margin-left: 20px;
      border-radius: 7px;
      padding: 20px;
    }

    .txt-head {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .txt {
      margin-bottom: 15px;
    }

    .learnmore {
      color: white;
      font-weight: 200;
    }

    /* designing post demand */
    .post-demand {
      display: inline-block;
    }
  </style>
</head>

<body>

  <div class="upperpart">
    <!-- search menu  -->
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


  <!-- house for sale menu -->
  <div class="mainbar-container">
    <div class="sub-bar">
      <div class="card">
        <a href="">
          <span style="margin-left: 60px; ">House</span><br>
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

      <!-- for contact menu -->
      <div class="sub-bar2">
        <div class="card-2">
          <center>
            <i class="fa-solid fa-phone" style="display: block; margin-bottom: 5px;"></i>
          </center>
          <span style="cursor: pointer;">9808715126</span>
        </div>
        <div class="card-2">
          <center>
            <i class="fa-solid fa-envelope" style="display: block; margin-bottom: 5px;"></i>
          </center>
          <a href="mailto:ronixmalla21@gmail.com">Email Us</a>
        </div>
        <div class="card-2">
          <center>
            <i class="fa-solid fa-message" style="display: block; margin-bottom: 5px;"></i>
          </center>
          <a href="contact.php">Message Us</a>
        </div>
        <div class="card-2">
          <center>
            <i class="fa-brands fa-facebook" style="display: block; margin-bottom: 5px;"></i>
          </center>
          <a href="https://www.facebook.com/" target="_blank">Contact Via</a>
        </div>
      </div>

      <!-- info of website -->
      <div class="sub-bar3">
        <div class="card-3">
          <div class="txt-head">
            <p>Sell / Rent Your Property</p>
          </div>

          <div class="txt">
            <p>Owners, Agencies and Agents can directly contact us an provide there desirable property to sale on this
              real estate platform to generate sales.</p>
          </div>
          <a href="saleform.php" class="learnmore">Learn More</a>
        </div>


        <div class="card-3">
          <div class="txt-head">
            <p>Buy Verified Properties</p>
          </div>
          <div class="txt">
            <p>Search through our listing of real estate properties in Nepal and contact Owner, agency directly to make
              a
              deal. With fast pace Replies.</p>
          </div>
          <a href="websitedetails.php" class="learnmore">Learn More</a>
        </div>
      </div>


    </div>
    <div class="post-demand">
      <span>hello</span>
    </div>
  </div>


  <div class="housesale">

  </div>
  <?php
  include("footer.php");
  ?>
</body>

</html>