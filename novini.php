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
function page()
{
    if(empty($_GET["page"])){
        $page = 0;
    } else {
if(!is_numeric($_GET["page"])) die("������������ ������!");
        $page = $_GET["page"];
    }
        return $page;
}
function sql_query($onpage, $page, $table)
{
    $begin = $page*$onpage; // ������ ��������
        $sql = "SELECT * FROM ".$table." LIMIT ".$begin.", ".$onpage;
        $result = mysql_query($sql) or die(mysql_error());
        return $result;
}
function navigation($onpage, $page, $table)
{
        $return = null;
    $count = mysql_query("SELECT COUNT(*) FROM news ORDER BY `id` DESC, `date`") or die(mysql_error());
        $count = mysql_fetch_array($count);
        $count = $count[0];
        $pages = $count/$onpage;
        if($page!==0){
            $prev = '<a href="?page='.($page-1).'"></a>';
        } 
        if($page<round($pages-1)){
           $prev = '<a href="?page='.($page+1).'"></a>';
        } 
        for($i=0;$i<$pages;$i++)
        {
            if($i==$page){
                $return.="<b id='pag'>".($i+1)."</b>";
            } else {
               $return.='<a href="?page='.$i.'"><b id="pag">'.($i+1).'</b></a>';
            }
        }
        return $prev.$return.$next;
}
$onpage = 3; // ������� �� ��������
$table = "news"; // �� ����� �������
$page = page(); // ���������� ��������
$result = sql_query($onpage, $page, $table); // sql - ������
while($data = mysql_fetch_array($result)) // ���� ������
{
?>
       <h2><?php echo $data['title']; ?></h2></br>
	       <div class='news_meta'>����� ������ <i><?php echo $data['author']; ?></i> ,<?php echo $data['date']; ?> </div>
		   <div class="image_wrapper"><img src="images/news.jpg" width="610px" height="130"/></div>
    <p align="justify"><?php echo $data['text']; ?></p><br>
<?php } ?>
<?php $navigation = navigation($onpage, $page, $table); // ��������� ���������
echo $navigation; // ������� ��
?>
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