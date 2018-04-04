<?php require("includes/connection.php"); ?>
<?php include("/includes/header.php"); ?>
<?php
if(isset($_SESSION["session_username"])){ 
//  проверяем сессию
echo "<script>window.location = '../index.php';</script>";
}
if(isset($_POST["login"])){ 
if(!empty($_POST['username']) && !empty($_POST['password'])) { 
    $username=$_POST['username'];
    $password=md5($_POST['password']); 
    $query =mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'"); 

    $numrows=mysql_num_rows($query); //Возвращаем количество рядов результата запроса
    if($numrows!=0) // если масив не равен 0 то 
    {
    while($row=mysql_fetch_assoc($query)) //Возвращаем ряд результата запроса в качестве ассоциативного массива
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }
    if($username == $dbusername && $password == $dbpassword)
    {
    $_SESSION['session_username']=$username;
 //Перенаправление браузера 
	//  session_start();
    echo "<script>window.location = '../index.php';</script>";
    }
    } else {
 $message =  "Неправильний логін або пароль!";
    }
} else {
    $message = "Всі поля обов'язкові для заповнення!";
}
}
?>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . $message . "</p>";} ?>
    <div class="container mlogin">
            <div id="login">
    <h1>Вхід на сайт</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p><label for="user_login">Логін<br>
        <input type="text" name="username" id="username" class="input" value="" size="20" /></label></p>
    <p><label for="user_pass">Пароль<br />
        <input type="password" name="password" id="password" class="input" value="" size="20" /></label></p>
        <p class="submit"><input type="submit" name="login" class="button" value="Увійти" /></p>
        <p class="regtext">Немає аккаунту? <a href="register.php" >Реєстрація</a> | <a href="../index.php" >На головну</a></p>
</form>
    </div>
    </div>
	
	
	