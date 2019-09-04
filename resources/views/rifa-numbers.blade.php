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
    <div class="container">
        <section class="page-section clearfix">
            <br>
            <h2>Rifa do {{$rifa->name}}</h2>
            <p><b>Valor unitário:</b> $30,00</p>
            <p><b>Sobre o veículo:</b> {{$rifa->description}}</p>
            <br>
            <p><b>Total de números :</b> {{$rifa->total}}</p>
            <p><b>Números Disponíveis : </b>{{$rifa->disponiveis}}</p>
            <p><b>Números Pagos : </b>{{$rifa->pagos}}</p>

        </section>
        <section>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-danger btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">Ver Fotos</button>
                </div>
                <div class="col-md-6 number-filters">
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
            @foreach($rifa->numbers as $num)
            <div class="number @if($num->status == 1) reserved @elseif($num->status == 2) done @else number-disponivel @endif" id="{{$num->id}}" data_number="{{$num->number}}" style="display: inline-table;">
                {{$num->number}}
            </div>
            @endforeach
            <button type="button" class="btn btn-success btn-block" id="showModal">Escolher números</button>
            <br>
        </section>
    

    <!-- Modal -->
    <div class="modal fade" id="concluir-cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Finalizar Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
                        <input type="email" name="email" placeholder="E-mail *" class="form-control" required="required">
                        <br>
                        <input type="test" name="telefone" id="telefone" placeholder="Telefone (WhatsApp) *" class="form-control" required="required">
                        <br>
                        <input type="checkbox" id="age-checked">
                        <label for="age-checked">Sou maior de <u>18 anos</u></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-success" value="Finalizar">
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
                                <img class="img-responsive" src="{{asset('img/foto3.jpeg')}}">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/foto5.jpeg')}}">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/foto2.jpeg')}}">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/foto1.jpeg')}}">
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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="{{asset('js/chevinho.js')}}"></script>
</body>

</html>
