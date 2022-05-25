<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/dcf062da12.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/dynamic-form.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <label  onclick="myFunction()" class="dropbtn form-control" style="text-align: center;" readonly><i class="fa-solid fa-caret-down"></i>&nbsp Dropdown</label>
        <div id="myDropdown" class="dropdown-content" readonly>
          <a href="./indexmain.php" > &nbsp Question Type</a>
          <a href="./index3.php"> <i class="fa-solid fa-circle-dot"></i> &nbsp Single Selection </a>
          <a href="./index4.php"> <i class="fa-solid fa-check-double"></i>&nbsp Multiple Selection </a>
          <a href="./index5.php"><i class="fa-solid fa-image"></i>&nbsp Image Choice</a>               
          <a href="./index6.php"><i class="fa-solid fa-sliders"></i>&nbsp Slider</a>
          <a href="./index7.php"><i class="fa-solid fa-signal"></i>&nbsp Option Scale</a>
          <a href="./index8.php"> <i class="fa-solid fa-star"></i>&nbsp Star Rating</a>
          <a href="./index9.php"><i class="fa-solid fa-file-arrow-up"></i>&nbsp File Upload</a>
          <a href="./index10.php"><i class="fa-solid fa-pen-nib"></i>&nbsp Signature</a>
          <a href="./index11.php"><i class="fa-solid fa-money-check-dollar"></i>&nbsp Payment</a>
          <a href="./index12.php"><i class="fa-solid fa-table-cells-large"></i></i>&nbsp Matrix</a>
        </div>
      </div>
</form>
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

<?php
if(isset($_POST['submit_values']))
{
 //$host="localhost";
 //$username="root";
 //$password="";
 //$databasename="sample";
 //$connect=mysql_connect($host,$username,$password);
 //$db=mysql_select_db($databasename);	 
 
 $name=$_POST['p_name'];

 for($i=0;$i<count($name);$i++)
 {
  if($name[$i]!="" && $age[$i]!="" && $job[$i]!="")
  {
   print_r($name[$i]);	 
  }
 }
}
?>
  
          <br>
          <br>
         <div class="form-group">
               <label >Question Title </label>
               <input type="text" name="questiontitle" class="form-control"  id="" placeholder="Example" required>
             </div>
          
            <br>
              <div class="form-group">
               <label > Question Description</label>
               <input name="questiondescription" type="text" class="form-control"  id="" placeholder="Example" required>
             </div>
             
            <h6 class="q2 mt-3">Options</h6>
          <br>
          <br>
  
    
        <br>
  

      
        
  
      
      </form>
     

      <div class="container">
			<br />
			<br />
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table  id="dynamic_field">
							<tr>
                <td>   <label style="margin:10%;" class="form-control " >Option </label></td>
								<td><input type="text" name="name[]" placeholder="Enter your Name" style="margin:10%;" class="form-control name_list" /></td>
                
								<td><button type="button" name="add" id="add" class="btn btn-success" style="margin:10%; padding: 2px;">Add More</button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>


</div>
</form>

    

    
<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"> <td>   <label style="margin:10%;" class="form-control " >Option '+i+' </label></td><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" style="margin:10%;" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin:10%;" >X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>

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
    

  
</body>
</html>