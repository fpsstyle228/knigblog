<?php
function activemenu($activemenu)
{
    $menuitem = basename($_SERVER['SCRIPT_NAME']);  //��������������� ������ � ���������� ��� ����� ��� �����.���������
    if ($activemenu == $menuitem) { 
        return "style=\"color: red;background-color: white;\""; 
    }
}
?>
<div id="templatemo_menu">
            <ul>    
                <li><a <?=activemenu("index.php")?> href="index.php">�������</a></li>
				<li><a <?=activemenu("novini.php")?> href="novini.php">������</a></li>
                <li><a <?=activemenu("info.php")?> href="info.php">� ����</a></li>
            </ul>
			<!-- ����������� -->
			   <div id="register_box">
<?PHP if(!isset($_SESSION["session_username"])){ ?>
�����������?
<a href="register/register.php" class="new_reg">���������</a> |
<a href="register/login.php" class="signup">����</a>
<?PHP }else{ ?>
������� �������, <img src="images/user.jpg" style="width:10px;height:10px;"> <span><?php echo $_SESSION['session_username'];?>!</span> |
<a href="register/logout.php" class="signup">�����</a>
<?PHP } ?>
			<!-- ����������� -->
        </div>
	    </div> 
