<?php
//$connect = mysqli_connect("localhost", "root", "", "testing");
$number = count($_POST["name0"]);
$number1 = count($_POST["name1"]);


          

	$number2 = count($_POST["emojy"] );
	if($number2 >= 1)
	{
		for($i=0; $i<$number; $i++)
		{
			
			print_r($_POST["emojy"][$i] );
		}
		
	}



//$number2 = count($_FILES["file1"]["name"]);
$value = $_POST["questiontitle"];
$value1 = $_POST["questiondescription"];
$value2 = $_POST["Formtitle"];
$value3 = $_POST["formdescription"];
$value4 = $_POST["homepagetitle"];
$value5 = $_POST["homepagesubtitle"];
$value6 = $_POST["smd"];
print_r($value);
print_r($value1);
print_r($value2);
print_r($value3);
print_r($value4);
print_r($value5);
print_r($value6);
if($number >= 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["name"][$i] != ''))
		{
			print_r($_POST["name"][$i]);
			//$sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
			//mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}

else
{
	echo "Please Enter Name";
}

if($number1 >= 1)
{
	for($i=0; $i<$number1; $i++)
	{
		if(trim($_POST["name1"][$i] != ''))
		{
			print_r($_POST["name1"][$i]);
			//$sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
			//mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}

else
{
	echo "Please Enter Name";
}

