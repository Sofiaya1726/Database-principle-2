<!-- 王翊冉-->
<?php
include_once dirname(dirname(dirname(dirname(__FILE__))))."/config.php";

  

    if(!empty($_POST['review'])){
    $r=$_POST['review'];
    $id=$_POST['id'];
    $sql="update proofread set review ='{$r}' where id ={$id}";
  
    $res=$conn->query($sql);
    if($res){
echo "<script>alert('译文成功');location.href='./PM_TrComment.php'</script>";die;
    }
}

?>