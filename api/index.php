<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" type="text/css" href="./style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados das Atividades</title>
</head>
<body>
    <h1>Resultados das Atividades</h1>

    <h2>Atividade 1: Classes de Ingresso</h2>
    <?php
        require_once('atividade.php');
        require_once('atividade2.php');
        require_once('atividade3.php');

        $ingresso_normal = new Normal(50);
        $ingresso_vip = new VIP(100, 20);
        $ingresso_camarote = new Camarote(80, 30);

        $ingresso_normal->imprimeValor();
        $ingresso_vip->imprimeValor();
        $ingresso_camarote->imprimeValor();
    ?>

    <h2>Atividade 2: Classes de Imóvel</h2>
    <?php
        $imovel_novo = new Novo("Rua Nova, 123", 100000, 5000);
        $imovel_velho = new Velho("Rua Antiga, 456", 80000, 2000);

        $imovel_novo->imprimeAdicional();
        $imovel_velho->imprimeDesconto();
    ?>

     <h2>Atividade 3: Classe Animal</h2>
     <?php
    $cachorro = new Cachorro("Rex", 3, "Cachorro");
    $cavalo = new Cavalo("Tordilho", 2, "Cavalo");
    $gato = new Gato("Miau", 1, "Gato");

    $cachorro->fazSom();
    echo "<br>";
    $cavalo->fazSom();
    echo "<br>";
    $gato->fazSom();
    ?>
</body>
</html>
