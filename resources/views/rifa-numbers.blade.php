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
    @include('partials.nav-numbers')
    <div class="container">
        <section class="page-section-numbers clearfix">
            <br>
            <h2>Rifa do {{$rifa->name}}</h2>
            <p><b>Valor unitário:</b> $30,00</p>
            <p><b>Sobre o veículo:</b> {{$rifa->description}}</p>
            <br>
            <p><b>Números Disponíveis : </b>{{$rifa->disponiveis}} / {{$rifa->total}}</p>
            <p><b>Números Pagos : </b>{{$rifa->pagos}}</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
        <section>
            <div class="row row-filters">
                <div class="col-md-5 col-sm-12">
                    <button class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Ver Fotos</button>

                    <a class="btn btn-success btn-link" href="{{route('regulamento')}}" target="_blank">Regulamento</a>
                </div>
                <div class="col-md-7 col-sm-12 number-filters">
                    <div class="filter-active filter" id="filter-disponivel">
                        Disponíveis
                    </div>
                    <div class="filter-reserved filter" id="filter-reserved">
                        Reservados
                    </div>
                    <div class="filter-done filter" id="filter-done">
                        Pagos
                    </div>
                </div>
            </div>
        </section>
        <section class="rifa-number">
            <div class="alert alert-danger text-center" role="alert">
                <h3>Rifa cancelada (07/03/2020)</h3>
                <br>
                <h5>Caso você tenha alguma reserva PAGA, e não recebeu nosso contato, entre em contato conosco:</h5> <br>
                <h5>
                Telefone: (31) 99870-2664<br>
                E-mail: ccolecionaveis@gmail.com
                </h5>

            </div>
{{--            @foreach($rifa->numbers as $num)--}}
{{--            <div class="number @if($num->status == 1) reserved @elseif($num->status == 2) done @else number-disponivel @endif" id="{{$num->id}}" data_number="{{$num->number}}" style="display: inline-table;" onclick="gtag('event', 'Selecionar Números', { 'send_to': 'UA-149365568-1', 'event_category': 'clique', 'event_label': 'Selecionar Números' });">--}}
{{--                {{$num->number}}--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--            <br>--}}
{{--            <button type="button" class="btn btn-success btn-block btn-select-number" id="showModal"--}}
{{--            onclick="gtag('event', 'Escolher Números', { 'send_to': 'UA-149365568-1', 'event_category': 'clique', 'event_label': 'Escolher Números' });">Escolher números</button>--}}
{{--            <br>--}}
        </section>


    <!-- Modal -->
    <div class="modal fade" id="concluir-cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Finalizar Reserva</h5>
                </div>
                <form method="post" action="{{route('rifa.post')}}" onsubmit="addElements()" id="form-rifa">
                    <div class="modal-body">
                        <div id="body-form">
                            <p>Números Selecionados:</p>
                        </div>
                        <hr>
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <input type="hidden" value="[]" name="numbers" id="numbers">
                        <input type="text" name="name" placeholder="Nome *" class="form-control" required="required">
                        <br>
                        <input type="email" name="email" placeholder="E-mail" class="form-control" >
                        <br>
                        <input type="test" name="telefone" id="telefone" placeholder="Telefone (WhatsApp) *" class="form-control" required="required">
                        <br>
                        <input type="checkbox" id="age-checked" name="date_of_birth" required="required">
                        <label for="age-checked">Sou maior de <u>18 anos</u></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="closeModal"
                        onclick="gtag('event', 'Cancelar Reserva', { 'send_to': 'UA-149365568-1', 'event_category': 'clique', 'event_label': 'Cancelar Reserva' });">Cancelar</button>
                        <input type="submit" class="btn btn-success" value="Finalizar" onclick="gtag('event', 'Finalizar Reserva', { 'send_to': 'UA-149365568-1', 'event_category': 'clique', 'event_label': 'Finalizar Reserva' });">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="row">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner col-md-12">
                            <div class="item active">
                                <img class="img-responsive" src="{{asset('img/foto3.jpg')}}">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/foto5.jpg')}}">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/foto2.jpg')}}">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/foto1.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="fas fa-arrow-left fa-2x"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="fas fa-arrow-right fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="alert-number" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header danger">
                    <h5 class="modal-title" id="exampleModalLabel">Por favor selecione um número</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Carros Colecionáveis 2019</small>
        </div>
    </footer>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="{{asset('js/chevinho.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('#telefone').mask('(00) 0000-00009');
        });
    </script>
</body>

</html>
