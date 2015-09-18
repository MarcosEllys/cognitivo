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
  <div class='container'>
    <br><br>
    <section id="wizard">
      <div class="page-header">
        <h1>Área administrativa do cognitivo</h1>
      </div>
      <div class="col-md-12">
          @foreach ($peoples as $result)
              <p>{{ $result }}</p>
          @endforeach

          {{ $peoples->render() }}


      </div>

    </section>
  </div>
  <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
  <script src="{{asset('js/prettify.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
