
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
          <li>
          {!! link_to('/','Home') !!}
          </li>
          <li>
          {!! link_to('/desafio','Desafio') !!}
          </li>
          <li>
          {!! link_to('/admin','Administrativo') !!}
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class='container'>
    <form id="form" accept-charset="UTF-8">
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
              <p class="form-control-static" data-toggle="tooltip" data-placement="top" title="Guarde esse código para consultar o seu teste sempre que quiser">{!! $pesquisa[0]->key !!}</p>
            </div>
            <label class="control-label col-md-2">Nome:</label>
            <div class="col-md-4">
              <p class="form-control-static">{!! $pesquisa[0]->nome !!}</p>
            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Email::</label>
            <div class="col-md-4">
              <p class="form-control-static">{!! $pesquisa[0]->email !!}</p>
            </div>
            <label class="control-label col-md-2">Data do teste:</label>
            <div class="col-md-4">
              <p class="form-control-static">{!! $pesquisa[0]->created_at !!}</p>
            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Compreender:</label>
            <div class="col-md-4">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{!! $pesquisa[0]->compreender_total !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $pesquisa[0]->compreender_total !!}%;">
                  {!! $pesquisa[0]->compreender_total !!}%
                </div>
              </div>
            </div>
            <label class="control-label col-md-2">Avaliar:</label>
            <div class="col-md-4">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{!! $pesquisa[0]->avaliar_total !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $pesquisa[0]->avaliar_total !!}%;">
                  {!! $pesquisa[0]->avaliar_total !!}%
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Analisar:</label>
            <div class="col-md-4">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{!! $pesquisa[0]->analisar_total !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $pesquisa[0]->analisar_total !!}%;">
                  {!! $pesquisa[0]->analisar_total !!}%
                </div>
              </div>
            </div>
            <label class="control-label col-md-2">Memorizar:</label>
            <div class="col-md-4">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{!! $pesquisa[0]->memorizar_total !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $pesquisa[0]->memorizar_total !!}%;">
                  {!! $pesquisa[0]->memorizar_total !!}%
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-md-2">Aplicar:</label>
            <div class="col-md-4">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{!! $pesquisa[0]->memorizar_total !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $pesquisa[0]->memorizar_total !!}%;">
                  {!! $pesquisa[0]->memorizar_total !!}%
                </div>
              </div>
            </div>
            <label class="control-label col-md-2">Criar:</label>
            <div class="col-md-4">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{!! $pesquisa[0]->memorizar_total !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $pesquisa[0]->memorizar_total !!}%;">
                  {!! $pesquisa[0]->memorizar_total !!}%
                </div>
              </div>
            </div>

            </div>

            <div class="form-group">

              <label class="control-label col-md-2">Criar:</label>
              <div class="col-md-4">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{!! $pesquisa[0]->memorizar_total !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $pesquisa[0]->memorizar_total !!}%;">
                  {!! $pesquisa[0]->memorizar_total !!}%
                </div>
              </div>
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
