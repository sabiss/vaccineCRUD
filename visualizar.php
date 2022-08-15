<html>
    <body>
        <h1>Vacinas Cadastradas:</h1>
        
        <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "projeto";

            $conexao = mysqli_connect($host, $username, $password, $database);

            if(!$conexao){
                die("Conexão falhou");
            }
            
            $sql = "SELECT * FROM cadastrovacinas";

            $dados = mysqli_query($conexao, $sql);

            $nLinhas = mysqli_num_rows($dados);

            for($i = 0; $i < $nLinhas; $i++){
                $linha = mysqli_fetch_row($dados);
                echo "Lote: ".$linha[0]."<br>Tipo: ".$linha[1]."<br>Aplicador: ".$linha[2]."<br>Data: ".$linha[3]."<hr>";

            }

        ?>
    </body>
</html>