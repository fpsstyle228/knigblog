<?php require("register/includes/connection.php");?>
<?php include("content/header.php"); ?>
	<body>
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
	             <h4>�� ������������ ��� ��������� ���������� �� ����������:</h4>
                <p><img src="images/skype.png" style="width:15px;height:15px;"> <b>artem1999201234</b>
				<br>
				<img src="images/mail.png" style="width:15px;height:15px;"> <b>udyk13@mail.ru</b>
				<br>
				<img src="images/google.jpg" style="width:15px;height:15px;"> <b>bombopedroua@gmail.com</b></p><br>
				 <h4>���������� ��� ����������:</h4>
				 <p>��� �������� ����������� ����������� ��������� ��������������</p><br>
				 <h4> �������� ����������:</h4>
				 <p>��� ������� ����� ³���������
��. ������:201999, ������, ������, �.53, ����.37 �������� ��� �������� ��������� 1147746441963 ��� +380935039351</p><br>
<h4>��� ����:</h4>
<p>������, �. ������, ����������, ��������, �������� 53�, ��� 1, 2-� ������, �. 20</p><br>
<?PHP if(!isset($_SESSION["session_username"])){ ?>
<?PHP }else{ ?>
<h4>��'������� � ������������ ����� �� @EMAIL:</h4>
<?
$sitename = "knigblog.ua";
if (isset ($_POST['message'])) {
  mail ("udyk13@mail.ru",
        "��� ������� ���� ����������� � ������ ����� : ".$sitename,
        "���i�: ".$_POST['name']."\n����� i�'�: ".$_POST['name_full']."\nEmail: ".$_POST['contact']."\n�����������: ".$_POST['message']);
  echo "<div id='podv' style='color:green'>����������� ������ ����������!<br><a style='color:red; text-decoration:none' href='info.php?f=news&mod=add'>�������</a></div>";
}
?>
<form method="POST" id="feedback-form">
����:
<input type="text" name="name" required placeholder="��� ���i� �� ����i?"/>
����� i�'�:
<input type="text" name="name_full" required placeholder="�� ��� �����?"/>
E-mail ��� ��'����:
<input type="email" name="contact" required placeholder="���� ���������� ������?"/>
���� �����������:
<textarea name="message" required rows="5" placeholder="���������, ����������..." /></textarea>
<input id="bt" type="submit" value="��������">
</form>
<?PHP } ?>
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