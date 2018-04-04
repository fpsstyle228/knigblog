<?php
function activemenu($activemenu)
{
    $menuitem = basename($_SERVER['SCRIPT_NAME']);  //суперглобальный массив с информацие где будет наш стайл.заголовок
    if ($activemenu == $menuitem) { 
        return "style=\"color: red;background-color: white;\""; 
    }
}
?>
<div id="templatemo_menu">
            <ul>    
                <li><a <?=activemenu("index.php")?> href="index.php">Головна</a></li>
				<li><a <?=activemenu("novini.php")?> href="novini.php">Новини</a></li>
                <li><a <?=activemenu("info.php")?> href="info.php">О сайті</a></li>
            </ul>
			<!-- регистрация -->
			   <div id="register_box">
<?PHP if(!isset($_SESSION["session_username"])){ ?>
Зареєстровані?
<a href="register/register.php" class="new_reg">Реєстрація</a> |
<a href="register/login.php" class="signup">Вхід</a>
<?PHP }else{ ?>
Ласкаво просимо, <img src="images/user.jpg" style="width:10px;height:10px;"> <span><?php echo $_SESSION['session_username'];?>!</span> |
<a href="register/logout.php" class="signup">Вийти</a>
<?PHP } ?>
			<!-- регистрация -->
        </div>
	    </div> 
