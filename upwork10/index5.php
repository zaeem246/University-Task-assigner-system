<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   c
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
 <h6 class="q1 ">Question{n}</h6>
 <br>
 
 <div >
        <label  onclick="myFunction()" class="dropbtn form-control" style="text-align: center;" readonly><i class="fa-solid fa-image"></i>&nbsp Image Choice</a>  </label>
        <div id="myDropdown" class="dropdown-content" readonly>
          <a href="./indexmain.php" > &nbsp Question Type</a>
          <a href="./index2.php"> <i class="fa-solid fa-circle-dot"></i> &nbsp Single Selection
          <a href="./index3.php"> <i class="fa-solid fa-check-double"></i>&nbsp Multiple Selection</a> 
          <a href="./index4.php">       <i class="fa-solid fa-caret-down"></i>&nbsp Dropdown</a>       
          <a href="./index6.php"><i class="fa-solid fa-sliders"></i>&nbsp Slider</a>
          <a href="./index7.php"><i class="fa-solid fa-signal"></i>&nbsp Option Scale</a>
          <a href="./index8.php"> <i class="fa-solid fa-star"></i>&nbsp Star Rating</a>
          <a href="./index9.php"><i class="fa-solid fa-file-arrow-up"></i>&nbsp File Upload</a>
          <a href="./index10.php"><i class="fa-solid fa-pen-nib"></i>&nbsp Signature</a>
          <a href="./index11.php"><i class="fa-solid fa-money-check-dollar"></i>&nbsp Payment</a>
          <a href="./index12.php"><i class="fa-solid fa-table-cells-large"></i></i>&nbsp Matrix</a>
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
         <input type="text" class="form-control"  id="" placeholder="Enter Description" required>
       </div>
    
      <br>
        <div class="form-group">
         <label for="Question Description"> Question Description</label>
         <input type="text" class="form-control"  id="" placeholder="Enter Description" required>
       </div>
       
      <h5 class="q2">Options</h5>
    <br>
    <br>

    <div class="container">



    
    <form method="POST">

    
      

      
      
      <div class="form-group" id="dynamic_form">
                <div class="row">
	                <div class="col-md-5">
                  <label for="inputEmail4">Emoji icon</label>
	                    <input type="text" name="p_name" id="p_name" placeholder="Enter Product Name" class="form-control">
	                </div>
	                <div class="col-md-5">
                  <label >Title</label>
	                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter Product Quantity" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
	                </div>
	            
	                <div class="button-group">
                  <a href="javascript:void(0)" class="add_field_button  " style="color:  #0F52FF; border: none; "   id="plus5">+ Add Option</a>
                  <a href="javascript:void(0)" class="btn btn-danger " id="minus5" style="margin-left:20%;">Remove</a>
             
	                </div>
	            </div>
      </div>
    
              
     
    </form>
</div>

    

    
  <script>
    $(document).ready(function() {
      var dynamic_form =  $("#dynamic_form").dynamicForm("#dynamic_form","#plus5", "#minus5", {
        limit:10,
        formPrefix : "dynamic_form",
        normalizeFullForm : false
    });

      dynamic_form.inject([{p_name: '',quantity: '',remarks: ''}]);
       
    $("#dynamic_form #minus5").on('click', function(){
      var initDynamicId = $(this).closest('#dynamic_form').parent().find("[id^='dynamic_form']").length;
      
      if (initDynamicId === 2) {
        $(this).closest('#dynamic_form').next().find('#minus5').hide();
      }
      $(this).closest('#dynamic_form').remove();
    });

    $('form').on('submit', function(event){
        var values = {};
    $.each($('form').serializeArray(), function(i, field) {
        values[field.name] = field.value;
    });
    console.log(values)
        event.preventDefault();
      })
    });
</script>


    
 </div>
 

<!-- <div class="lb">
          <br>
          <p class="reetxt">
              Required Question

  <br>

<label class="switch">
<input type="checkbox" checked>
<span class="slider round"></span>
</label> -->
 



        </div>
     
  
    

  
  </form>



</div>


   


      <script>
          $(document).ready(function() {
      var max_fields      = 10; //maximum input boxes allowed
      var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
      var add_button      = $(".add_field_button"); //Add button ID
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append('<h5 class="">Option</h5> <div class="form-row"> <div class="form-group col-md-4"><label for="inputEmail4">Emoji icon</label><input type="email" class="form-control" id="inputEmail4" placeholder="Example"> </div><div class="form-group col-md-6"><label ">Title</label><input type="text" class="form-control" id="" placeholder="Point Guard"></div></div><a href="#" class="remove_field">Remove</a>'); //add input box
          }
      });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
  });
      </script>
   
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