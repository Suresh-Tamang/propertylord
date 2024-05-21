<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-weight: weight;
    font-style: normal;
  }

  body {
    width: 100%;
    height: 100%;
    justify-content: center;
    margin-top: 100px;
    display: flex;

  }

  .registration {
    width: 800px;
    background-color: #7175e9;
    border-radius: 10px;
  }

  .image {
    float: left;
    width: 300px;
    height: 400px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }

  .header {
    margin-top: 25px;
    margin-bottom: 10px;
    color: white;
  }

  .line {
    height: 1px;
    background-color: white;
    margin-bottom: 30px;
  }

  input {
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 25px;
    border-radius: 7px;
    height: 40px;
    width: 410px;
    padding: 10px;
    border: none;
  }

  .create-button {
    width: 410px;
    height: 39px;
    color: #1400FF;
    background-color: #C5C4E9;
    border: none;
    border-radius: 7px;
    font-weight: bold;
    margin-bottom: 10px;
    transition: 0.5s;
  }

  .create-button:hover {
    background-color: white;
    color: #7175e9;
  }

  p {
    margin-top:10px;
    color: whitesmoke;
  }

  p a {
    text-decoration: none;
  }

 
</style>

<body>
  <div class="registration">
    <div class="image-holder">
      <img src="img.avif" class="image">
    </div>
    <div class="details">
      <h2>
        <center class="header">Login To Account</center>
      </h2>
      <div class="line"></div>
      <center>
        <input type="email" name="email" placeholder="Email Address">
        <input type="password" name="password" placeholder="Password">
        <button class="create-button">Login</button>
        <p>Need an Account? <a href="registration.php">Register</a></p>
      </center>


    </div>
  </div>
  <script src="https://kit.fontawesome.com/71e90eb4d2.js" crossorigin="anonymous"></script>
</body>

</html>