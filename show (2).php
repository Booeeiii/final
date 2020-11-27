<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>ITF Lab</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070218_it63070218', 'PPVvie84', 'it63070218_Yanisa', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container" align="center">
    <table class="table table-hover">
	<thead class="thead-dark">
    <tr>
        <th width="100"> <div>A</div></th>
        <th width="100"> <div>B</div></th>
        <th width="100"> <div>C</div></th>
	<th width="100"> <div>Action</div></th>

    </tr>
	</thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['A'];?></div></td>
    <td><?php echo $Result['B'];?></td>
    <td><?php echo $Result['C'];?></td>
    <td>
	<form action="delete.php" method="post" class="d-inline">
                <input type="hidden" name="ID" value=<?php echo $Result['ID'];?>>
                <button type="submit" class="btn btn-outline-danger">Del</button>
        </form>
    </td>
   
  </tr>
<?php
}
?>
</table>
	<a href="form.html"><input type="button" class="btn btn-outline-info" value="Back to Input"></a>
</div>
<?php
mysqli_close($conn);
?>

 

</body>
</html>