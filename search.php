<?php require("register/includes/connection.php");?>
<?php include("content/header.php"); ?>
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
if(isset($_POST["search"])){ 
$search = mysql_real_escape_string($_POST['search']);
$res = mysql_query("SELECT `id`,`title`,`date`,`img`,`author_url`,`author`,`god`,`janr`,`stranic`,`small_text` from `statia` where `title` like '%".$_POST['search']."%'");
echo "<h4>Результати пошуку:</h4>";
while($row=mysql_fetch_array($res))
{
?>
	   <h2><?php echo $row['title']; ?></h2></br>
	<div class='news_meta'>Автор статті <i>knigblog.ua</i> ,<?php echo $row['date']; ?> </div>
	<div class="image_wrapper"><img src="<?php echo $row['img']; ?>" width="140px"/></div>
	<table id="table1" align="right">
	<tr><td><ins>Автор книги:</ins> <a target="_blank" href="<?php echo $row['author_url']; ?>"><?php echo $row['author']; ?></td></tr>
	<tr><td><ins>Рік:</ins> <?php echo $row['god']; ?></td></tr>
	    <tr><td><ins>Жанр:</ins> <?php echo $row['janr']; ?></td></tr>
	   <tr><td><ins>Листів:</ins> <?php echo $row['stranic']; ?></td></tr>
</table>
	<p align="justify"><?php echo $row['small_text']; ?>
	<?PHP if(!isset($_SESSION["session_username"])){ ?><p><b>Для того щоб читати статтю повнiстю, будь ласка авторизуйтесь!</b></p><br><?PHP }else{ ?><a href="/news.php?id=<?php echo $row['id']; ?>" class="continue">Продовжити...</a></p></br><?php } ?>
<?php } } ?>
 <div class="cleaner"></div>
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