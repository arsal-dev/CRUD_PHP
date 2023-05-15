<?php 

    include './db_connect.php';

    $id = $_GET['id'];


    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    $arr = ['id' => '', 'name' => '', 'email' => '', 'password' => ''];

    while($row = $result->fetch_assoc()){
        $arr['id'] = $row['id'];
        $arr['name'] = $row['name'];
        $arr['email'] = $row['email'];
        $arr['password'] = $row['password'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <form action="./update_post.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $arr['name'] ?>" class="form-control" id="name" placeholder="Name">
            </div>
            <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $arr['email'] ?>" class="form-control" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" value="<?php echo $arr['password'] ?>" class="form-control" id="password" placeholder="password">
            </div>
            <input type="submit" value="update" name="update" class="btn btn-primary mt-2">
        </form>
    </div>

</body>
</html>