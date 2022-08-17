<?
include_once('./header.php');

$userId = $_POST['userId'];
$userPw = $_POST['userPw'];

$sql = "SELECT * FROM kurly2_member_table";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $json_data = '';
    while($row = mysqli_fetch_array($result)){
        if($row['id']== $userId && $row['pw']== $userPw){
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name_'];
            $session_id = session_id();

            $json_data = '{"세션":"'.$session_id.'", "아이디":"'.$row['id'].'", "이름":"'.$row['name_'].'"}';
        }
    }
}

echo $json_data;

include_once('./footer.php');
?>