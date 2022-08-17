<?
//http://haha020254.dothome.co.kr/kurly2_/
include_once('./header.php');

$userId = $_POST['userId'];
$userPw = $_POST['userPw'];

$sql = "SELECT * FROM kurly2_member_table";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        if($userId==$row['id'] && $userPw == $row['pw']){
            setcookie('userId', $row['id'], time()+(60*60*1), '/');
            // setcookie('userName', $row['name_'], time()+(60*60*24*3), '/');

            $json_data = '{"아이디":"'.$row['id'].'", "이름":"'.$row['name_'].'"}';
        }
    }
}


echo $json_data;

include_once('./footer.php');
?>