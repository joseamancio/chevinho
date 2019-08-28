<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chevinho</title>

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
            <br>
            <h5>Números Disponíveis :</h5>

        </section>
        <section class="number-filters">
            <div class="filter-active filter" id="filter-disponivel">
                Disponíveis
            </div>  
            <div class="filter-reserved filter" id="filter-reserved">
                Reservados
            </div>  
            <div class="filter-done filter" id="filter-done">
                Pagos
            </div>            
        </section>
        <section class="rifa-number">
            @foreach($rifa->numbers as $num)
                <div class="number @if($num->status == 1) reserved @elseif($num->status == 2) done @else @endif" id="{{$num->id}}" data_number="{{$num->number}}">
                    {{$num->number}}
                </div>
            @endforeach
            <button type="button" class="btn btn-success btn-block" id="showModal">Escolher números</button>
            <br>
        </section>
    </div>

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
                        <input type="text" name="name" placeholder="Nome" class="form-control">
                        <br>
                        <input type="test" name="telefone" id="telefone" placeholder="Telefone (WhatsApp)" class="form-control">
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
    @include('partials.footer')
</body>

</html>
