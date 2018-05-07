<html>
    <head>
        <title>Teste PHP</title>
    </head>
 <body>
    <?php echo "<p>Escrevendo arquivo</p>"; ?>
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

        $tamanhoBarra = 1000;

        $demandas = [];
        $demandas[0] = new Demanda(300, 45);
        $demandas[1] = new Demanda(150, 23);
        $demandas[2] = new Demanda(120, 16);
        $demandas[3] = new Demanda(980, 5);
        // $demandas[4] = new Demanda(20, 3);

        echo "Tamanho da barra ".$tamanhoBarra."<br/>";
        echo "Demanda ".$demandas[0]->tamanho."<br/>";
        echo "Quantidade ".$demandas[0]->quantidade."<br/>";
        echo "Size of ".sizeof($demandas)."<br/>";

        gravarDados($arquivo, $tamanhoBarra, $demandas);

        echo shell_exec("./cspsol --data dadosCliente.txt");

        echo "<script>console.log('Otimização calculada');</script>";
        echo "<script>window.open('../frontend/index.html');</script>";

    ?>
 </body>
</html>