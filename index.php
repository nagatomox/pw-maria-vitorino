<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia de Jogos</title>
</head>
<body>
    <form name="form" method="post" >
    <label><br>Formulário<br></label>
    <input type= "text" name="cliente" placeholder="número"><br>
    <input type= "submit" name="enviar" id="enviar" value="enviar"><br>

<?php
class FarmaciaJogos{
    public $nome;
    public $escolha;
    
    function CadastrarJogo (){
        echo("Cadastrado"); 
    }
    function ConsultarJogo(){
        echo("Consultado"); 
    }
    function EditarJogo (){
        echo("Editado"); 
    }
    function ExcluirLivro (){
        echo ("Excluido"); 
    }

}

$objeto = new FarmaciaJogos();
        $escolha;
        echo("Digite a opção desejada:<br>");
        echo("1-cadastrar jogo<br>");
        echo("2-consultar jogo<br>");
        echo("3-editar jogo<br>");
        echo("4-excluir jogo<br>");
        echo("5-eemprestar jogo<br>");
        echo("6-aplicar multa<br>");
        echo("Digite a opção desejada<br>");
        $objeto->escolha = $_POST("cliente");

        if($objeto->escolha == 1)
        {$objeto->CadastrarJogo (); }
        else
        {
            if($objeto->escolha == 2)
            {$objeto->ConsultarJogo(); }
        else
            if($objeto->escolha == 3)
            {$objeto->EditarJogo(); }
        else
            if($objeto->escolha == 4)
            {$objeto->ExcluirJogo(); }
        else
            if($objeto->escolha == 5)
            {$objeto->EmprestarJogo(); }
        else 
            if($objeto->escolha == 6)
            {$objeto->AplicarMulta(); }
        }

?>




</body>
</html>
