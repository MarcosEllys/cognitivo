<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Marcos Ellys Rocha Honorato">
  <title>Cognitivo - Formulário Teste</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { padding-top: 70px; }
  </style>

</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Cognitivo test</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/desafio">Desafio</a></li>
          <li><a href="/admin">Administrativo</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">

    <div class="row">
      <div class="col-md-12 col-lg-12">


        <h4>
          <strong>Sobre o aplicativo:</strong>
        O questionário ( As questões ) deste aplicativo está embasada na taxonomia dos objetivos educacionais do pedagogo Norte-Americano  Benjamin S. Bloom . Iremos tomar como base de forma majoritária o domínio cognitivo e seu conjunto de habilidades tendo em vista que é esse domínio que ocasiona o processo usado pelo nosso cérebro que torna possível <strong>pensar, aprender e lembrar</strong>, entre outros de extrema importância ao ser humano por ser um ser Racional e Intelectual.
        </h4>
        <br>
        <h4>
          <strong>Sobre o projeto:</strong>
        Segundo a teoria do nosso projeto a grande parte dos alunos do ensino-médio de nosso país não atingirem bons resultados em provas internas e externas ( ENEM e VESTIBULARES por exemplo) se dá por terem um baixo cognitivo,  haja visto que Se você tem uma baixo domínio cognitivo, o processamento de informações pode ser mais difícil e lento. Identificamos também que os métodos tradicionais usados pelos professores em sala de aula NÃO consegue suprir a necessidade cognitiva dos alunos de forma geral, portanto se é necessário criar uma nova forma de intervenção para que se obtenha o desenvolvimento cognitivo desejável e necessário.
        Devido a esta problemática identificada por nós ( Alunos Pesquisadores) buscamos desenvolver novos métodos e novos meios para que Alunos cada vez mais aprendam mudando assim esses índices negativos de reprovação e de evasão escolar.
        </h4>
        <br>
        <h4>
          <strong>Objetivo Geral do aplicativo:</strong>
        Avaliar a porcentagem de cada habilidade cognitiva dos usuários deste aplicativo em geral. E possibilitar a comparação entre uma e outra.
        </h4>
        <br>
        <h4>
          <strong>Objetivos Específico do aplicativo:</strong>
          <br>
        <ul>
          <li>Promover o equilíbrio diminuindo a disparidade das mesmas.</li>
          <li>Possibilitar o treino cerebral e posterior desenvolvimento das habilidades cognitivas.</li>
          <li>Levar os usuários a terem uma medição/ reflexão constante possibilitando que eles acompanhem o desenvolvimento de suas habilidades e a onde precisam melhorar respectivamente.</li>
          <li>Mostra-los como treinar essas habilidades no próprio cotidiano indicando-lhes dicas fáceis porém capazes de os levar a um novo patamar cognitivo.</li>
        </ul>
        </h4>


        <div class="panel panel-warning">
        <div class="panel-heading">Buscar exame já realizado</div>
          <div class="panel-body">
              <div class="input-group">
                <input type="text" class="form-control" id="hash" placeholder="Digite aqui o código gerado pelo cognitivo..." onchange="javascript:verificaInput(this)" />
                <span class="input-group-btn">
                  <button class="btn btn-default" id="search" type="submit" onclick="javascript:redirect()">Buscar!</button>
                </span>
              </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <script>
  document.getElementById("search").disabled = true;

  function verificaInput (form) {

    if ( form.value.length != 32) {
      document.getElementById("search").disabled = true;
    }
    // Se o usário tiver digitado no campo uma string com o tamanho do hash MD5 o botão é habilitado
    else {
      document.getElementById("search").disabled = false;
    }
  };
  function redirect(){
        if ( document.getElementById("hash").value.length == 32) {
          var hash = document.getElementById("hash").value;
          window.location = window.location.href + 'resultado/' + hash;
        }
        else {
          return false;
        }
    }
  </script>
  <script type="script/javaScript" src="js/jquery-2.1.4.min.js"></script>
  <script type="script/javaScript" src="js/bootstrap.min.js"></script>
</body>
</html>
