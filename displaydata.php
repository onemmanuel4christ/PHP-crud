<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>   
<body>
    <div class="container my-5">
        <button class="btn btn-primary" >
            <a href="user.php" class="text-light">Add User</a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $sql="select * from `crud`";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                 $id=$row['id'];
                 $name=$row['name'];
                 $email=$row['email'];
                 $mobile=$row['mobile'];
                 $password=$row['password'];
                 echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                        <button class="btn btn-warning">
                            <a href="update.php?updateid='.$id.'" class="text-light">Update</a>
                        </button>
                        <button class="btn btn-danger">
                            <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                        </button>
                    </td>
                    </tr>';
            }
        }
    ?>
    
    
  </tbody>
</table>
    </div>
</body>
</html>