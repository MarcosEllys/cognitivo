
<!DOCTYPE html>
<html>
<head>
  <title>Cognitivo - Formulário Teste</title>
  <link href="http://localhost:8000/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost:8000/css/prettify.css" rel="stylesheet">
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
    <form method="POST" action="http://localhost:8000/peoples" accept-charset="UTF-8"><input name="_token" type="hidden" value="R6G7l9M6hMI1XTRX9K09wzai4E9wRg3Ik1MxWz5A">
      <br><br>
      <section id="wizard">
        <div class="page-header">
          <h1>Formulário de avaliação cognitiva</h1>
        </div>
        <div id="rootwizard">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="container">
                <ul>
                  <li><a href="#tab1" data-toggle="tab">Dados do participante</a></li>
                  <li><a href="#tab2" data-toggle="tab">Habilidade de Compreender</a></li>
                  <li><a href="#tab3" data-toggle="tab">Habilidade de Avaliar</a></li>
                  <li><a href="#tab4" data-toggle="tab">Habilidade de Analisar</a></li>
                  <li><a href="#tab5" data-toggle="tab">Habilidade de Memorizar</a></li>
                  <li><a href="#tab6" data-toggle="tab">Habilidade de Aplicar</a></li>
                  <li><a href="#tab7" data-toggle="tab">Habilidade de Criar</a></li>
                </ul>
              </div>
            </div>
          </div>
        <div id="bar" class="progress progress-striped active">
          <div class="progress-bar"></div>
        </div>
        <div class="tab-content form-horizontal">
          <div class="tab-pane" id="tab1">

            <div class="panel panel-default">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">Dados do participante</h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label for="nome" class="col-md-2 col-xs-12 control-label">Nome:</label>
                  <div class="col-md-10 col-xs-12">
                    <input class="form-control" placeholder="Nome do participante" name="nome" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="cpf" class="col-md-2 col-xs-12 control-label">CPF:</label>
                  <div class="col-md-10 col-xs-12">
                    <input class="form-control" placeholder="CPF do participante" name="cpf" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-md-2 col-xs-12 control-label">Email:</label>
                  <div class="col-md-10 col-xs-12">
                    <input class="form-control" placeholder="Email do participante" name="email" type="text">
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="tab-pane" id="tab2">
            <div class="panel-body">
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 01)</span> Quando a Revolução Francesa se organizou em Convenção (uma espécie de parlamento, de 1792 a 1795), a luta política intensificou-se. O assento do presidente ficava no meio da sala. Os girondinos (alta burguesia conservadora) sentavam-se à direita dele; os jacobinos (pequena burguesia e representantes da plebe de Paris) sentavam-se a esquerda. Para economizar esforços, o presidente da Convenção passou a chamar os girondinos de direita e os jacobinos de esquerda. Os jacobinos pretendiam aprofundar as medidas revolucionárias; os girondinos não. As expressões pegaram: esquerda, hoje, é quem quer fazer uma revolução ou introduzir reformas radicais; direita é que rejeita qualquer mudança (no centro ficam os indefinidos).
                </p>
                <strong>Qual a ideia principal do texto?</strong>
                <br>
                <input name="compreender_1" type="radio" value="1">
                A) Relatar sobre os Girondino.
                <br>
                <input name="compreender_1" type="radio" value="3">
                B) Mostrar como surgiu a expressão “esquerda”.
                <br>
                <input name="compreender_1" value="5" type="radio">C) Falar sobre a intensificação da luta politica durante a revolução francesa e como ela se deu.
                <br>
                <input name="compreender_1" value="4" type="radio">D) Falar sobre as lutas politicas na França e mostrar como elas se deram e deixar subentendido suas reformas e direitos.
                <br>
                <input name="compreender_1" value="2" type="radio">E) Falar sobre a história da França.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 02)</span> Podemos definir um partido político como uma organização voltada para a conquista do controle legítimo do governo por meio de um processo eleitoral. No século XVIII, a ideia embrionária de partido político se traduzia em associações e corporações, portanto, tinham atuação política mas sem as estruturas, regimentos e as ideologias dos partidos de hoje. O que diferencia as organizações pré-partidárias dos partidos atuais, são o interesse nacional e o poder.
                </p>
                <strong>Com base no texto implica dizer que ele tem como objetivo principal:</strong>
                <br>
                <input name="compreender_2" value="1" type="radio">A) Falar sobre os partidos políticos de hoje em dia.
                <br>
                <input name="compreender_2" value="4" type="radio">B) Conceituar partido politico.
                <br>
                <input name="compreender_2" value="3" type="radio">C) Falar sobre os partidos políticos do século XVIII.
                <br>
                <input name="compreender_2" value="5" type="radio">D) Dar o conceito de partido politico e mostrar como eles se davam nas diferentes épocas.
                <br>
                <input name="compreender_2" value="2" type="radio">E) Levar o leitor a refletir sobre “partido politico”.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 03)</span> “Um grupo primário geralmente é o grupo que nos propiciará os primeiros contatos, tal como o grupo social “família”. Mas não é apenas essa a característica de um grupo social primário. Tal grupo caracteriza-se também por relações estreitas, afetivas, educadoras e duradouras”
                  <br>
                  “Grupo secundário, ao contrário, caracteriza-se pela relação impessoal de trocas de interesses. As relações se dão mais por racionalidade do que por emoções, baseando-se na reciprocidade. “
                </p>
                <strong>As citações tem como Objetivo:</strong>
                <br>
                <input name="compreender_3" value="3" type="radio">A) Definir grupos.
                <br>
                <input name="compreender_3" value="4" type="radio">B) Diferenciar Grupo Primário de Grupo Secundário.
                <br>
                <input name="compreender_3" value="5" type="radio">C) Conceituar Grupo Primário e Grupo Secundário.
                <br>
                <input name="compreender_3" value="2" type="radio">D) Conceitos Sociológicos.
                <br>
                <input name="compreender_3" value="1" type="radio">E) Nada.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 04)</span> Sistema de Governo está relacionado ao modo como interagem o Poder Executivo e o Poder Legislativo em suas funções governamentais, ou seja, é a maneira pela qual o poder político é dividido e exercido no âmbito de um Estado. O sistema de governo varia de acordo com o grau de separação dos poderes. São sistemas de governo o Presidencialismo e o Parlamentarismo.
                </p>
                <strong>O texto esclarece a definição e a forma de encadeamento de:</strong>
                <br>
                <input name="compreender_4" value="4" type="radio">A) Poder politíco.
                <br>
                <input name="compreender_4" value="5" type="radio">B) Sistema de governo.
                <br>
                <input name="compreender_4" value="3" type="radio">C) Poderes.
                <br>
                <input name="compreender_4" value="2" type="radio">D) Estados.
                <br>
                <input name="compreender_4" value="1" type="radio">E) Poder legislatico.
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab3">
            <div class="panel-body">
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 05)</span> Abaixo gráfico que mostra a economia do Brasil durante a gestão de seus respectivos Presidentes.
                  <img src="http://localhost:8000/imagens/qt5.jpg">
                </p>
                <strong>Com base no gráfico sobre a Economia em relação ao Governo de Dilma é correto afirma que:</strong>
                <br>
                <input name="avaliar_1" value="1" type="radio">A) Foi superior aos demais.
                <br>
                <input name="avaliar_1" value="3" type="radio">B) Foi inferior aos demais.
                <br>
                <input name="avaliar_1" value="4" type="radio">C) Se manteve instável.
                <br>
                <input name="avaliar_1" value="2" type="radio">E) Está entre a média de todos.
                <br>
                <input name="avaliar_1" value="5" type="radio">E) Mostra declinio a anos anteriores.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 06)</span> A partir da compreensão do gráfico abaixo percebe-se que:
                  <img src="http://localhost:8000/imagens/qt6.png">
                </p>
                <br>
                <input name="avaliar_2" value="1" type="radio">A) O ano de maior índice de geração de empregos foi 2009.
                <br>
                <input name="avaliar_2" value="2" type="radio">B) O ano de menor índice de geração de empregos foi 2012.
                <br>
                <input name="avaliar_2" value="4" type="radio">C) Os anos de 2010,2011 e 2013 apresentam as maiores índices de geração de emprego.
                <br>
                <input name="avaliar_2" value="3" type="radio">D) Percebe-se um crescimento continuo no índice de empregos de 2010 a 2012.
                <br>
                <input name="avaliar_2" value="5" type="radio">E) Percebe-se uma queda continua no índice  de empregos de 2010 a 2013.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 07)</span> Avalie charge
                  <br>
                  <img src="http://localhost:8000/imagens/qt7.jpg" style="width:500; height:500px">
                </p>
                <br>
                <input name="avaliar_3" value="2" type="radio">A) Na charge o patrão trata o empregado como animal.
                <br>
                <input name="avaliar_3" value="3" type="radio">B) Mostra que os patrões levavam os empregados amarrados para votar.
                <br>
                <input name="avaliar_3" value="1" type="radio">C) Retrata pratica do nepotismo.
                <br>
                <input name="avaliar_3" value="4" type="radio">D) Mostra como os empregados eram maltratados.
                <br>
                <input name="avaliar_3" value="5" type="radio">E) Retrata pratica do voto de cabresto.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 08)</span>A charge seguinte
                  <br>
                  <img src="http://localhost:8000/imagens/qt8.jpg">
                </p>
                <br>
                <input name="avaliar_4" value="5" type="radio">A) mostra que com o passar dos tempos os meios de comunicação de massa tornaram-se o poder com mais força para influenciar os indivíduos.
                <br>
                <input name="avaliar_4" value="1" type="radio">B) Mostra a cumplicidade entre os poderes estabelecidos na sociedade, que pode facilitar no momento de se prover benefícios aos cidadãos.
                <br>
                <input name="avaliar_4" value="2" type="radio">C) Demonstra a desinformação do cidadão comum, que é incapaz de reconhecer as instâncias de poder da sociedade moderna.
                <br>
                <input name="avaliar_4" value="4" type="radio">D) Retrata a divergência entre os poderes estabelecidos na sociedade moderna, que proporciona muitos conflitos e desconfiança aos cidadãos.
                <br>
                <input name="avaliar_4" value="3" type="radio">E) Relata que os poderes da sociedade democrática são distribuídos de forma hierárquica, identificando quem terá maior poder de decisão.
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab4">
            <div class="panel-body">
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 09)</span> O grupo “Legião Urbana, na música “Pais e Filhos”, canta “Eu moro na rua, não tenho ninguém, eu moro em qualquer lugar, já morei em tanta casa que nem me lembro mais, eu moro com meus pais”.
                </p>
                <strong>A partir dessa afirmativa e a respeito dos estudos sociológicos sobre família, é verdadeiro o que se afirma em:</strong>
                <br>
                <input name="analisar_1" value="2" type="radio">A) A monogamia é uma característica geral da instituição familiar.
                <br>
                <input name="analisar_1" value="1" type="radio">B) A proteção, a autoridade e o afeto são características que ocorrem apenas nas sociedades capitalistas.
                <br>
                <input name="analisar_1" value="3" type="radio">C) A família exerce dois tipos de socialização — primária e secundária —, sendo a segunda a mais importante.
                <br>
                <input name="analisar_1" value="5" type="radio">D) A socialização é uma das mais importantes funções da família por preparar o ingresso da criança na sociedade.
                <br>
                <input name="analisar_1" value="4" type="radio">E) A família conjugal é típica de sociedades tradicionais e consiste em um grande número de parentes que habitam juntos e nutrem sentimento de lealdade.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 10) Revisar sistema de pontos</span> As eleições no Brasil são noticiadas, por vezes, como a "festa da democracia". Essa expressão faz mesmo muito sentido. Devemos sempre nos lembrar que o voto direto é uma conquista muito recente. Até poucos anos atrás, por exemplo, os governadores dos estados eram indicados pelo presidente da República, não eram escolhidos pelos cidadãos. A consulta popular é a forma pela qual a população escolhe aqueles que vão compor os principais cargos dos poderes Legislativo e Executivo. Assinale a afirmativa que INDICA o nome dessa forma de organização do Estado.
                </p>
                <br>
                <input name="analisar_2" value="1" type="radio">A) Democracia direta.
                <br>
                <input name="analisar_2" value="5" type="radio">B) Democracia representativa.
                <br>
                <input name="analisar_2" value="4" type="radio">C) Democracia participativa.
                <br>
                <input name="analisar_2" value="3" type="radio">D) Democracia deliberativa.
                <br>
                <input name="analisar_2" value="1" type="radio">E) Ditadura popular.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 11)</span> <strong>Sobre cidadania, marque com V as afirmativas verdadeiras e com F, as falsas.</strong>
                  <br>
                  <br>
                  (  ) A cidadania está ligada à possibilidade de se votar nas eleições, de modo que apenas os indivíduos maiores de 16 anos são considerados cidadãos.
                  <br>
                  (  ) O indivíduo que goza de direitos civis e políticos e que está sujeito a uma série de deveres perante o Estado é cidadão.
                  <br>
                  (  ) Um exemplo de atuação cidadã é saber se posicionar contra o abandono e a exclusão das pessoas necessitadas e de outros grandes problemas existentes no país.
                </p>
                <input name="analisar_3" value="2" type="radio">A) F V F.
                <br>
                <input name="analisar_3" value="3" type="radio">B) V F V.
                <br>
                <input name="analisar_3" value="1" type="radio">C) V F F.
                <br>
                <input name="analisar_3" value="5" type="radio">D) F V V.
                <br>
                <input name="analisar_3" value="4" type="radio">E) V V V.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 12) Revisar</span>
                  <br>
                  <strong>Texto 1</strong> Abaixo Ranking (Posições) do Índice de Desenvolvimento Humano IDH de alguns países.
                  <br>
                  <img src="http://localhost:8000/imagens/qt12.png">
                  <br>
                  <strong>Texto 2</strong> Alguns dados sobre estes países:
                  <br>
                  <ul>
                    <li>Brasil Sexta maior economia do Mundo.</li>
                    <li>Demais países não aparecem nem no Top 10 da economia mundial.</li>
                  </ul>
                </p>
                <strong>Pelos dados revelados em ambos os textos é correto afirma que eles:</strong>
                <br>
                <input name="analisar_4" value="1" type="radio">A) São concordantes.
                <br>
                <input name="analisar_4" value="5" type="radio">B) São contraditórios.
                <br>
                <input name="analisar_4" value="4" type="radio">C) São semelhantes.
                <br>
                <input name="analisar_4" value="1" type="radio">D) Todas as alternativas.
                <br>
                <input name="analisar_4" value="2" type="radio">E) Nenhuma das alternativas.
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab5">
            <div class="panel-body">
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 13)</span>
                  <br>
                  “Há soldados armados
                  <br>
                  Amados ou não
                  <br>
                  Quase todos perdidos
                  <br>
                  De armas na mão
                  <br>
                  Nos quartéis lhes ensinam
                  <br>
                  Uma antiga lição
                  <br>
                  De morrer pela pátria
                  <br>
                  E viver sem razão”( Geraldo Vandré ).
                </p>
                <strong>A musica relaciona-se ao regime militar no Brasil, sobre este período histórico a data que remete a tal fato é:</strong>
                <br>
                <input name="memorizar_1" value="3" type="radio">A) 1974 ~ 1988.
                <br>
                <input name="memorizar_1" value="2" type="radio">B) 1950 ~ 1980.
                <br>
                <input name="memorizar_1" value="5" type="radio">C) 1964 ~ 1985.
                <br>
                <input name="memorizar_1" value="4" type="radio">D) 1954 ~ 1985.
                <br>
                <input name="memorizar_1" value="1" type="radio">E) 2000 ~ 2015.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 14)</span> O presidente Fernando Collor de Melo deixou a presidência em 1992.
                  <br>
                  <img src="http://localhost:8000/imagens/qt14.jpg">
                  <br>
                </p>
                <strong>Qual o nome do Processo que ocasionou a saída de tal presidente ?</strong>
                <br>
                <input name="memorizar_2" value="2" type="radio">A) Revolução.
                <br>
                <input name="memorizar_2" value="3" type="radio">B) Manifesto.
                <br>
                <input name="memorizar_2" value="5" type="radio">C) Impeachment.
                <br>
                <input name="memorizar_2" value="4" type="radio">D) Petição.
                <br>
                <input name="memorizar_2" value="1" type="radio">E) Nepotismo.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 15)</span> Quais as 3 Características básicas de Estado-Nação.
                </p>
                <strong>Indique a alternativa correta que contém essas características.</strong>
                <br>
                <input name="memorizar_3" value="2" type="radio">A) Territorio, Cultura e Nação.
                <br>
                <input name="memorizar_3" value="3" type="radio">B) Território, Povo e Soberania.
                <br>
                <input name="memorizar_3" value="4" type="radio">C) Soberania, Nacionalismo e Território.
                <br>
                <input name="memorizar_3" value="5" type="radio">D) Nacionalismo, Soberania e Cidadania.
                <br>
                <input name="memorizar_3" value="1" type="radio">E) Cidadania, Corrupção e Prefeitos.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 16)</span> Qual o conceito de estado segundo a sociologia?
                </p>
                <br>
                <input name="memorizar_4" value="5" type="radio">A) "conjunto das instituições (governo, forças armadas, funcionalismo público etc.) que controlam e administram uma nação" .
                <br>
                <input name="memorizar_4" value="2" type="radio">B) Conjunto de povos distribuídos em um só território.
                <br>
                <input name="memorizar_4" value="4" type="radio">C) Nação que está sujeito a uma soberania.
                <br>
                <input name="memorizar_4" value="2" type="radio">D) Determinado território controlado por um Governo.
                <br>
                <input name="memorizar_4" value="1" type="radio">E) Estados Brasileiros.
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab6">
            <div class="panel-body">
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 17)</span> Segundo seus conhecimentos e o  que lhe foi passado nas aulas de sociologia indique os 3 modos de estratificação social existentes no mundo.
                </p>
                <br>
                <input name="aplicar_1" value="4" type="radio">A) Classe Social, Estamentos e Burguesia.
                <br>
                <input name="aplicar_1" value="2" type="radio">B) Estamentos, Burguesia e Proletariado.
                <br>
                <input name="aplicar_1" value="1" type="radio">C) Nobreza, Xátrias e Brâmanes.
                <br>
                <input name="aplicar_1" value="3" type="radio">D) Castas, Nobreza e Clero.
                <br>
                <input name="aplicar_1" value="5" type="radio">E) Estamentos, Castas e Classe Social.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 18)</span> Assinale a alternativa que <strong>CONTÉM</strong> os poderes que compõem o Estado brasileiro.
                </p>
                <br>
                <input name="aplicar_2" value="4" type="radio">A) Executivo, Distributivo e Legislativo.
                <br>
                <input name="aplicar_2" value="1" type="radio">B) Prefeitura municipal, Governo do estado e Governo federal.
                <br>
                <input name="aplicar_2" value="3" type="radio">C) Governo Federal, Senado Federal e Câmara dos deputados.
                <br>
                <input name="aplicar_2" value="5" type="radio">D) Executivo, Legislativo e Judiciário.
                <br>
                <input name="aplicar_2" value="2" type="radio">E) Policial, Secretariado e Judiciário.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 19)</span> Assinale, dentre as opções a seguir, aquela que contém a definição de Estado mais próxima à de Marx.
                </p>
                <br>
                <input name="aplicar_3" value="2" type="radio">A) Instituição que detém o monopólio sobre o uso legítimo da força.
                <br>
                <input name="aplicar_3" value="4" type="radio">B) Instituição responsável pela manutenção da paz no interior de uma sociedade.
                <br>
                <input name="aplicar_3" value="5" type="radio">C) Instituição de sustentação ideológica e legal da classe dominante.
                <br>
                <input name="aplicar_3" value="3" type="radio">D) Instituição racional-legal responsável pela manutenção da ordem.
                <br>
                <input name="aplicar_3" value="1" type="radio">E) Instituição que realiza a universalização do espírito racional.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 20)</span> Sistema de Governo está relacionado ao modo como interagem o Poder Executivo e o Poder Legislativo em suas funções governamentais, ou seja, é a maneira pela qual o poder político é dividido e exercido no âmbito de um Estado. O sistema de governo varia de acordo com o grau de separação dos poderes. São sistemas de governo o Presidencialismo e o Parlamentarismo.
                </p>
                <strong>O texto esclarece a definição e a forma de encadeamento de:</strong>
                <br>
                <input name="aplicar_4" value="5" type="radio">A) Poder politíco.
                <br>
                <input name="aplicar_4" value="1" type="radio">B) Sistema de governo.
                <br>
                <input name="aplicar_4" value="3" type="radio">C) Poderes.
                <br>
                <input name="aplicar_4" value="4" type="radio">D) Estados.
                <br>
                <input name="aplicar_4" value="2" type="radio">E) Poder legislatico.
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab7">
            <div class="panel-body">
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 21)</span> Segundo os conhecimentos que lhe é passado em sala de aula marque a alternativa correta que indica como Émile Durkheim concebe a sociedade:
                  <br>
                  <img src="http://localhost:8000/imagens/qt21.jpg">
                  <br>
                </p>
                <br>
                <input name="criar_1" value="3" type="radio">A) Como um corpo vivo, um organismo cujas partes – cada instituição e cada individuo – cumprem papeis determinados e existe em função do todo.
                <br>
                <input name="criar_1" value="1" type="radio">B) Como um conjunto que atua por meio da racionalidade.
                <br>
                <input name="criar_1" value="5" type="radio">C) Como um corpo vivo, um organismo cuja a instituição cumpre papéis específicos e os indivíduos agem de forma livre.
                <br>
                <input name="criar_1" value="4" type="radio">D) Como um corpo vivo, um organismo cujas partes – cada instituição e cada individuo – atuam de formas indeterminadas e existe em função do todo.
                <br>
                <input name="criar_1" value="2" type="radio">E) Como um conjunto onde ambas as partes atuam tanto de formas determinadas como indeterminadas.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 22)</span> Ao observarmos a charge, percebe-se que a maior parte da população encara a politica como politicagem ou politica partidária, essas duas ultimas que fogem totalmente do verdadeiro significado de politica. Em virtude disso o que a população deveria fazerpara eliminação desse pensamento tão contrario ao verdadeiro significado de politica;
                  <br>
                  <img src="http://localhost:8000/imagens/qt22.jpg">
                  <br>
                </p>
                <br>
                <input name="criar_2" value="2" type="radio">A) A população  não deve mais importa-se com a politica pois a mesma só interessa aos politico e não cabe intervenção por parte da população.
                <br>
                <input name="criar_2" value="5" type="radio">B) A população deve criar uma melhor visão sobre a politicagem pois a mesma contribui bastante para o desenvolvimento do país..
                <br>
                <input name="criar_2" value="3" type="radio">C) O povo deve combater esse pensamento antigo sobre a politica e passar a vê-la como um instrumento de desenvolvimento de uma nação de modo que todos devem intervir sobre ela  e não ter nojo da mesma.
                <br>
                <input name="criar_2" value="4" type="radio">D) O povo deve se manter neutro em relação a politica pois não a mais nada que possa ser feito para controlar a situação caótica por que passa a politica atualmente.
                <br>
                <input name="criar_2" value="1" type="radio">E) Ter mais nojo da politica, pois a mesma é comandada por políticos corruptos que não fazem nada para melhoria e desenvolvimento.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 23)</span> A charge mostra uma pratica ilícita ainda comum nos dias de hoje, o nepotismo, essa pratica acontece quando um politico emprega familiares em órgãos públicos, com a finalidade de beneficiar os mesmos. Sobre essa pratica qual a alternativa mais plausível:
                  <br>
                  <img src="http://localhost:8000/imagens/qt23.jpg">
                  <br>
                </p>
                <br>
                <input name="criar_3" value="3" type="radio">A) A pratica do nepotismo deve continuar pois ela não afeta a população de maneira alguma.
                <br>
                <input name="criar_3" value="1" type="radio">B) Cabe não só a justiça combater essa pratica, a população também deve contribuir para acabar com essa pratica denunciando os casos de nepotismo.
                <br>
                <input name="criar_3" value="4" type="radio">C) A pratica deve continuar pois ela benéfica para as pessoas que utilizam ela gerando capital para as mesmas e contribuindo para economia do lugar.
                <br>
                <input name="criar_3" value="2" type="radio">D) Deve ser encarada com normalidade, pois ainda é comum em alguns lugares.
                <br>
                <input name="criar_3" value="5" type="radio">E) Cabe não só a justiça combater essa pratica, a população também deve contribuir para acabar com a mesma aceitando subornos para calar-se diante disso.
              </div>
              <div class="form-group">
                <p>
                  <span class="label label-primary" style="margin-right:10px">Questão 24)</span> A charge a seguir retrata a indignação de um professor de uma forma irônica sobre o baixo salario do professor. Sobre esta situação o que você faria para melhorar as condições e vida profissional do professor:
                  <br>
                  <img src="http://localhost:8000/imagens/qt24.jpg">
                  <br>
                </p>
                <br>
                <input name="criar_4" value="1" type="radio">A) Aumentaria os salários dos professores e diminuiria a carga horaria dos mesmos.
                <br>
                <input name="criar_4" value="3" type="radio">B) Criaria condições pros professores mudarem de profissão.
                <br>
                <input name="criar_4" value="5" type="radio">C) Criaria condições pros professores desenvolverem o seu trabalho com excelência e aumentaria seus salários.
                <br>
                <input name="criar_4" value="2" type="radio">D) Diminuiria o numero de aulas dos professores.
                <br>
                <input name="criar_4" value="4" type="radio">E) Elaboraria um plano de carreira para os mesmos possibilitando a eles crescerem na profissão por meio de especializações, cursos e etc. além de reajustar o piso salarial da classe.
              </div>
              <div class="form-group">
              <div class="col-md-6"></div>
                <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Salvar</button>
                </div>
              </div>
            </div>
          </div>
          <ul class="pager wizard">
            <li class="previous first" style="display:none;"><a href="#">Primeira</a></li>
            <li class="previous"><a href="#">Anterior</a></li>
            <li class="next last" style="display:none;"><a href="#">Última</a></li>
            <li class="next"><a href="#">Próximo</a></li>
          </ul>
        </div>
      </div>

    </section>
    </form>
</div>
<script src="http://localhost:8000/js/jquery-2.1.4.min.js"></script>
<script src="http://localhost:8000/js/prettify.js"></script>
<script src="http://localhost:8000/js/bootstrap.min.js"></script>
<script src="http://localhost:8000/js/jquery.bootstrap.wizard.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
    }, onTabShow: function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      var $current = index+1;
      var $percent = ($current/$total) * 100;
      $('#rootwizard').find('.bar').css({width:$percent+'%'});
    }});
  });
</script>
</body>
</html>
