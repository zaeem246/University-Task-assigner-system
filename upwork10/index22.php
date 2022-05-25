
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61824078-1', 'auto');
  ga('send', 'pageview');
</script>
<html>
<head>

<title>Demo Of Dynamic Form Using PHP, jQuery And MySQL On TalkersCode.com</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="Description" content="Create Dynamic Form Using PHP, jQuery And MySQL In this tutorial we will show you how to how to create dynamic form using PHP, jQuery and MySQL">
<meta name="Keywords" content="dynamic contact form ,dynamic form fields, dynamic form html ,html form dynamic fields ,dynamic web form builder ,jquery form ,open source php form generator ,create web form ,create jquery form ,how to create a php website ,web form generator ,dynamic web form creation ,dynamic form creation ,dynamic web forms ,online form generator ,php web form builder ,create dynamic form ,php dynamic form builder ,php form builder open source ,html form code generator ,dynamic html form ,free php form builder ,dynamic form builder ,using php ,dynamic html form builder, dynamic form generation ,form generator ,php form designer ,dynamic pdf forms ,dynamic forms ">
<meta property="og:image" content="http://talkerscode.com/webtricks/images/dynamic_form_php.jpg"/>

<style>
    body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#F9E79F;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#9A7D0A;
}
#wrapper h1 p
{
 font-size:18px;
}
#employee_table input[type="text"]
{
 width:120px;
 height:35px;
 padding-left:10px;
}
#form_div input[type="button"]
{
 width:110px;
 height:35px;
 background-color:#D4AC0D;
 border:none;
 border-bottom:3px solid #B7950B;
 border-radius:3px;
 color:white;
}
#form_div input[type="submit"]
{
 margin-top:10px;
 width:110px;
 height:35px;
 background-color:#D4AC0D;
 border:none;
 border-bottom:3px solid #B7950B;
 border-radius:3px;
 color:white;
}
</style>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function add_row()
{
	$rowno=$("#employee_table tr").length;
	$rowno=$rowno+1;
	$("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter Name'></td><td><input type='text' name='age[]' placeholder='Enter Age'></td><td><input type='text' name='job[]' placeholder='Enter Job'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno)
{
	$('#'+rowno).remove();
}
</script>
<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#F9E79F;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#9A7D0A;
}
#wrapper h1 a
{
	color:#9A7D0A;
	font-size:18px;
}
#employee_table input[type="text"]
{
	width:120px;
	height:35px;
	padding-left:10px;
}
#form_div input[type="button"]
{
	width:110px;
	height:35px;
	background-color:#D4AC0D;
	border:none;
	border-bottom:3px solid #B7950B;
	border-radius:3px;
	color:white;
}
#form_div input[type="submit"]
{
	margin-top:10px;
	width:110px;
	height:35px;
	background-color:#D4AC0D;
	border:none;
	border-bottom:3px solid #B7950B;
	border-radius:3px;
	color:white;
}
</style>
</head>
<body>
<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

<center>
<div id="bigad_display">

<amp-ad
     layout="fixed"
     width="728"
     height="90"
     type="adsense"
     data-ad-client="ca-pub-6925135507586183"
     data-ad-slot="2956656957">
</amp-ad>

</div>
</center>

<br>
<br>


<center>
<div id="linkad_middle">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- linkad_middle -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6925135507586183"
     data-ad-slot="7436819753"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
</center>
<div id="wrapper">
<h1>Create Dynamic Form Using PHP,<br>jQuery And MySQL<br><a href="http://talkerscode.com" target="_blank">See More On TalkersCode.com</a></h1>

<div id="form_div">
<form method="post">
<table id="employee_table" align=center>
<tr id="row1">
<td><input type="text" name="name[]" placeholder="Enter Name"></td>
<td><input type="text" name="age[]" placeholder="Enter Age"></td>
<td><input type="text" name="job[]" placeholder="Enter Job"></td>
</tr>
</table>
<input type="button" onclick="add_row();" value="ADD ROW">
<input type="submit" name="submit_row" value="SUBMIT">
</form>
</div>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<center>
<div id="middlead_display">

<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-6925135507586183"
     data-ad-slot="4440334351">
</ins>

</div>


<div id="second_middlead_display">

<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-6925135507586183"
     data-ad-slot="4440334351">
</ins>

</div>

</center>

<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<center>

</center>
</div>
</body>
</html>