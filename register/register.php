<style>
#vhod1 {color:white;}
</style>
<?php include("/includes/header.php"); ?>
<?php
mysql_connect('localhost','root','') or die(mysql_error());  
	mysql_select_db('knigblog') or die("���� ��'���� � �����");
    mysql_set_charset("CP1251");
?>
<?php
if(isset($_POST["register"])){ 
if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) { 
	$email=$_POST['email'];
    $username=$_POST['username'];
	$password=md5($_POST['password']);	
	$query=mysql_query("SELECT * FROM users WHERE username='".$username."'"); // ������� �������� � ����
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO users (email, username,password) VALUES('$email' , '$username' , '$password')"; // ������� ��������� ���� ������ �� ������ ���� ��� �� �� ���� ����
	$result=mysql_query($sql);
	if($result){
	 $message = "�� ������ ��������������! �������� <a id='vhod1' href='login.php'>�����</a>";
	} else {
	 $message = "�� ������� �������� ���!";
	}

	} else {
	 $message = "��� ����������� ��� ����!";
	}

} else {
	 $message = "�� ���� ����'����� ��� ����������!";
}
}
?>
<?php if (!empty($message)) {echo "<p class=\"error\">" . $message . "</p>";} ?>
<div class="container mregister">
			<div id="login">
	<h1>���������</h1>
<form name="registerform" id="registerform" action="register.php" method="post">
	<p><label for="user_pass">����<br />
		<input type="text" name="username" id="username" class="input" value="" size="20" /></label></p>
		<p><label for="user_pass">E-mail<br/>
		<input type="email" name="email" id="email" class="input" value="" size="32" /></label></p>
	<p><label for="user_pass">������<br />
		<input type="password" name="password" id="password" class="input" value="" size="32" /></label></p>	
		<p class="submit"><input type="submit" name="register" id="register" class="button" value="���������" /></p>
	<p class="regtext">��� � �������? <a href="login.php">�����</a></p>
</form>
	</div>
	</div>