<?php
    namespace POO\ProjetoBDPhp\DAO;

    require_once('Conexao.php');

    use POO\ProjetoBDPhp\DAO\Conexao;

    class Atualizar{
        public function Atuali(Conexao $conexao, string $nomeTabela, int $cpf , string $campo ,string $valor){

            try{
                $conn = $conexao->Conectar();
                $sql = "update $nomeTabela set $campo = '$valor' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "<br><br> Atualizado com sucesso";
                }else{
                    echo "<br><br> Não Atualizado";
                }
            }catch(Except $erro){
                echo $erro;
            }//fim do cath
        }//fim do metodo
    }//fim da classe
?>