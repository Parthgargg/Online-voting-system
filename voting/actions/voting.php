<?php
session_start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$sql="update userdata set votes='$totalvotes' where id= $gid";
$sql2="update userdata set status=1 where id='$uid' ";

$updatevotes=mysqli_query($con,$sql);
$updatestauts=mysqli_query($con,$sql2);

if($_SESSION['status']==1){
    echo'<script>
    alert("Already voted");
    window.location="../partials/dashboard.php";
    </script>';
}elseif($updatevotes and $updatestauts ){
   $getGroups=mysqli_query($con,"select username,photo,votes,id from userdata where standard='group'");
   $Groups=mysqli_fetch_all($getGroups,MYSQLI_ASSOC);
   $_SESSION['Groups']=$Groups;
   $_SESSION['status']=1;
   echo'<script>
    alert("Voting successful");
    window.location="../partials/dashboard.php";
    </script>';
}else{
    echo'<script>
    alert("Technical fault ! Try later");
    window.location="../partials/dashboard.php";
    </script>';
}

?>