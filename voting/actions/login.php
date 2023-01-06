<?php
session_start();
include('connect.php');

$username=$_POST['username'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$std=$_POST['std'];


$sql="select * from userdata where username='$username' and phonenumber='$phonenumber' 
and password='$password'  and standard='$std' ";

$result=mysqli_query($con,$sql);

if(($username or $phonenumber or $password  )==NULL){
    echo'<script>
    alert("Enter proper data ");
    window.location="../index.php"
    </script>';
}
elseif(mysqli_num_rows($result)>0){
     $sql="select username,photo,votes,id from userdata where standard='Group'";
     $resultGroup=mysqli_query($con,$sql);
     if(mysqli_num_rows($resultGroup)>0){
        $Groups=mysqli_fetch_all($resultGroup,MYSQLI_ASSOC);
        $_SESSION['Groups']=$Groups;
     }
     $data=mysqli_fetch_array($result);
     $_SESSION['id']=$data['id'];
     $_SESSION['status']=$data['status'];
     $_SESSION['data']=$data;
     echo'<script>
     window.location="../partials/dashboard.php";
     </script>';
}
else
{
    echo'<script>
    alert("Invalid credentiasl");
    window.location="../";
    </script>';
}

?>
