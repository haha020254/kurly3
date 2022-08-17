<?

include_once('./header.php');

//http://haha020254.dothome.co.kr/kurly2/select.php

$sql = "SELECT * FROM kurly2_member_table";
$result = mysqli_query($conn, $sql);

//echo '레코드  개수: '.mysqli_num_rows($result);

$arr = array();

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        array_push($arr, array(
            '번호' => $row['idx'],
            '아이디' => $row['id'],
            '비밀번호' => $row['pw'],
            '이름' => $row['name_'],
            '이메일' => $row['email'],
            '휴대폰' => $row['hp'],
            '주소' => $row['address_'],
            '성별' => $row['gender'],
            '생년월일' => $row['birthday'],
            '추가입력사항' => $row['addinput'],
            '이용약관동의' => $row['service_'],
            '가입일자' => $row['gaib']
        ));
    }
}

  $jsonData = json_encode($arr, JSON_UNESCAPED_UNICODE);

  echo $jsonData;

include_once('./footer.php');
?>