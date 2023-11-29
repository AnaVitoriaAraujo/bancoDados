<?php
    namespace POO\ProjetoBDPhp;

    require_once('Modelo/Pessoa.php');//requisitando o uso do arquivo pessoa

    require_once('DAO/Conexao.php');

    require_once('DAO/Inserir.php');

    require_once('DAO/Consultar.php');

    require_once('DAO/Atualizar.php');

    require_once('DAO/Excluir.php');

    use POO\ProjetoBDPhp\Modelo\Pessoa; //acessar e usar todos os metodos desse aquivo
    use POO\ProjetoBDPhp\DAO\Conexao;
    use POO\ProjetoBDPhp\DAO\Inserir;
    use POO\ProjetoBDPhp\DAO\Consultar;
    use POO\ProjetoBDPhp\DAO\Atualizar;
    use POO\ProjetoBDPhp\DAO\Excluir;

    $pessoa = new Pessoa("125013256", "Allan", "11989898989", "Avenida Senador Vergueiro",".sobral");

    //banco de dados

        $conexao = new Conexao();
        //inserir ios dados no banco
        $inserir = new Inserir();
       /* echo $inserir->Insert($conexao,
        "pessoa",$pessoa->getCPF(),
        $pessoa->getNome(),
        $pessoa->getTelefone(),
        $pessoa->getEndereco(),
        $pessoa->getemail() );*/

        //consulta no bd

        $Consultar = new Consultar();
       // $Consultar ->ConsultarIndividual($conexao, "pessoa", "125013256");
        $Consultar->ConsultarTudo($conexao, "pessoa");
        //atualização
        $atualizar = new Atualizar();
        $atualizar->Atuali($conexao, "pessoa", "125013256", "nome", "jaime torres");

        $Consultar->ConsultarTudo($conexao, "pessoa");

        $excluir = new Excluir();
        $excluir->Deletar($conexao,"pessoa", "125013256");


?>