<?php
// Verifica se os dados foram enviados por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Aqui você pode realizar validações adicionais dos dados recebidos, se necessário.

    // Neste exemplo, apenas exibimos os dados recebidos
    echo "Nome: " . $nome . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Telefone: " . $telefone;
}
?>
