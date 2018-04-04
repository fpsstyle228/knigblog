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
<?php
	// если в урле ни чего не передалось, 
	// то напишем что новость не нашлась
	if(isset($_GET['id'])){
		$sqlquery = "
			SELECT * FROM `statia` 
				WHERE `id` = ".$_GET['id'].";
		";
		$sql = mysql_query($sqlquery) or die(mysql_error());
		while($row = mysql_fetch_array($sql)){
?>
<h2><?php echo $row['title']; ?></h2></br>
<div class='news_meta'>Автор статті <i>knigblog.ua</i> ,<?php echo $row['date']; ?> </div>
	<div class="image_wrapper"><img src="<?php echo $row['img']; ?>" width="140px"/></div>
	<table id="table1" align="right">
	<tr><td><ins>Автор книги:</ins> <a target="_blank" href="<?php echo $row['author_url']; ?>"><?php echo $row['author']; ?></td></tr>
	<tr><td><ins>Рік:</ins> <?php echo $row['god']; ?></td></tr>
	    <tr><td><ins>Жанр:</ins> <?php echo $row['janr']; ?></td></tr>
	   <tr><td><ins>Листів:</ins> <?php echo $row['stranic']; ?></td></tr>
</table><br>
<?PHP if(!isset($_SESSION["session_username"])){ ?><p><b>Для того щоб читати статтю повнiстю, будь ласка авторизуйтесь!</b></p><br><?PHP }else{ ?>
<b>О книзі:</b><br>
<p align="justify"><?php echo $row['text']; ?></p><br>
<p><strong>Прочитати книгу можна перейшовши за посиланням:<a class="continue" target="_blank" href="<?php echo $row['href']; ?>"> Читати!</a></strong></p><br>
<?php } ?>
<?php 
		}
	}else{
		echo "книги немає ";
	}
?>
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