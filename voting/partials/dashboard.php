<?php
session_start();
if(isset($_SESSION['id'])){
    header('location../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">VOTED</b>';
}
else{
    $status='<b class="text-danger"> NOT VOTED</b>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> VOTING SYSTEM-DASHBOARD</title>
    <!--bootstrap--css link --->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!--css file-->
<link rel="stylesheet" href="../style.css" class="css">
</head>
<body class="bg-image px-5"
  style="background-repeat:no-repeat;
  background-image: url('https://media.wcnc.com/assets/WCNC/images/d9d729b9-0c4e-4e14-bfef-d31d5765ae1a/d9d729b9-0c4e-4e14-bfef-d31d5765ae1a_1920x1080.jpg');width: 1500px;">  
    <div class="container ">
     <a href="../" class="">  
        <input type="submit" class= "btn btn-dark my-4 m-auto px-3" name="back" value= "BACK" >   
    </a><br>
   <h1 class="my-3 text-center mx-1"><u>VOTING SYSTEM</u></h1>
   <div class="row my-5">
    <div class="col-md-7">
        <?php
        if(isset( $_SESSION['Groups'])){
           $Groups=$_SESSION['Groups'];
            for($i=0;$i<count($Groups);$i++){
                ?>
                <!--groups-->
                <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php echo $Groups[$i]['photo'] ?>" alt="Group image" class="">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-warning h5"> <b>Group Name:</b></strong>
                        <?php echo $Groups[$i]['username'] ?>
                        <br><br>
                        <strong class="text-warning h5"> <b>Votes:</b> </strong>
                        <?php echo $Groups[$i]['votes'] ?>
                    </div>
                </div>
               
                <form action="../actions/voting.php" method='POST' class="">
                    <input type="hidden" name="groupvotes" value=" <?php echo $Groups[$i]['votes'] ?>">
                    <input type="hidden" name="groupid" value=" <?php echo $Groups[$i]['id'] ?>">

                    <?php
                    if($_SESSION['status']==1){
                        ?>
                        <button class="bg-success my-3 text-white px-3">Voted</button>
                        <?php
                        }
                        else{
                            ?>
                            <button class="bg-danger my-3 text-white px-3 " type ="submit">Vote
                            </button><?php
                        }
                    ?>
                </form>  
                <hr>
                <?php
        
            }
        }
        else{
            ?>
            <div class="container">
                <p>No groups to display</p>
            </div><?php
        }
        ?>
    </div>
    <div class="col-md-5">
        <!--user area-->
        <img src="../uploads/<?php echo $data['photo'] ?>" alt="user image" class=""><br><br>
        <strong class="text-warning h5"><b>Name:<b></strong>
        <?php
        echo $data['username'];
        ?><br><br>
         <strong class="text-warning  h5"><b>Phone number:</b></strong>
         <?php
        echo $data['phonenumber'];
        ?><br><br>
        <strong class="text-warning h5"><b>Status:<b></strong>
        <?php
        echo $status;
        ?><br><br>
    </div>
   </div>
    <a href="logout.php" class="">  
    <input type="submit" class= "btn btn-dark my-4 m-auto px-3" name="logut" value= "LOG OUT" >   
    </a>
    </div>
    
</body>
</html>