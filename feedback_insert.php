<?php 
  include "configure.php"; 
    if (isset($_POST['fid'])){ 
      $fid = $_POST['fid'];
      $fc = $_POST['fc'];
        $cid = $_POST['cid'];
     
      $sql_statement ="INSERT INTO feedback(fid,fcontent) VALUES( $fid ,'$fc')";
      $result = mysqli_query($db, $sql_statement);
      echo "result is :".$result;


      $sql_statement ="INSERT INTO gives(cid,fid) VALUES( $cid ,$fid)";
      $result = mysqli_query($db, $sql_statement);


      header ("Location: feedback.php");
      }

  ?>