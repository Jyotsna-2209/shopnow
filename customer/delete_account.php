<br>
<h2 style="text-align:center; color:red">
Do you really want to delete your account??</h2>
<form action="" method="post">
<br>
<input type="submit" name="yes" value="Yes, I want" />
<input type="submit" name="no" value="No, I was Joking" />
</form>
<?php
$user=$_SESSION['customer_email'];
if(isset($_POST['yes']))
{
	$delete_customer="delete from customers
	where customer_email='$user'";
	$run_del=mysql_query($delete_customer);
	if($run_del==0)
	echo "<script>alert('We are really sorry your account is deleted'
)</script>";	
	echo "<script>window.open('../index.php','_self')</script>";
}
else if(isset($_POST['no']))
{
	echo "<script>alert('Don\'t joke again'
)</script>";	
	echo "<script>window.open('my_account.php','_self')</script>";
}

?>