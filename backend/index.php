<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'conexao.php';

$id =  rand(1, 999);
$nome = $_POST["nome"];
$email = $_POST["email"];
$comentarios = $_POST["comentario"];

$query = "INSERT INTO mensagens(id, nome, email, comentarios) VALUES ('$id', '$nome', '$email', '$comentarios');";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>