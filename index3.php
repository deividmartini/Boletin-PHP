<!DOCTYPE HTML>  
<html>
<head>
<title>Boletim V2</title>
<style>
.error {color: #FF0000;font-size:9px;}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


</head>
<body>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<?php

$turmaErr = $nomeErr = $disciplinaErr = $nota1Err = $nota2Err = $nota3Err = $nota4Err = "";
$turma = $nome = $disciplina = $nota1 = $nota2 = $nota3 = $nota4 = ""; 
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["turma"])) {
    $turmaErr = "Turma é obrigatório!";
  } else {
    $turma = test_input($_POST["turma"]);

    if (!preg_match("/^[\d,.?!]+$/",$turma)) {
      $turmaErr = "Somente números!";
    }
  }

  if (empty($_POST["nome"])) {
    $nomeErr = "Nome é obrigatório!";
  } else {
    $nome = test_input($_POST["nome"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Somente letras! ";
    }
  }

  if (empty($_POST["disciplina"])) {
    $disciplinaErr = "Disciplina é obrigatório!";
  } else {
    $disciplina = test_input($_POST["disciplina"]);

  }

  if (empty($_POST["nota1"])) {
    $nota1Err = "Nota 1 é obrigatório!";
  } else {
    $nota1 = test_input($_POST["nota1"]);

    if (!preg_match("/^[\d,.?!]+$/",$nota1)) {
      $nota1Err = "Somente números!";
    }
  }

  if (empty($_POST["nota2"])) {
    $nota2Err = "Nota 2 é obrigatório!";
  } else {
    $nota2 = test_input($_POST["nota2"]);

    if (!preg_match("/^[\d,.?!]+$/",$nota2)) {
      $nota2Err = "Somente números!";
    }
  }

  if (empty($_POST["nota3"])) {
    $nota3Err = "Nota 3 é obrigatório!";
  } else {
    $nota3 = test_input($_POST["nota3"]);

    if (!preg_match("/^[\d,.?!]+$/",$nota3)) {
      $nota3Err = "Somente números!";
    }
  }

  if (empty($_POST["nota4"])) {
    $nota4Err = "Nota 4 é obrigatório!";
  } else {
    $nota4 = test_input($_POST["nota4"]);

    if (!preg_match("/^[\d,.?!]+$/",$nota4)) {
      $nota4Err = "Somente números!";
    }
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="container">

<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sistema Boletim</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="color: #757575;">
            <!-- Turma -->
            <div class="md-form">
            <label>Turma nº</label>
            <span class="error">* <?php echo $turmaErr;?></span>
                <input type="text" class="form-control" name="turma" value="">                
            </div>

            <!-- Nome -->
            <div class="md-form mt-3">
            <label>Aluno</label>
            <span class="error">* <?php echo $nomeErr;?></span>
                <input type="text" class="form-control" name="nome" value="">               
            </div>

            <!-- Disciplina -->
            <div class="md-form mt-3">
            <label>Disciplina</label>
            <span class="error">* <?php echo $disciplinaErr;?></span>

          <select name="disciplina" class="form-control form-control-sm">
            <!-- sem value -->
            <option value="">Selecione a disciplina</option>

            <option value="Matemáticas e suas Tecnologias">Matemáticas e suas Tecnologias</option>
                        
            <option value="Linguagens e suas Tecnologias">Linguagens e suas Tecnologias</option>
            <option value="Ciências da Natureza e suas Tecnologias">Ciências da Natureza e suas Tecnologias</option>
            <option value="Ciências Humanas e Sociais Aplicadas">Ciências Humanas e Sociais Aplicadas</option>
          </select>

            </div>

            <!-- Nota 1 -->
            <div class="md-form">
            <label>Nota 1</label>
            <span class="error">* <?php echo $nota1Err;?></span>
                <input  type="number" min="1" max="10" step="0.1" class="form-control" name="nota1" value="">                
            </div>

            <!-- Nota 2 -->
            <div class="md-form">
            <label>Nota 2</label>
            <span class="error">* <?php echo $nota2Err;?></span>
                <input  type="number" min="1" max="10" step="0.1" class="form-control" name="nota2" value="">                
            </div>

            <!-- Nota 3 -->
            <div class="md-form">
            <label>Nota 3</label>
            <span class="error">* <?php echo $nota3Err;?></span>
                <input  type="number" min="1" max="10" step="0.1" class="form-control" name="nota3" value="">                
            </div>

            <!-- Nota 4 -->
            <div class="md-form">
            <label>Nota 4</label>
            <span class="error">* <?php echo $nota4Err;?></span>
                <input  type="number" min="1" max="10" step="0.1" class="form-control" name="nota4" value="">                
            </div>         

            <!-- Botão calcular -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit" value="Calcular">Calcular</button>
        </form>
<?php

if ($turma.$nome.$disciplina.$nota1.$nota2.$nota3.$nota4 === ""){}

if (!preg_match("/^[\d,.?!]+$/",$nota1)) {}
if (!preg_match("/^[\d,.?!]+$/",$nota2)) {}
if (!preg_match("/^[\d,.?!]+$/",$nota3)) {}
if (!preg_match("/^[\d,.?!]+$/",$nota4)) {}

else {

  function TiraAcentos($str) {

    // subistitui acentos removendo o acento

    $str = preg_replace('/[áàãâä]/ui', 'a', $str);

    $str = preg_replace('/[éèêë]/ui', 'e', $str);

    $str = preg_replace('/[íìîï]/ui', 'i', $str);

    $str = preg_replace('/[óòõôö]/ui', 'o', $str);

    $str = preg_replace('/[úùûü]/ui', 'u', $str);

    $str = preg_replace('/[ç]/ui', 'c', $str);

    $str = preg_replace('/[^a-z0-9]/i', '_', $str);

    $str = preg_replace('/_+/', '_', $str);

    return $str;

}

$nome_arquivo = TiraAcentos($nome);

    
    //formula
    $conta1 = $nota1+$nota2+$nota3+$nota4;
    $conta2 = $conta1/4;

    echo '
    <div class="container">
    <div class="card">
    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Olá '.$nome.'!</strong><br>
        <strong>Turma: '.$turma.'!</strong><br>
        <strong>Disciplina: '.$disciplina.'!</strong><br><a href="resultados/'.$nome_arquivo.'.php"  target="_blank">
        A média do aluno é <strong>'.number_format($conta2, 2, ",", " ");'       
    ';

    echo '</strong>';

    if($conta2 < 1){echo '
      <div class="alert alert-primary" role="alert">
      Reprovado por faltas.</div>
      ';
    
      $mensagem = '
      <div class="alert alert-primary" role="alert">
      Reprovado por faltas.</div>
      ';
    
    }
    elseif ($conta2 >= 1 && $conta2 <= 3) {
     echo '
     <div class="alert alert-secondary" role="alert">
     Reprovado por notas.</div>';}

    elseif ($conta2 >= 3.1 && $conta2 <= 5){
     echo '
     <div class="alert alert-success" role="alert">
     Em recuperação</div>';}

    elseif ($conta2 >= 5.1 && $conta2 <= 7){
     echo '
     <div class="alert alert-info" role="alert">
     Aprovado</div>';

     $mensagem = '
     <div class="alert alert-info" role="alert">
     Aprovado</div>';
    
    }    

    else{
     echo '<div class="alert alert-dark" role="alert">
     Parabéns! Estágio Garantido.</div>';

     $mensagem = '<div class="alert alert-dark" role="alert">
     Parabéns! Estágio Garantido.</div>';

     $texto = '

     <html>
     
     <head>
     
     
     <title>'.$nome.' - Média</title>
      
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     
     </head>
     
     ';
     
     fwrite($arquivo, $texto);
     
     $texto = '<body>
     <div class="container">
     
     
     <h1>'.'<span>Olá '.$nome.'</span>'.'</h1><br>

     <strong>Turma: '.$turma.'!</strong><br>
     <strong>Disciplina: '.$disciplina.'!</strong><br>
     
     Segue abaixo o resultado de suas notas:<br>
     
     Sua primeira nota é: '.$nota1.'<br>
     
     Sua segunda nota é: '.$nota2.'<br>
     
     Sua terceira nota é: '.$nota3.'<br>
     
     Sua quarta nota é: '.$nota4.'<br><br>
     
     Sua média é: '.$conta2.'<br>'.'<span>'.$mensagem.'</span>'.'

     </div>
     
     </body>
     
     </html>
     
     ';
     
     fwrite($arquivo, $texto);
     
     fclose($arquivo);
     

    }
}
?>
    </div>
</div>

    <script type="text/javascript">
    $("#nota1, #nota2, #nota3, #nota4").mask("00.00");
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>