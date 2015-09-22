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
    <br><br>
    <section id="wizard">
      <div class="page-header">
        <h1>Área administrativa do cognitivo</h1>
      </div>
      <div class="col-md-12">
          <table class="table table-hover table-bordered table-condensed">
            <thead>
            <tr>
              <th>Código</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Chave</th>
              <th>Visualizar</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($peoples as $result)
              <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->nome }}</td>
                <td>{{ $result->email }}</td>
                <td>{{ $result->key }}</td>
                <td><a href="/resultado/{{ $result->key }}" class="btn btn-warning">Visualizar</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>

          {{ $peoples->render() }}


      </div>

    </section>
  </div>
  <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
  <script src="{{asset('js/prettify.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
