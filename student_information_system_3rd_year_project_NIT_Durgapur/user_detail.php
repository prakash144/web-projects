<?php
	//include('connect.php');
?>
<?php
	//$n=-1;
	//if(isset($_POST['Submit']))
	//{
		$mail=$_POST['email'];
		$pwd=$_POST['pwd'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$roll=$_POST['roll'];
		$dob=$_POST['date'];
		$mb=$_POST['mb'];
		$gen=$_POST['gender'];
		$male='Male';
		$female='Female';
		//$n=
		//user_reg($name,$roll,$gen,$dob,$mail,$pwd,$mb,$city);
		//header('Location:register.html?result='.$n);
	//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UsDetails</title>
<style type="text/css">
<!--
body {
	background-image: url(images/bg.jpg);
}
.style1 {color: #FFFFFF}
.style3 {color: #FFFFFF; font-family: "Times New Roman", Times, serif; }
.style4 {
	color: #000000;
	font-weight: bold;
}
.style5 {color: #000000}
.table{
	border:1px solid black;
	}
-->
</style></head>

<body>
<table width="889" border="0" align="center" cellpadding="10" cellspacing="0" class="table">
  <tr>
    <td colspan="4" bgcolor="#990000"><h2 align="center"><span class="style3">REGISTRATION DETAILS </span></h2></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FFFFFF"><div align="center"><span class="style1"></span><span class="style1"><img src="images/1.jpg" width="173" height="186" border="2" class="style4" /></span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="129" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="279" bgcolor="#FFFFFF"><div align="left"><span class="style4"> FULL NAME</span></div></td>
    <td width="16" bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td width="383" bgcolor="#FFFFFF"><span class="style4"><?php echo $name;?></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="left"><strong>ROLL NO </strong></div></td>
    <td bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $roll;?></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="left"><strong>DEPARTMENT</strong></div></td>
    <td bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td bgcolor="#FFFFFF"><span class="style4">Information Technology</span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="left"><strong>GENDER</strong></div></td>
    <td bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $name;?></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="left"><strong>DATE OF BIRTH </strong></div></td>
    <td bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php if($gen==1) echo $male; else echo $female; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="left"><strong>EMAIL</strong></div></td>
    <td bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $mail;?></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="left"><strong>MOBILE NO </strong></div></td>
    <td bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $mb;?></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="left"><strong>CITY</strong></div></td>
    <td bgcolor="#FFFFFF"><strong><span class="style5">:</span></strong></td>
    <td bgcolor="#FFFFFF"><span class="style4"><?php echo $city;?></span></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FFFFFF" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FFFFFF" align="center"><button onclick="myFunction()">Print this page</button></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FFFFFF" align="center">&nbsp;</td>
  </tr>
</table>
<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>
