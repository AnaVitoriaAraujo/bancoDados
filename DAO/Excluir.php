<?php
    namespace POO\ProjetoBDPhp\DAO;

    require_once('Conexao.php');

    use POO\ProjetoBDPhp\DAO\Conexao;

    class Excluir{
        public function Deletar(Conexao $conexao, string $nomeTabela, int $cpf){
            try{

                    $conn = $conexao->Conectar();
                    $sql = "delete from $nomeTabela where cpf = '$cpf'";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        echo"<br><br> Excluido com Sucesso";
                    }else{
                        echo "<br><br> Não excluido";
                    }


            }catch(Except $erro){
                echo $erro;
            }
        }
    }//fim da classe
?>