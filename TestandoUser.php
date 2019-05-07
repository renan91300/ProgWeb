<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Testantdo User</title>
</head>
<body>
    <?php
    include "User.php";

    $nome = "João da Silva";
    $idade = 29;
    $peso = 89;
    $altura = 1.76;

    $pessoaUm = new User();
    $pessoaUm->setUser($nome, $idade, $peso, $altura);
    
    echo $pessoaUm->getUser();
    echo "<br/>";
    echo "IMC antes: ". $pessoaUm->getImc();
    
    $pessoaDois = clone $pessoaUm;
    $pessoaDois->setIdade(35);
    $pessoaDois->setPeso(75);
    
    echo "<hr/>";
    echo $pessoaDois->getUser();
    echo "<br/>";
    echo "Imc depois: " .$pessoaDois->getImc();


    
    ?>
</body>
</html>