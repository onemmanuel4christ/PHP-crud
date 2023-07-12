 
<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $name =  $row['name'];
    $email =  $row['email'];
    $mobile =  $row['mobile'];
    // $password =  $row['password'];
    
if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $mobile =  $_POST['mobile'];
    $password =  $_POST['password'];
    $sql= "update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Updated Successfully";
        header('location:displaydata.php'); 
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
<form method="post">
  <div class="mb-3 ">
    <label>Enter Your Name</label>
    <input type="text" name="name" value=<?php echo $name; ?> class="form-control" placeholder="Enter your Name" autocomplete="off" >
  </div>
   <div class="mb-3 ">
    <label>Enter Your Email</label>
    <input type="email" name="email" value=<?php echo $email; ?>   class="form-control" placeholder="Enter your Email" autocomplete="off">
  </div>
   <div class="mb-3 ">
    <label>Enter Your Mobile</label>
    <input type="tel" name="mobile" value=<?php echo $mobile; ?>  class="form-control" placeholder="Enter your Mobile" autocomplete="off">
  </div>
   <div class="mb-3 ">
    <label>Enter Your Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter your Password" autocomplete="off">
  </div>
  <button name="submit" class="btn btn-primary">Update</button>
</form>
    </div>
  </body>
</html>