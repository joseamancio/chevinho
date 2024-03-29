<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149365568-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149365568-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carros Colecionáves - Chevette</title>

    <!-- Custom fonts for this theme -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="{{asset('css/freelancer.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    @include('partials.nav')
    <!-- Masthead -->
    <header class="masthead">
        <div class="container text-center text-white">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 div-align-center">
                        <h2>Não perca a chance de ter um Chevette placa preta!<h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="page-section-veiculo page-section veiculos" id="veiculos">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary">Sorteios</h2>
            <br>
            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="col-md-4" style="margin: 0 auto">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/chevette-lateral.jpeg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Chevette Hatch 1980/1980</h5>
                                <hr>
                                <p>Valor Unitário: R$30,00</p>
                                <hr>
                                <div class="row">
                                <div class="rifa-info">
                                    <small>Total</small>
                                    <br>
                                    <h3>{{$rifa->total}}</h3>
                                </div>
                                <div class="rifa-info">
                                    <small>Reservados</small>
                                    <br>
                                    <h3>{{$rifa->reservadas}}</h3>
                                </div>
                                <div class="rifa-info">
                                    <small>Disponíveis</small>
                                    <br>
                                    <h3>{{$rifa->faltando}}</h3>
                                </div>
                            </div>
                                <hr>
                                <a class="btn btn-danger btn-lg btn-block btn-lobby" href="{{route('rifa.index', ['name' => 'chevinho'])}}"
                                    onclick="gtag('event', 'Conferir Números', { 'send_to': 'UA-149365568-1', 'event_category': 'clique', 'event_label': 'Conferir Números' });">Conferir Números</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->  
    <section class="page-section portfolio bg-primary " id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary">Como Funciona</h2>
            <br>
            <!-- Portfolio Grid Items -->
            <div class="row row-divisor">
                <!-- Portfolio Item 1 -->
                <div class="col-md-6 col-lg-4 text-center box-border">
                    <i class="fas fa-coins fa-4x"></i>
                    <h5>Serão utilizados os <u>3 últimos</u> digitos do sorteio da Loteria Federal</h5>
                </div>
                <!-- Portfolio Item 2 -->
                <div class="col-md-6 col-lg-4 text-center box-border">
                    <i class="fas fa-ticket-alt fa-4x"></i>
                    <h5>A escolha dos números será realizada na opção "
                        <a href="{{route('rifa.index', ['name' => 'chevinho'])}}">
                            números
                        </a>"
                    </h5>
                </div>
                <!-- Portfolio Item 3 -->
                <div class="col-md-6 col-lg-4 text-center box-border">
                    <i class="fas fa-money-bill-wave fa-4x"></i>
                    <h5>O <a href="{{route('dados-bancarios')}}">pagamento</a> é realizado por meio de transferência eletrônica ou depósito bancário</h5>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>

    <!-- About Section -->
    <!-- <section class="page-section mb-0" id="about">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary">Quem Somos</h2>
            <br>
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Somos um grupo de amigos apaixonados por carros que nos reunimos com o mesmo interesse: "resgatar" os carros antigos de volta para a nossa convivência!</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">Não sei o que colocar aqui, temos que pensar em um texto</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">

            <!-- Contact Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contato</h2>
            <br>
            <!-- Contact Section Form -->
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <h5 class="text-center">Entre em contato conosco através do nosso WhatsApp</h5>
                    <br>
                    <h5 class="text-center">(31)99870-2664</h5>
                </div>
            </div>

        </div>
    </section>

    @include('partials.footer')

</body>

</html>
