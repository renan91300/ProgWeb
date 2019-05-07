<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Testantdo Conexão</title>
</head>
<body>
    <?php
    include "Conn.php";
    
    $tabela = "user";
    $nome = "João da Silva";
    $email = "joao@gmail.com";
    $senha = "12345";
    $status = 1;
    
    $sql = "INSERT INTO {$tabela}
        (`nome`, `email`, `senha`, `data_criacao`, `status`) VALUES
        (:nome, :email, md5(:senha), NOW(), :status)";
    
    //TRATANDO VALORES A SEREM INSERIDOS
    $conectar = new Conn();
    $cadastrar = $conectar->getConn()->prepare($sql);
    $cadastrar->bindParam(":nome", $nome, PDO::PARAM_STR);
    $cadastrar->bindParam(":email", $email, PDO::PARAM_STR);
    $cadastrar->bindParam(":senha", $senha, PDO::PARAM_STR);
    $cadastrar->bindParam(":status", $status, PDO::PARAM_INT);
    
    if($cadastrar->execute()){
        echo "<p style='color=green'>USUÁRIO CADASTRADO COM SUCESSO!</p>";
    }
    else{
        echo "<p style='color=red'>USUÁRIO NÃO CADASTRADO COM SUCESSO!</p>";
    }
    
    $conectar = new Conn();
    $conectar->getConn();
    
    ?>
</body>
</html>