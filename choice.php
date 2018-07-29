<?php
error_reporting(0);
$user_name='root';
$password='isha';
$database='virtual';
$server='127.0.0.1';


$conn=mysqli_connect($server,$user_name,$password);
$db=mysqli_select_db($conn,$database);
?>
<html>
<head>
<title>Virtual Guide</title>

</script>
<style type="text/css">
</style>
</head>
<body >
<h2 align="center"> The virtual guide</h2>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="sign">
<center>
<table>
<tr>
<td colspan=2>SELECT YOUR CHOICES</td>
</tr>
<tr>
<td><input type="radio" name="Historical">Historical</td>
<td><input type="radio" name="Educational">Educational</td>
</tr>
<td><input type="radio" name="Romantic">Romantic</td>
<td><input type="radio" name="Scenic">Scenic</td>
</tr>
<tr>
<td><input type="radio" name="Research">Research</td>
<td><input type="radio" name="Adventurous">Adventurous</td>
</tr>
<tr>
<td><input type="radio" name="Religious">Religious</td>
</tr>
</table>
<input type="submit" name="submit" value="submit">
<br>
</center>
</form>
<?php
if($_POST['submit']=='submit'){
header('Location: welcome.php');
}
?>
</body>
</html>