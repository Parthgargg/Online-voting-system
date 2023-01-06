<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>VOTING SYSTEM REGISTRATION </title>
    <!--bootstrap--css link --->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-image px-5"
  style="background-repeat:no-repeat;
  background-image: url('https://media.wcnc.com/assets/WCNC/images/d9d729b9-0c4e-4e14-bfef-d31d5765ae1a/d9d729b9-0c4e-4e14-bfef-d31d5765ae1a_1920x1080.jpg');width: 1500px;">

    <h1 class="text-info text-center p-4 text-dark">VOTING SYSTEM </h1>  
    <div class="bg-info py-4">
        <h2 class="text-center">REGISTER ACCOUNT</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
              <input type="text" class="form-control w-50 m-auto " name="username" placeholder="Enter your name " require="required">
              </div>
              <div class="mb-3">
              <input type="text" class="form-control w-50 m-auto " name="phonenumber" placeholder="Enter your phone number  " require="required" 
              maxlength="10" minlength="10" >
            </div>
            <div class="mb-3">
              <input type="password" class="form-control w-50 m-auto " name="password" placeholder="Enter your password  " require="required"  >
            </div>
            <div class="mb-3">
              <input type="password" class="form-control w-50 m-auto " name="cpassword" placeholder="Confirm password " require="required"  >
            </div>
            <div class="mb-3">
              <input type="file" class="form-control w-50 m-auto " name="photo" placeholder="Choose a file " require="required"  >
            </div>
            <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option value="Group" >Group</option>
                    <option value="Voter" >Voter</option>
                </select>
                </div>
              <input type="submit" class= "btn btn-dark my-4 m-auto" value="REGISTER" name="register">
            <p class="h4">Already have an account ? <a href="../" >Login here </a></p><br>
            <h8>copyright@jiit2022</h8>
            </form>
            <script>
                </script>
        </div>
    </div>
</body>
</html>
