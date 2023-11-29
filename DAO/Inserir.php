<?php
    namespace POO\ProjetoBDPhp\DAO;

    require_once('Conexao.php');//acessando minha classe de conexao
    use POO\ProjetoBDPhp\DAO\Conexao;

    class Inserir{

        public function Insert(
        Conexao $conexao,
         string $nomeTabela,
         int $cpf,
         string $nome,
         string $telefone,
         string $endereco,
         string $email)
         {

            try{
                    $conn = $conexao->Conectar();
                    $sql ="insert into $nomeTabela(cpf, nome, telefone, endereco, email)values('$cpf','$nome','$telefone','$endereco','$email')";
                    $result = mysqli_query($conn, $sql);
                    
                    if($result){
                        return "<br><br>Inserido com sucesso";

                    }else{
                        return "<br><br> Não Inserido";
                    }

                    mysqli_close($conn);// fechando a conexao com o bd
            }catch(Exept $erro){
                echo $erro;
            }
         }//fim do insert
    }//fim da classe
?>