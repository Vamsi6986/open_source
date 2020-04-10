<html>
<title></title>
<body>
<?php
include('conn.php');
error_reporting(0);
	$nameError="";
	$emailError="";
	$mobileError="";
	$confirmERROR="";
	$passERROR="";
	$passConfirmERROR="";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$cemail=$_POST['cemail'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$mobile=$_POST['mobile'];
	
	if(isset($_POST['submit'])){
		if($name=="")
		{
			$nameError="input required";
		}
		else if($email=="")
		{
			$emailError="input required";
		}
		else if ($email != $cemail)
		{
			$confirmERROR="please chek confirm email";
		}
		else if($password=="")
		{
			$passERROR="input required";
		}
		else if($password!=$cpassword)
		{
			$passConfirmERROR="please confirm your password";
		}
		else if($mobile=="")
		{
			$mobileError="input required";
		}
		else
		{
		$sql="insert into email_reg(name,email,password,mobile) values('$name','$email','$password','$mobile')";
		$sql1="select * from email_reg where name='$name' and email='$email' and mobile='$mobile'";
		$query=mysqli_query($conn,$sql);
		$query1=mysqli_query($conn,$sql1);
		$name=$_POST['name'];
		if(mysqli_num_rows($query1)>1)
		{
			$alredyerror="This email and phone already registerd";
		}
		else
		{
		if($query)
		{
			header("location:welcome.php?name=$name&email=$email&mobile=$mobile");	
		}
		else
		{
			echo "something wemt wrong";
		}
		}
		}
		
	/*
	
	$sql="insert into email_reg(name,email,password,mobile) values('$name','$email','$password','$mobile')";
$query=mysqli_query($conn,$sql);
header('location:welcome.php?name=$name');z
	
if($_POST['name']!="")
{
	$_POST['name']=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
	$nameError=$_POST['name']."valid name sanitized";
	if($_POST['name']=="")
	{
		$nameError="Enter a valid name";
}
}
else
{
	$nameError="please enter name";
}
if($_POST['email']!="")
{
	$_POST['email']=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	$emailError=$_POST['email']."valid email and sanitized";
	if($_POST['email']=="")
	{
		$emailError="Enter a valid Email";
}
}
else
{
	$emailError="please enter email";
}
if($_POST['mobile']!="")
{
	$_POST['mobile']=filter_var($_POST['mobile'],FILTER_SANITIZE_NUMBER_INT);
	$mobileError=$_POST['mobile']."valid number and sanitized";
	if($_POST['mobile']=="")
	{
		$mobileError="Enter a valid Mobile NO";
}
}
else
{
	$mobileError="please enter Mobile No";
}
if($_POST['email']!=$_POST['cemail'])
{
	$confirmERROR="Please chek confirm email";
}
if($_POST['password']!=$_POST['cpassword'])
{
	$passConfirmERROR="please chek confirm password";
}
if($_POST['password']=='')
{
	$passERROR="password required";
}*/

}
?>
<div style="border:1px solid black; height:350px;width:700px;padding:10px;">
<form action="" method="POST">
		<h2>Email Registration</h2>
		Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"><span style="color:red;">*<?php echo $nameError; ?></span><br><br>
		Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"><span style="color:red;">*<?php echo $emailError; ?></span><br><br>
		Confirm Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cemail"><span style="color:red;">*<?php echo $confirmERROR; ?></span><br><br>
		Choose Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"><span style="color:red;">*<?php echo $passERROR; ?></span><br><br>
		Confirm Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="cpassword"><span style="color:red;">*<?php echo $passConfirmERROR; ?></span><br><br>
		Mobile:&nbsp;&nbsp;&nbsp;<input type="text" name="mobile"><span style="color:red;">*<?php echo $mobileError; ?></span><br><br>
		
		
		<input type="submit" name="submit">
		<br>
		<br>
		<span style="color:red;"><?php echo $alredyerror; ?></span>
</form>


</div>
</body>
</html>