<?php
  $conn = mysqli_connect("localhost", "root", "leejk1991","webdb");
  $sql = "
  INERT INTO topic(
    title,
    description,
    created
    )
    VALUE(
      'MySQL',
      'MySQL is ...',
      NOW()
      )";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  if($result === false){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo mysqli_error($conn);
  }
  ?>
