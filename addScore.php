<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: white;
	background-repeat: no-repeat;		
    font-size: 100%;
	width: 200px;
}
</style>
</head>
<?php
$hostname = "mysql.hostinger.com.br";
$username = "u623005944_user";
$password = "LTe6UxsStMC4eU";
$dbname = "u623005944_db";

$dragonInc = $_POST['dragon'];
$phoenixInc = $_POST['phoenix'];
$griffinInc = $_POST['griffin'];
$unicornInc = $_POST['unicorn'];
$tutor = $_POST['tutor'];

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Verify if table exists
if($conn->query("SELECT * FROM pontuacao") == FALSE){
	echo "Table does not exist<br>";
	$sql = "CREATE TABLE pontuacao (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
		dragon INT(10),	phoenix INT(10), griffin INT(10), unicorn INT(10),	
		tutor CHAR(100), date DATE);";
	if ($conn->query($sql) === TRUE) {
		echo "Table created<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

$date = date(today);
$dragon =  mysqli_fetch_array($conn->query("SELECT `dragon` FROM `pontuacao` ORDER BY id DESC LIMIT 1"));
$phoenix = mysqli_fetch_array($conn->query("SELECT phoenix FROM pontuacao order by id desc limit 1"));
$griffin = mysqli_fetch_array($conn->query("SELECT griffin FROM pontuacao order by id desc limit 1"));
$unicorn = mysqli_fetch_array($conn->query("SELECT unicorn FROM pontuacao order by id desc limit 1"));
$dragon = $dragon[0]+$dragonInc;
$phoenix = $phoenix[0]+$phoenixInc;
$griffin = $griffin[0]+$griffinInc;
$unicorn = $unicorn[0]+$unicornInc;
$sql = "INSERT INTO pontuacao (`dragon`, `phoenix`, `griffin`, `unicorn`, `tutor`, `date`) VALUES ('$dragon', '$phoenix', '$griffin', '$unicorn', '$tutor', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "New score registered<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<body>
	<br><br>
	<div>	
		<table>
			<form action="/score.php" method="post">
			<input type="submit" value="Go to panel">
			</form>
			<br><br>
			<form action="/setScore.html" method="post">
			<input type="submit" value="Set score">
			</form>
			<br><br>
			<form action="/addScore.html" method="post">
			<input type="submit" value="Add score">
			</form>
			<br><br>			
		</table>
	</div>
</body>
</html>
<?php
    if (isset($_POST['publish'])) {
        # Publish-button was clicked
    }
    elseif (isset($_POST['save'])) {
        # Save-button was clicked
    }
?>