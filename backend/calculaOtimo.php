<html>
    <head>
        <title>Teste PHP</title>
    </head>
 <body>

    <?php
        include("demanda.php");

        // Apaga o conteúdo do arquivo com os dados da barra e dos cortes
        function limparArquivo($caminhoArquivo){
            $file = fopen($caminhoArquivo, "w+");
            fwrite($file, "");
            fclose($file);
        }

        // Grava as informações da barra e dos cortes no arquivo
        function gravarDados($caminhoArquivo, $tamanhoBarra, $demandas){
            // Escreve no arquivo
            $file = fopen($caminhoArquivo, "a+");

            // Armazena tamanho da barra
            $primeiraLinha = $tamanhoBarra."\n";
            fwrite($file, $primeiraLinha);
            
            // Armazena os tamanhos e quantidade dos cortes demandados
            for($i = 0; $i < sizeof($demandas); $i++){
                $proximaLinha = $demandas[$i]->tamanho." ".$demandas[$i]->quantidade."\n";
                fwrite($file, $proximaLinha);
            }

            fclose($file);
        }
        $arquivo = "dadosCliente.txt";

        limparArquivo($arquivo);

        // Variáveis $_POST vêm do arquivo index.html, e possuem o conteúdo dos inputs do formulário
        $tamanhoBarra = $_POST["tamanhoBarra"];
        $demandas = [];

        // Cria objetos de demandas e adiciona em um array
        for ($i = 0; $i <= (int)$_POST["contador"]; $i++)
        {
            array_push($demandas, new Demanda($_POST["tamanhoCorte".$i], $_POST["quantidadeCorte".$i]));
        }

        gravarDados($arquivo, $tamanhoBarra, $demandas);

        // Executa o comando da biblioteca cspsol no terminal para ler o arquivo e gerar o JSON
        echo shell_exec("./cspsol --data dadosCliente.txt");

        // Abre a janela com os resultados
        echo "<script>console.log('Otimização calculada');</script>";
        echo "<script>window.location.replace('../frontend/resultado.html');</script>";

    ?>
 </body>
</html>