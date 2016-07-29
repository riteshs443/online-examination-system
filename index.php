<?php
session_start();
?>
<html>
<head>
<title>ONLINE EXAMINATION </title>
<link rel="stylesheet" href="exam.css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Wel come to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
		
		<tr>
    <div class="header">
<div class="header_image"></div>
<div class="header_image1">
</div>
</div>
  </tr>
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="exams2013.JPG" width="100" height="100" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="Results00.jpg" width="100" height="100" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
 
  
  
</table>';
   
		exit;
		

}
?>	





<!--main div start-->
<div class="main">
<!--header section-->
<div class="header">
<div class="header_image"></div>
<div class="header_image1">
</div>
</div>
<!--header section closed-->
<div class="welcome"><p style="color:red;    color: #1419EF;
    text-align: center;
    font-family: cursive;
    font-style: italic;
    font-size: 32px;
    font-weight: 600;
	"> <marquee behavior="alternate">Welcome to Online Quiz</marquee></p></div>
<!--middle div start-->
<div class="middle">
<div class="middle1">
<p style="color: #E6160A;
    text-align: center;
    text-decoration: underline;
    text-transform: uppercase;
    font-family: fantasy;
    font-size: x-large;
    line-height: 94px;">Click! Here For Registration</p>
	<center><a href="signup.php"><img src="7.png"></a></center>
</div>
<div class="middle2">
<P style="color: #E6160A;
    text-align: center;
    text-decoration: underline;
    text-transform: uppercase;
    font-family: fantasy;
    font-size: x-large;
    line-height: 94px;">user login</p>
	<center>
	<form name="form1" method="post" action="">
	<table  border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
		<br>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
       
      </table>
	  </form>
	  </center>
</div>
</div>
<div class="fotter"> 
<p style="color:red;    color: #1419EF;
    text-align: center;
    font-family: cursive;
    font-style: italic;
    font-size: 25px;
    font-weight: 600;
	">Design By Ritesh Singh & Powered By SRM University</p></div>
<!--middle div closed-->
</div>


<!--main div closed-->
</body>
</html>
