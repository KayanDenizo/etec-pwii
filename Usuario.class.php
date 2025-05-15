<!-- Classe PHP que representa o usuário e faz operações no banco. -->

<?php 

class Usuario {
    private $pdo;
    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($username, $email, $password) {

        // Cria a consulta SQL (query)
        $sql = "INSERT INTO usuarios(username, email, password) VALUES (:username, :email, :password)";
        // Passa a consulta para o metodo prepare do PDO
        $stmt = $this->pdo->prepare($sql);
        // Para cada apelido um valor correspondente
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
        // Executa o comando
        return $stmt->execute();


    }


}

?>