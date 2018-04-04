<?php require("register/includes/connection.php");?>
<?php include("content/header.php"); ?>
	<body>
	  <!-- шапка и текст -->
	<div id="templatemo_body_wrapper">
	<div id="templatemo_wrapper">
	    <div id="templatemo_header">
	        <div id="site_title">
	            <a target="_parent">Книжковий
	            	<span>Блог</span>				
	            </a>
	        </div> 
	        <div class="cleaner"></div>
	    </div>
  <!-- меню -->
<?php include("content/menu.php"); ?> 
		<!-- Конец меню -->
	    <!-- Контент на главной странице -->
	    <div id="templatemo_main">
	        <div id="templatemo_content">
	        	<div class="post_box">
	             <h4>За пропозиціями або питаннями звертатися за контактами:</h4>
                <p><img src="images/skype.png" style="width:15px;height:15px;"> <b>artem1999201234</b>
				<br>
				<img src="images/mail.png" style="width:15px;height:15px;"> <b>udyk13@mail.ru</b>
				<br>
				<img src="images/google.jpg" style="width:15px;height:15px;"> <b>bombopedroua@gmail.com</b></p><br>
				 <h4>Інформація для відвідувачів:</h4>
				 <p>Щоб залишити повідомлення адміністрації необхідно зареєструватись</p><br>
				 <h4> Юридична інформація:</h4>
				 <p>ООО «Седляр Артем Віталійович»
Юр. адреса:201999, Україна, Чернігів, д.53, стор.37 свідоцтва про Державну реєстрацію 1147746441963 ІПН +380935039351</p><br>
<h4>Наш Офіс:</h4>
<p>Україна, м. Чернігів, Чернігівська, Одинцова, Шевченка 53У, зал 1, 2-й поверх, д. 20</p><br>
<?PHP if(!isset($_SESSION["session_username"])){ ?>
<?PHP }else{ ?>
<h4>Зв'язатися з адміністрацією блогу по @EMAIL:</h4>
<?
$sitename = "knigblog.ua";
if (isset ($_POST['message'])) {
  mail ("udyk13@mail.ru",
        "Вам прийшло нове повідомлення з вашого блогу : ".$sitename,
        "Логiн: ".$_POST['name']."\nПовне iм'я: ".$_POST['name_full']."\nEmail: ".$_POST['contact']."\nПовідомлення: ".$_POST['message']);
  echo "<div id='podv' style='color:green'>Повідомлення успішно відправлено!<br><a style='color:red; text-decoration:none' href='info.php?f=news&mod=add'>Оновити</a></div>";
}
?>
<form method="POST" id="feedback-form">
Логін:
<input type="text" name="name" required placeholder="Ваш логiн на сайтi?"/>
Повне iм'я:
<input type="text" name="name_full" required placeholder="Як вас звуть?"/>
E-mail для зв'язку:
<input type="email" name="contact" required placeholder="Вашу електронну адресу?"/>
Ваше повідомлення:
<textarea name="message" required rows="5" placeholder="Побажання, пропозиції..." /></textarea>
<input id="bt" type="submit" value="Надіслати">
</form>
<?PHP } ?>
	          </div>
	        </div>
	<!-- Контент на главной странице -->
	       	<!-- Бар с права для информации -->
<?php include("content/bar.php"); ?>
	    	<div class="cleaner"></div>
	    </div>
	</div>
	<div class="cleaner"></div>
	</div>
	 <!-- Бар с права для информации -->
<?php include("content/footer.php"); ?> 	  <!-- футер -->
<?php include("content/copi.php"); ?>    	  <!-- копирайт -->