<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn,'ihost.it.kmitl.ac.th', 'it63070218_it63070218', 'PPVvie84', 'it63070218_Yanisa', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $_POST['ID'];
$sql = "SELECT * FROM guestbook WHERE ID='$ID'";
$res = mysqli_query($conn, $sql);
$comment = mysqli_fetch_array($res);
?>
    <div class="container mt-4">
        <h1>Edit</h1>
        <form action="update.php" method="post" class="mt-4">
            <input type="hidden" name="ID" value=<?php echo $comment['ID'];?>>
   
            <div class="form-group">
                <label for="weight">weight</label>
                <?php
                echo '<input type="text" name="weight" id="weight" class="form-control" placeholder="Enter weight" value="'.$comment["weight"].'">'
                ?>
            </div>
            <div class="form-group">
                <label for="height">height</label>
                <?php
                    echo '<input type="text" name="height" id="height" class="form-control" placeholder="Enter height" value="'.$comment["height"].'">'
                ?>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-outline-success">Save</button>
                <a role="button" class="btn btn-outline-secondary" href="show (2).php">Back to Table</a>
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>