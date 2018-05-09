<html>
    <head>
        <title>Teste PHP</title>
    </head>
 <body>

    <?php
        include("demanda.php");

        function limparArquivo($caminhoArquivo){
            // Apaga o conteúdo do arquivo
            $file = fopen($caminhoArquivo, "w+");
            fwrite($file, "");
            fclose($file);
        }

        function gravarDados($caminhoArquivo, $tamanhoBarra, $demandas){
            // Escreve no arquivo
            $file = fopen($caminhoArquivo, "a+");

            $primeiraLinha = $tamanhoBarra."\n";
            fwrite($file, $primeiraLinha);
            
            for($i = 0; $i < sizeof($demandas); $i++){
                $proximaLinha = $demandas[$i]->tamanho." ".$demandas[$i]->quantidade."\n";
                fwrite($file, $proximaLinha);
            }

            fclose($file);
        }
        $arquivo = "dadosCliente.txt";

        limparArquivo($arquivo);

        $tamanhoBarra = $_POST["tamanhoBarra"];
        $demandas = [];

        for ($i = 0; $i <= (int)$_POST["contador"]; $i++)
        {
            array_push($demandas, new Demanda($_POST["tamanhoCorte".$i], $_POST["quantidadeCorte".$i]));
        }

        gravarDados($arquivo, $tamanhoBarra, $demandas);

        echo shell_exec("./cspsol --data dadosCliente.txt");

        echo "<script>console.log('Otimização calculada');</script>";
        echo "<script>window.location.replace('../frontend/resultado.html');</script>";

    ?>
 </body>
</html>