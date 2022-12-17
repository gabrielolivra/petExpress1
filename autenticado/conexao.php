<?php 
$conn = new mysqli('localhost','root','','petexpress');
if($conn->connect_errno){
die('falha na conexao com o bd: ('.$conn->mysql_errno.') '.$conn->mysql_errno);

}
?>