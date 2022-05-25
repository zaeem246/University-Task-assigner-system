<!DOCTYPE html>
<html>
  <head>
    <title>GeeksForGeeks</title>
    <style type="text/css">
      div
      {
      background: #4CB974;
      text-align: center;
      font-size: 20px;
      padding: 30px;
      color: #fff;
      font-family: sans-serif;
      }
    </style>
  </head>
  <body>
    <form action="file-upload-manager.php" method="post" 
     enctype="multipart/form-data" style="border: 1px solid #1f1f1f;
       padding: 20px; position: absolute; top: 50%; left: 50%; 
          transform: translate(-50%, -50%);">
      <!--multipart/form-data ensures that form
        data is going to be encoded as MIME data-->
  
      <h2>Upload File</h2>
      <input type="file" name="photo" id="fileSelect"><br><br>
      <input type="submit" name="submit" value="Upload"><br><br>
      <!-- name of the input fields are going to be used in our php script-->
      <div> This Video is made for GFG</div>
    </form>
  </body>
</html>