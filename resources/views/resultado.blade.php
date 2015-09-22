
<!DOCTYPE html>
<html>
<head>
  <title>Cognitivo - Formulário Teste</title>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/prettify.css')}}" rel="stylesheet">
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
        <a class="navbar-brand" href="/">Cognitivo</a>
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
  <div class='container'>
    <form name="cognitivo" method="POST" action="http://localhost:8000/peoples" id="form" accept-charset="UTF-8">
      <input name="_token" type="hidden" value="R6G7l9M6hMI1XTRX9K09wzai4E9wRg3Ik1MxWz5A">
      <br><br>

      <section>
        @if (count($pesquisa) === 1)
        <div class="page-header">
          <h1>Resultado da avaliação cognitiva</h1>
        </div>

        <div class="form-horizontal">

          <div class="form-group">

            <label class="control-label col-md-2">Chave:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->key}}</p>
            </div>
            <label class="control-label col-md-2">Nome:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->nome}}</p>
            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Email::</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->email}}</p>
            </div>
            <label class="control-label col-md-2">Compreender:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->compreender_total}}</p>
            </div>


          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Avaliar:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->avaliar_total}}</p>
            </div>
            <label class="control-label col-md-2">Analisar:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->analisar_total}}</p>
            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Memorizar:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->memorizar_total}}</p>
            </div>
            <label class="control-label col-md-2">Aplicar:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->aplicar_total}}</p>
            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Criar:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->criar_total}}</p>
            </div>
            <label class="control-label col-md-2">Criar:</label>
            <div class="col-md-4">
              <p class="form-control-static">{{$pesquisa[0]->criar_total}}</p>
            </div>

            </div>

          </div>

          @else
          <div class="page-header">
            <div class="alert alert-warning alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <strong>Nenhum registro foi encontrado!</strong>
            </div>
          </div>

          <a class="btn btn-default btn-block btn-lg" onclick="javascript:redirect()"><span class="glyphicon glyphicon-arrow-left"></span> Voltar para a home</a>
          @endif

        </section>
      </form>
    </div>
    <script>
      function redirect(){
        window.location = window.location.origin;
      }
    </script>
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/prettify.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

  </body>
  </html>
