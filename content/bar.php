	          <!-- ��� � ����� ��� ���������� -->
	        <div id="templatemo_sidebar">
	        	<div id="aboutus">
	            	<h3>������ ����� �����</h3>
										<?php
	$sql = mysql_query("SELECT * FROM `luch`") or die(mysql_error());
	while($row = mysql_fetch_array($sql)) {	  
?>
<div class="image_fl"><img src="<?php echo $row['img']?>" width="100px"/></div>
<p><?php echo $row['text'];?></p>
<?php } ?>
	          </div>
	            <div class="cleaner_h20"></div>         
			   <!-- ��������� -->
	            <div id="cal1">
	            	<h3>��������</h3>              
<table id="calendar2">
  <thead>
    <tr><td colspan="4"><td colspan="3">
    <tr><td>��<td>��<td>��<td>��<td>��<td>��<td>��
  <tbody>
</table>
<script>
var D1 = new Date(),
    D1last = new Date(D1.getFullYear(),D1.getMonth()+1,0).getDate(), // ��������� ���� ������
    D1Nlast = new Date(D1.getFullYear(),D1.getMonth(),D1last).getDay(), // ���� ������ ���������� ��� ������
    D1Nfirst = new Date(D1.getFullYear(),D1.getMonth(),1).getDay(), // ���� ������ ������� ��� ������
    calendar2 = '<tr>',
    month=["������", "�������", "����", "������", "���", "�������", "������", "������", "��������", "�������", "��������", "�������"]; // 
// ������ ������ �� ������� ��� �������� ������
if (D1Nfirst != 0) {
  for(var  i = 1; i < D1Nfirst; i++) calendar2 += '<td>';
}else{ // ���� ������ ���� ������ �������� �� �����������, �� ��������� 7 ������ ������ 
  for(var  i = 0; i < 6; i++) calendar2 += '<td>';
}
// ��� ������
for(var  i = 1; i <= D1last; i++) {
  if (i != D1.getDate()) {
    calendar2 += '<td>' + i;
  }else{
    calendar2 += '<td id="today">' + i; 
  }
  if (new Date(D1.getFullYear(),D1.getMonth(),i).getDay() == 0) {  // ���� ���� �������� �� �����������, �� ������� ������
    calendar2 += '<tr>';
  }
}
if (D1Nlast != 0) {
  for(var  i = D1Nlast; i < 7; i++) calendar2 += '<td>';
}
document.querySelector('#calendar2 tbody').innerHTML = calendar2;
document.querySelector('#calendar2 thead td:last-child').innerHTML = D1.getFullYear();
document.querySelector('#calendar2 thead td:first-child').innerHTML = month[D1.getMonth()];
</script></br>
 <!-- ��������� JAVA-->
 <!-- ��������� -->
	                <div class="cleaner"></div>
	            </div>
				<div class="sidebar_box">
	            	<h3>� � ���. �����</h3>
	                <ul class="sidebar_menu" >
	                    <li><a target="_blank" href="https://www.facebook.com/"><img src="images/facebook.png" style="width:18px;height:18px;">����������� �� Facebook</a></li>
	                    <li><a target="_blank" href="https://www.vk.com/xelinel32"><img src="images/vimeo.png" style="width:18px;height:18px;">� ��������</a></li>
	                    <li><a target="_blank" href="https://www.twitter.com"><img src="images/twitter_bird.png" style="width:18px;height:18px;">�������� �� ��������</a></li>
	                  	<li><a target="_blank" href="https://www.youtube.com/channel/UCnWUFyLTwOSv4q18G0LQ3rg"><img src="images/youtube.png" style="width:18px;height:18px;">̳� ��������</a></li>
	       		  </ul>
	          </div>
<div class="sidebar_box">
	            	<h3>����� ������</h3>
	                <ul class="sidebar_menu">
					<?php
    // �������� ������ ��������
    // � ����������� �� ��������
    $sql = mysql_query("SELECT * FROM `category`") or die(mysql_error());
    while($row = mysql_fetch_array($sql)){
?>
    <li><a href="/index.php?cat_id=<?php echo $row['id']; ?>">>><?php echo $row['name']; ?></a></li>
<?php }?> 
	       		  </ul>
	          </div>				  
			  
			  			  					<div class="sidebar_box">
<h3>�������</h3>
<img align="center" src="images/reklama.jpg" style="height:230px"></img>
	          </div>
			  <div class="sidebar_box">
<h3>�����</h3>
<form align="center"  method="post" action="search.php" id="feedback-form">
  <input type="search" name="search" placeholder="�� ������?" required/>
  <input type="submit" value="�����"  />
</form>
	          </div>
	        </div>