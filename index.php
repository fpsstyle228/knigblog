<?php require("register/includes/connection.php");?>
<?php include("content/header.php"); ?>
	  <!-- ����� � ����� -->
	<div id="templatemo_body_wrapper">
	<div id="templatemo_wrapper">
	    <div id="templatemo_header">
	        <div id="site_title">
	            <a target="_parent">���������
	            	<span>����</span>				
	            </a>
	        </div>	
	        <div class="cleaner"></div>
	    </div>
	    <!-- ���� -->
<?php include("content/menu.php"); ?> 
		<!-- ����� ���� -->
	    <!-- ������� �� ������� �������� -->
	    <div id="templatemo_main">
	        <div id="templatemo_content">
	        	<div class="post_box">
<?php
	if(isset($_GET['cat_id'])){
		$sqlquery = "SELECT * FROM `statia` WHERE `id_category` = ".$_GET['cat_id']."";
	}else{
		$sqlquery = "SELECT * FROM `statia` ORDER BY `id` DESC, `date`";
	}
	$sql = mysql_query($sqlquery) or die(mysql_error());
	while($row = mysql_fetch_array($sql)){
?>
	<h2><?php echo $row['title']; ?></h2></br>
	<div class='news_meta'>����� ����� <i>knigblog.ua</i> ,<?php echo $row['date']; ?> </div>
	<div class="image_wrapper"><img src="<?php echo $row['img']; ?>" width="140px"/></div>
	<table id="table1" align="right">
	<tr><td><ins>����� �����:</ins> <a target="_blank" href="<?php echo $row['author_url']; ?>"><?php echo $row['author']; ?></td></tr>
	<tr><td><ins>г�:</ins> <?php echo $row['god']; ?></td></tr>
	    <tr><td><ins>����:</ins> <?php echo $row['janr']; ?></td></tr>
	   <tr><td><ins>�����:</ins> <?php echo $row['stranic']; ?></td></tr>
</table>
	<p align="justify"><?php echo $row['small_text']; ?>
	<?PHP if(!isset($_SESSION["session_username"])){ ?><p><b>��� ���� ��� ������ ������ ����i���, ���� ����� �������������!</b></p><br><?PHP }else{ ?><a href="/news.php?id=<?php echo $row['id']; ?>" class="continue">����������...</a></p></br><?php } ?>
<?php } ?>
	             <div class="cleaner"></div>
	          </div>
	        </div>
	<!-- ������� �� ������� �������� -->
	<!-- ��� � ����� ��� ���������� -->
<?php include("content/bar.php"); ?>
	    	<div class="cleaner"></div>
	    </div>
	</div>
	<div class="cleaner"></div>
	</div>
	 <!-- ��� � ����� ��� ���������� -->
<?php include("content/footer.php"); ?> 	  <!-- ����� -->
<?php include("content/copi.php"); ?>    	  <!-- �������� -->
