<?php


header('Content-Type: text/html; charset=UTF-8');
$entered_text = $_GET["q"];
if(strlen($entered_text)>1)
{
$verbsArray=array('make','do','forget',"делать");

// Файл firstsql.php  
$host='mysql.hostinger.com.ua'; // имя хоста (уточняется у провайдера)  
$database='u875308217_ir'; // имя базы данных, которую вы должны создать  
$user='u875308217_admin'; // заданное вами имя пользователя, либо определенное провайдером 
 $pswd='88777!@bdverbs'; // заданный вами пароль    
 $dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL."); 
 mysql_select_db($database) or die("Не могу подключиться к базе."); 
 $query = "SELECT * FROM `forms_of_verbs` where First_form like '%".$entered_text."%' OR Second_form like '%".$entered_text."%' OR Third_form like '%".$entered_text."%' OR Translate like '%".$entered_text."%'";
 
  $res = mysql_query($query); 
 ?>
 <br>
 <table cellspacing="1" align="center" style="width:456px; font-size:18px; border-style:hidden; border-color:#FFF;">
  <tr>
  <th width="114" background="img/first_cell.png">I</th>
  <th width="114" background="img/second_cell.png">II</th>
  <th width="114" background="img/first_cell.png">III</th>
  <th width="144" background="img/second_cell.png">Перевод</th>
   </tr>

  <?
 
while($row = mysql_fetch_array($res)) 
 { 
 ?>
<tr align="center">
<td background="img/first_cell.png"><? echo $row['First_form'];?> </td>  
<td background="img/second_cell.png"><? echo $row['Second_form'];?> </td>  
<td background="img/first_cell.png"><? echo $row['Third_form'];?></td> 
<td background="img/second_cell.png"><? echo $row['Translate'];?></td> 
</tr>
<? }} ?>
</table>
<br>