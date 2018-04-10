<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","","demos");
    $query=mysqli_query($con, "select * from cfg_demos where title LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>
