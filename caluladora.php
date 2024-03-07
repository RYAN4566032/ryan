<?php
// pegar variveis vinda na url
//halamadrid;
// $variaveis1=$_GET;
//póooooo;
//pode ser array, usamos o var_dump para
// verificar seu conteudo
//var_dump($variveis);



// dois simbolos de ?, significa um valor
// padrao caso o $_get nao existe
$numero1=$_POST["numero1"]??0;
$numero2=$_POST["numero2"] ??0;
$operador = $_POST["operador"]??"somar";
$resultado =$numero1 +$numero2;
$operador = $numero1 + $numero2;

if($operador == "somar"){
 $resultado = $numero1 + $numero2;

} elseif ($operador == "subtrair"){
 $resultado = $numero1 - $numro2;

}elseif ($operador == "multiplicar"){
    $resultado = $numero1 * $numro2;


}elseif ($operador == "dividir"){
    $resultado = $numero1 / $numro2;
    
}

if($numero == 0){

    echo"
    
    
    script>
    
    alert('impossivel divisao por zero');
    exit();
    </script>
    
    ";
    
     }else{
    
     resultado = $numero1 / numero2;
    }
    
}  
    
    ?>

   
   





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calculadora php</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label" for="numero1">numero 1 </label>
                        <input type="<?php echo $numero1?>" class="form-control" id="numero1" name="numero1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="operador">operador</label>
                        <select class="form-control" id="operador" name="operador">
                            <option <?php echo $operador =="somar"?"selected":"";?> value="soma">soma</option>
                            <option <?php echo $operador =="subtrair"?"selected":"";?> value="subtrair">subtrair</option>
                            <option <?php echo $operador =="multiplicar"?"selected":"";?> value="multiplicar">multiplicar</option>
                            <option <?php echo $operador =="dividir"?"selected":"";?> value="dividir">dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="numero2">numero 2</label>
                        <input type="<?php echo $numero2?>" class="form-control" id="numero2" name="numero2">
                    </div>
                    <div class="mb-3">
                        <label for="resultado" class="form label">resultado</label>
                        <input value="<?php echo $resultado?>" id="resultado"type="number" readonly>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger" type="">Limpar</button>
                        <button class="btn btn-primary" type="submit">Calcular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
   <script> 
  //funcao para formulario
 




  </script>
</body>

</html>
