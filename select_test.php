<?

include_once('./header.php');

//http://haha020254.dothome.co.kr/kurly2/select.php

$sql = "SELECT * FROM kurly2_member_table";
$result = mysqli_query($conn, $sql);

echo '레코드  개수: '.mysqli_num_rows($result);

$arr = array();

array_push($arr, array(
    '번호' => '1',
    '아이디' => 'haha020254',
    '비밀번호' => 'whtpdus2735!',
    '이름' => '조세연',
    '이메일' => 'haha020254@naver.com',
    '휴대폰' => '01051886608',
    '주소' => '서울시 강남구 강남대로 256',
    '성별' => '여자',
    '생년월일' => '1996-10-12',
    '추가항목' => 'Esther',
    '이용약관동의' => '필수동의1,필수동의2,필수동의3',
    '가입일자' => '2020-08-08'
  ));

  $jsonData = json_encode($arr, JSON_UNESCAPED_UNICODE);

  echo $jsonData;

include_once('./footer.php');
?>