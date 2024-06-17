<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 


<?php 

include('db.php');
$nome = $_POST["nome"];
$email = $_POST["email"];
$feedback = $_POST["mensagem"];

$sql = "INSERT INTO feedback (nome, email, comentario) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $email, $feedback]);

echo("seus dados foram  cadastrados corretamente, volte sempre $nome");

echo("$nome");

echo("$feedback");

?>

</body>
</html>
