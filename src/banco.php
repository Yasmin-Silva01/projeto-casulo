<?php
abstract class Banco {
    // Atributo/Propriedade de conexão
    private static PDO $conexao;

    public static function conecta():PDO{
       
        /* Parâmetros para conexão ao servidor de BD 
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "exemplo_vendas";*/

        /* conexão remoto 
        $servidor = "sql104.byethost4.com";
        $usuario = "b4_30964317";
        $senha = "2347yassan@";
        $banco = "b4_30964317_casulo";*/


        try {
            /* Configurando o DSN (Data Source Name): string de conexão */
            self::$conexao = new PDO(
                "mysql:host=$servidor; dbname=$banco; charset=utf8",
                $usuario,
                $senha
            );

            // Habilitando a verificação de erros no PDO
            self::$conexao->setAttribute(
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
        } catch(Exception $erro){
            die("Erro: ". $erro->getMessage());
        }

        return self::$conexao;
    } // fim conecta()
} // fim Banco
