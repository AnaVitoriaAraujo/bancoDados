<?php
    namespace POO\ProjetoBDPhp\DAO;

    require_once('Conexao.php');

    use POO\ProjetoBDPhp\DAO\Conexao;

    class Consultar{

        public function ConsultarIndividual(Conexao $conexao, string $nomeTabela, int $cpf){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $cpf){
                        echo"<br><br>CPF:".$dados["cpf"].
                        "<br>Nome:".$dados["nome"].
                        "<br>Telefone".$dados["telefone"].
                        "<br>Endereco".$dados["endereco"].
                        "<br>Email:".$dados["email"];
                    }
                }
                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do metodo

        public function ConsultarTudo(Conexao $conexao, string $nomeTabela){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>CPF:".$dados["cpf"].
                    "<br>Nome:".$dados["nome"].
                    "<br>Telefone".$dados["telefone"].
                    "<br>Endereco".$dados["endereco"].
                    "<br>Email:".$dados["email"];
                }//fim do enquanto

            }catch(Except $erro){
                    echo $erro;
            }
        }//fim do método

    }//fim da classe 
    
?>