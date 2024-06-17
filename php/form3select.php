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

    $stmt = $pdo->prepare("SELECT * FROM formulario WHERE 1");
    $stmt->execute();
    while ($info = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo("Usuário" . $info["nome"] . " - " . $info["email"] . " comentou:  " . $info["comentario"] . "<br>");
    }

   ?>
</body>
</html>
   