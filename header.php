<?
$dbservername = 'localhost';
$dbusername = 'haha020254';
$dbuserpassword = 'whtpdus2735!';
$dbname = 'haha020254';

$conn = mysqli_connect($dbservername,$dbusername,$dbuserpassword,$dbname);
mysqli_set_charset($conn, 'utf8');

if(!$conn){
    die('접속실패');
}
?>