<?php
$hostname = "mysql.hostinger.com.br";
$username = "u623005944_user";
$password = "LTe6UxsStMC4eU";
$dbname = "u623005944_db";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Verify if table exists
if($conn->query("SELECT * FROM pontuacao") == FALSE){
	echo "Tabela inexistente<br>";
	$sql = "CREATE TABLE pontuacao (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
		dragon INT(10),	phoenix INT(10), griffin INT(10), unicorn INT(10),	
		tutor CHAR(100), date DATE);";
	if ($conn->query($sql) === TRUE) {
		echo "Tabela criada<br>";
	} else {
		echo "Erro: " . $sql . "<br>" . $conn->error;
	}	
}

$date = date(today);
$tutor = 'Daniel';
$dragon =  mysqli_fetch_array($conn->query("SELECT `dragon` FROM `pontuacao` ORDER BY id DESC LIMIT 1"));
$phoenix = mysqli_fetch_array($conn->query("SELECT phoenix FROM pontuacao order by id desc limit 1"));
$griffin = mysqli_fetch_array($conn->query("SELECT griffin FROM pontuacao order by id desc limit 1"));
$unicorn = mysqli_fetch_array($conn->query("SELECT unicorn FROM pontuacao order by id desc limit 1"));
$sql = "INSERT INTO pontuacao (`dragon`,`phoenix`,`griffin`,`unicorn`, `tutor`, `date`) VALUES ('$dragon[0] ', '$phoenix[0]', '$griffin[0]', '$unicorn[0]', '$tutor', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>