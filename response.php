<?
//http://haha020254.dothome.co.kr/kurly2/

include_once('./header.php');

$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$addinput = $_POST['addinput'];
$service = $_POST['service'];
$gaib = $_POST['gaib'];

$sql = "INSERT INTO kurly2_member_table (id, pw, name_, email, hp, address_, gender, birthday, addinput, service_, gaib) 
VALUES('$id', '$pw', '$name', '$email', '$hp', '$address', '$gender', '$birthday', '$addinput', '$service', '$gaib')";

$result = mysqli_query($conn, $sql);


include_once('./footer.php');
?>


