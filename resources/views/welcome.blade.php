<!DOCTYPE html>
<html lang="pt-br">

<head>

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
                        <h1>Não perca a chance de ter um Chevette placa preta!<h1>
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
                            <img class="card-img-top" src="{{asset('img/foto3.jpeg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Chevette Hatch 1980/1980</h5>
                                <hr>
                                <p>Valor Unitário: R$30,00</p>
                                <hr>
                                <div class="row">
                                <div class="rifa-info col-md-4">
                                    <small>Total</small>
                                    <br>
                                    <h3>{{$rifa->total}}</h3>
                                </div>
                                <div class="rifa-info col-md-4">
                                    <small>Reservados</small>
                                    <br>
                                    <h3>{{$rifa->reservadas}}</h3>
                                </div>
                                <div class="rifa-info col-md-4">
                                    <small>Disponíveis</small>
                                    <br>
                                    <h3>{{$rifa->faltando}}</h3>
                                </div>
                            </div>
                                <hr>
                                <a class="btn btn-danger btn-lg btn-block btn-lobby" href="{{route('rifa.index', ['name' => 'chevinho'])}}">Conferir Números</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->  
    <section class="page-section portfolio" id="portfolio">
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
                    <h5>O pagamento é realizado por meio de transferência eletrônica ou depósito bancário</h5>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>

    <!-- About Section -->
    <section class="page-section bg-primary mb-0" id="about">
        <div class="container">

            <!-- About Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary">Quem Somos</h2>
            <br>
            <!-- About Section Content -->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Somos um grupo de amigos apaixonados por carros que nos reunimos com o mesmo interesse: "resgatar" os carros antigos de volta para a nossa convivência!</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">Não sei o que colocar aqui, temos que pensar em um texto</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">

            <!-- Contact Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contato</h2>

            <!-- Contact Section Form -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Nome</label>
                                <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>E-mail</label>
                                <input class="form-control" id="email" type="email" placeholder="E-mail" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Telefone</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Telefone" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Men sagem</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-xl" id="sendMessageButton">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    @include('partials.footer')

</body>

</html>
