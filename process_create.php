<?php
$conn = mysqli_connect('localhost','root','leejk1991','webdb');
$sql ="
  INSERT INTO topic
  (title, description, created)
  VALUE(
    '{$_POST['title']}',
    '{$_POST['description']}',
    NOW()
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo "<p>";
  echo "다시 도전해보세요!";
  echo "</p>";
} else{
  echo "<p>";
  echo "참 잘했어요. <p><a href='index.php'>돌아가기</a></p>";
  echo "</p>";
}
echo $sql;
?>
