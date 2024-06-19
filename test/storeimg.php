<?php
    $imgname=$_FILES['image']['name'];
    echo('<script>alert("img selected ");</script>');
    echo "hello world";
    echo $imgname;

?>
<form action="" method="post" enctype="multipart/form-data">
  <label for="image">Select Image:</label>
  <input type="file" name="image" id="image">
  <br>
  <button type="submit">Upload Image</button>
</form>
