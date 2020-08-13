<!DOCTYPE html>

<?php
    if(isset($_POST['calcular'])){
        if(!empty($_POST['peso']) and !empty($_POST['altura'])){
            
            $peso = floatval($_POST['peso']);
            $altura = floatval($_POST['altura']);
            
            $imc = ($peso /(pow($altura, 2)));
            
            if($imc < 18.5){
                $classificacao = "Magreza";
            }else if(($imc >= 18.5) and ($imc <= 24.9)){
                $classificacao = "normal";
            }else if (($imc >= 25) and ($imc <= 29.9)){
                $classificacao = "Sobrepeso";
            }else if (($imc >= 30) and ($imc <= 39.9)){
                $classificacao = "Obesidade";
            }else if (($imc >= 40)){
                $classificacao = "Obesidade grave";
            }else
                $classificacao = "Valores informados inválidos";      
        }
    }
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <script type="text/javascript"src="js/bootstrap.js" ></script>
        
        <title>Calculadora de IMC</title>
    </head>
    <body>
        <form name="formImc" action="index.php" method="POST">
            <fieldset>
                <legend>Calculadora de IMC</legend>
                
                <p>
                    <label for="idPeso">Peso (kg):</label>
                    <input class="form-control" id="idPeso" name="peso" type="text" placeholder="Ex: 73" required value="<?php if(isset($peso)){echo $peso;}?>">
                </p>
                
                <p>
                    <label for="idAltura">Altura (metros):</label>
                    <input class="form-control" id="idAltura" name="altura" type="text" placeholder="Ex: 1.73" required value="<?php if(isset($altura)) {echo $altura;} ?>">
                </p>
                
                <p>
                    <label for="idCalc">&nbsp</label>
                    <button class="btn btn-primary mb-2" id="idCalc" name="calcular">Calcular</button>
                </p>
                
                <p>
                    <label for="idClassificacao">Classificação:</label>
                    <input class="form-control" id="idClassificacao" readonly name="classificacao" value="<?php if(isset($classificacao)){echo $classificacao;} ?>">
                </p>
            </fieldset>
        </form>
    </body>
</html>
