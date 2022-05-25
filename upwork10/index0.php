<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/dcf062da12.js" crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <script src="https://rawgit.com/theraot/emoji/master/emoji.js" charset="utf-8"></script>


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<body>



  <!-- <form  action="" method="POST"> -->
  <form method="post" enctype="multipart/form-data" class="container d-flex justify-content-center p-5" name="add_name"
    id="add_name">

    <div  class="container border11">


      <div class="form-group">
        <input style="margin-left: 90%;" type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
        <h4 style="font-family:poppins;"> <b>CREATE NEW FORM</b> </h4>
        <label for="Form title">Form Title</label>
        <input name="Formtitle" ; type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Title"
          required>

      </div>
      <div class="form-group">
        <label for="form description">Form Description</label>
        <input name="formdescription" ; type="text" class="form-control" id="" placeholder="Enter Description" required>
      </div>
      <div>
        <label for="Category">Category</label>
        <select class="form-control">
          <option>Default select</option>
        </select>
      </div>

      <div>
        <label >Form Length in Minutes</label>
        <select class="form-control">
          <option>Default select</option>
        </select>
      </div>

      <hr>
      <div class="form-group">

        <label for=" title">Home Page Title</label>
        <input name="homepagetitle" type="text" class="form-control" id="" aria-describedby=""
          placeholder="Are you interested in playing basketball" required>

      </div>
      <div class="form-group">
        <label for="sub title">Home Page Sub-Title</label>
        <input name="homepagesubtitle" ; type="text" class="form-control" id=""
          placeholder="We are arranging tryouts for the school team" required>
      </div>
      <div>
      </div>

  

      <style>
        #op0 {
          position: absolute;

          margin-left: 35%;
          margin-bottom: 20%;
          top: 70px;
          font-family: 'Poppins';
          font-style: normal;
          font-weight: 600;
          font-size: 19px;
          line-height: 23px;
          /* identical to box height */


          color: #9D2DF5;
        }
      </style>
      <br>
      <br>
      <br>
 

<br>
<br>

      <div  class="">

   

        <div class="border11 p-5">
          <h4 style="margin-left: 35%;"> <b>FORM QUESTIONS</b> </h4>
          <h6 id="op0">Question</h6>
          <br>
          <br>

          <div>
            <label onclick="myFunction()" class="dropbtn form-control" style="text-align: center;" readonly>Question
              Type</label>
            <div id="myDropdown" class="dropdown-content" readonly>
              <a href="./index2.php"> <i class="fa-solid fa-circle-dot"></i> &nbsp Single Selection</a>
              <a href="./index3.php"> <i class="fa-solid fa-check-double"></i>&nbsp Multiple Selection</a>
              <a href="./index4.php"> <i class="fa-solid fa-caret-down"></i>&nbsp Dropdown</a>
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

          <style>
            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f1f1f1;
              width: 95%;
              overflow: auto;
              box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
              z-index: 1;
            }

            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }


            .dropdown a:hover {
              background-color: #ddd;
            }

            .show {
              display: block;
            }
          </style>

     
          <br>
          <br>
          <div class="form-group">
            <label>Question Title </label>
            <input type="text" name="questiontitle" class="form-control" id="" placeholder="" required>
          </div>

          <br>
          <div class="form-group">
            <label> Question Description</label>
            <input name="questiondescription" type="text" class="form-control" id="" placeholder="" required>
          </div>


          <br>
          <br>


          <br>

          <!-- single -->
          <style>
            #op1 {
              position: absolute;
              margin-left: 30%;
              margin-bottom: 20%;
              top: 390px;
              font-family: 'Poppins';
              font-style: normal;
              font-weight: 600;
              font-size: 19px;
              line-height: 23px;
              /* identical to box height */


              color: #000000;
            }
          </style>
          <div class="container" hidden>
            <br />
            <br />
            <div class="form-group">
              <h6 id="op1">Options</h6>
              <br>
              <br>


              <div class="table-responsive">
                <table id="dynamic_field">
                  <tr>
                    <td> <label style="margin:10%;" class="form-control ">Option </label></td>
                    <td><input type="text" name="name[]" placeholder="" style="margin:10%;"
                        class="form-control name_list" /></td>

                    <td><button type="button" name="add" id="add" class="btn btn-success" style="margin:10%;">Add
                        More</button></td>
                  </tr>
                </table>

              </div>

            </div>


          </div>

          <!-- single /multie /drop-->
          <div class="container" hidden>
            <br />
            <br />
            <div class="form-group">
              <h6 id="op1">Options</h6>
              <br>
              <br>


              <div class="table-responsive">
                <table id="dynamic_field">
                  <tr>
                    <td> <label style="margin:10%;" class="form-control ">Option </label></td>
                    <td><input type="text" name="name0[]" placeholder="" style="margin:10%;"
                        class="form-control name_list" /></td>

                    <td><button type="button" name="add" id="add" class="btn btn-success" style="margin:10%;">Add
                        More</button></td>
                  </tr>
                </table>

              </div>

            </div>


          </div>


          <!-- image slider-->
          <div class="container" hidden>
            <br />
            <br />
            <div class="form-group">
              <h6 id="op1">Options</h6>
              <br>
              <br>


              <div class="table-responsive">
                <table id="dynamic_field1">
                  <tr>
                    <td> <label style=" margin-left:1" style="margin-left:20%" margin-right:10%; margin-bottom:30%;
                        text-align: center;">Emojy </label><select type="text" name="emojy[]"
                        class="form-control name_list" width="25" id="mySelect"></select></td>

                    <td> <label style="margin-left:20%; margin-bottom:10%; ">Title </label><input type="text"
                        name="name1[]" placeholder="" style="margin-left:20%; " class="form-control name_list" /></td>

                    <td><br><br><button type="button" name="add" id="add1" class="btn btn-success"
                        style="margin-left:25%; ; ">Add More</button></td>
                  </tr>
                </table>

              </div>

            </div>


          </div>
          <!-- slider-->


<!-------------------------->





<div class="" hidden >
            
  <style>

    #font{
      font-family: 'Poppins';
    }
  </style>
            <h5  style="margin: bottom 50px;   " id="font" class="text-center font-weight-bold ">Scale Poles</h5>
        
            <div class="row">

              <div class="col">

                <label>From</label>
                <input  type="text" class="form-control" placeholder="" required>
              </div>
              <div class="col">
                <label>To</label>
                <input  type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>


<!-------------------------->



          <!-- option scale-->

          <div class="" hidden>
            <br />
            <br />
            <h5 id="op1">Scale Poles</h5>
            <br>
            <br>


            <div class="row">

              <div class=" col">

                <label>From</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label>To</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>

            <div class="form-row">

              <div class="form-group col-md-4">

                <label>Label Start</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label>Label Middle</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label>Lable End</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>

          <!-- Star Rating-->
          <div class="" hidden >
            <h6 style="padding-bottom:40px;" id="op1">Scale Icon</h6>
            <br>
            <br>
            <br>
            <br>

            <label>Scale Length</label>
            <select class="form-control" required>
              <option>1</option>
            </select>
            <br>
            <label>Icon Type</label>
            <select class="form-control" required>
              <option>1</option>
            </select>
          </div>

          <!-- File Upload-->
          <div class="" hidden>
            <br>
            <br>
            <div class="form-group">
              <label for="Question Title">Question Title </label>
              <input type="text" class="form-control" id="" placeholder="" required>
            </div>

            <br>
            <div class="form-group">
              <label for="Question Description"> Question Description</label>
              <input type="text" class="form-control" id="" placeholder="" required>
            </div>
          </div>
          <!-- Signature-->
          <div class="container" hidden>
            <br>
            <br>
            <div class="form-group">
              <label for="Question Title">Question Title </label>
              <input type="text" class="form-control" id="" placeholder="" required>
            </div>

            <br>
            <div class="form-group">
              <label for="Question Description"> Question Description</label>
              <input type="text" class="form-control" id="" placeholder="" required>
            </div>
          </div>
          <!--Payment-->
          <div class="container" hidden>
            <br>
            <br>
            <div class="form-group">
              <label for="Question Title">Question Title </label>
              <input type="text" class="form-control" id="" placeholder="" required>
            </div>

            <br>
            <div class="form-group">
              <label for="Question Description"> Question Description</label>
              <input type="text" class="form-control" id="" placeholder="" required>
            </div>
          </div>

          <!-- Matrix-->
          <div class="" hidden>
            <style>
                #mc {
          position: absolute;

          margin-left: 32%;
          margin-bottom: 20%;
          top: 340px;
          font-family: 'Poppins';
          font-style: normal;
          font-weight: 600;
          font-size: 19px;
          line-height: 23px;
          /* identical to box height */


          color: #000000;
        }
            </style>
            <h2 id="mc">Matrix Content</h2>

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
                  <td> <input type="radio"></td>
                  <td> <input type="radio"></td>
                  <td> <input type="radio"></td>
                </tr>
                <tr>
                  <td>Row2</td>
                  <td> <input type="radio"></td>
                  <td> <input type="radio"></td>
                  <td> <input type="radio"></td>
                </tr>
                <tr>
                  <td>Row3</td>
                  <td> <input type="radio"></td>
                  <td> <input type="radio"></td>
                  <td> <input type="radio"></td>
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
  <script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
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
  <script>
    $(document).ready(function () {
      var i = 1;
      $('#add').click(function () {


        $('#dynamic_field').append('<tr id="row' + i + '"> <td>   <label style="margin:10%;" class="form-control " >Option ' + i + ' </label></td><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" style="margin:10%;" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove" style="margin:10%;" >X</button></td></tr>');
        i++;
      });

      $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
      });



      var j = 1;
      $('#add1').click(function () {


        $('#dynamic_field1').append('<tr id="row' + j + '"> <td>  <label  style=" margin-left:10%; margin-right:10%; margin-top:10%; margin-bottom:30%; text-align: center;" >Emojy </label><select type="text" name="emojy[]"  class="form-control name_list"  width="25" id="mySelect' + j + '"></select></td><td> <label  style="margin-left:20%; margin-bottom:10%; margin-top:10%; "  >Title </label><input type="text" name="name1[]" placeholder="Enter your Name" style="margin-left:20%; " class="form-control name_list" /></td><td><button type="button" name="remove" id="' + j + '" class="btn btn-danger btn_remove1" style="margin-left:50%; margin-top:60%; " >X</button></td></tr>');

        var mySelect = document.getElementById('mySelect' + j)
        var newOption;
        var emojRange = [
          [128513, 128591], [9986, 10160], [128640, 128704]
        ];
        //inside array define range arrays.
        //1st array : Emoticons icons
        //2nd range : Dingbats.
        //3rd range : Transport and map symbols
        for (var i = 0; i < emojRange.length; i++) {
          var range = emojRange[i];
          for (var x = range[0]; x < range[1]; x++) {

            newOption = document.createElement('option');
            newOption.value = x;
            newOption.innerHTML = "&#" + x + ";";
            mySelect.appendChild(newOption);
          }

        }



        j++;
      });

      $(document).on('click', '.btn_remove1', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
      });



      $('#submit').click(function () {
        $.ajax({
          url: "name.php",
          method: "POST",
          data: $('#add_name').serialize(),
          success: function (data) {
            alert(data);
            $('#add_name')[0].reset();
          }
        });
      });

    });
  </script>







  <script>
    $(document).ready(function () {
      $("#hide").click(function () {
        $("sp").hide();
      });
      $("#show").click(function () {
        $("p").show();
      });
    });
  </script>

  <script>
    var mySelect = document.getElementById('mySelect')
    var newOption;
    var emojRange = [
      [128513, 128591], [9986, 10160], [128640, 128704]
    ];
    //inside array define range arrays.
    //1st array : Emoticons icons
    //2nd range : Dingbats.
    //3rd range : Transport and map symbols
    for (var i = 0; i < emojRange.length; i++) {
      var range = emojRange[i];
      for (var x = range[0]; x < range[1]; x++) {

        newOption = document.createElement('option');
        newOption.value = x;
        newOption.innerHTML = "&#" + x + ";";
        mySelect.appendChild(newOption);
      }

    }
  </script>


</body>


</html>