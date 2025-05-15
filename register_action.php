<!-- Recebe os dados do formulário, valida e usa a classe User para cadastrar -->

<?php 

require_once 'db.php';
require_once 'Usuario.class.php';

$user = new Usuario($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user->cadastrar($_POST['username'], $_POST['email'], $_POST['password']);
    header('Location: index.php');
    exit;
}

?>