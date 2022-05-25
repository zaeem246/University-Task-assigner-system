<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dcf062da12.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/dynamic-form.js"></script>
    <script src="https://kit.fontawesome.com/dcf062da12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
  <div class="container" >

    <form class="container d-flex justify-content-center p-5"  action="" method="POST">
      <div class="border11 p-5">
     <h6 class="q1">Question{n}</h6>
     <br>
     <br>
     <div >
        <label  onclick="myFunction()" class="dropbtn form-control" style="text-align: center;" readonly><i class="fa-solid fa-table-cells-large"></i></i>&nbsp Matrix</a></label>
        <div id="myDropdown" class="dropdown-content" readonly>
          <a href="./indexmain.php" > &nbsp Question Type</a>
          <a href="./index2.php"> <i class="fa-solid fa-circle-dot"></i> &nbsp Single Selection
          <a href="./index3.php"> <i class="fa-solid fa-check-double"></i>&nbsp Multiple Selection</a> 
          <a href="./index4.php">  <i class="fa-solid fa-caret-down"></i>&nbsp Dropdown</a>       
          <a href="./index5.php">><i class="fa-solid fa-image"></i>&nbsp Image Choice</a> 
          <a href="./index6.php"><i class="fa-solid fa-sliders"></i>&nbsp Slider</a> 
          <a href="./index7.php"><i class="fa-solid fa-signal"></i>&nbsp Option Scale</a> 
          <a href="./index8.php"><i class="fa-solid fa-star"></i>&nbsp Star Rating</a>
          <a href="./index9.php"><i class="fa-solid fa-file-arrow-up"></i>&nbsp File Upload</a>
          <a href="./index10.php"><i class="fa-solid fa-pen-nib"></i>&nbsp Signature</a>
          <a href="./index11.php"><i class="fa-solid fa-money-check-dollar"></i>&nbsp Payment</a>
        </div>
      </div>
      <style>

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  width: 95%;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
  </style>

  <script>
      /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
  </script>
  
          <br>
          <br>
          <div class="form-group">
             <label for="Question Title">Question Title </label>
             <input type="text" class="form-control"  id="" placeholder="Example" required>
           </div>
        
          <br>
            <div class="form-group">
             <label for="Question Description"> Question Description</label>
             <input type="text" class="form-control"  id="" placeholder="Example" required>
           </div>
           <div class="container">
            <h2>Matrix Content</h2>
                    
            <table style="color: rgb(61, 77, 218);" class="table table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th>Col1</th>
                  <th>Col2</th>
                  <th>Col3</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Row1</td>
                  <td>   <input type="radio"></td>
                  <td>   <input type="radio"></td>
                  <td>   <input type="radio"></td>
                </tr>
                <tr>
                  <td>Row2</td>
                  <td>   <input type="radio"></td>
                  <td>   <input type="radio"></td>
                  <td>   <input type="radio"></td>
                </tr>
                <tr>
                  <td>Row3</td>
                  <td>   <input type="radio"></td>
                  <td>   <input type="radio"></td>
                  <td>   <input type="radio"></td>
                </tr>
              


              </tbody>
            </table>
          </div>
           
           <!-- <div class="lb">
            <br>
            <p class="retxt">
                Required Question
                
              </p>
<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
            -->


        </div>
      

    
    </form>
</body>
</html>