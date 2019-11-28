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
    <div class="container">
        <section class="page-section">
            @if($message == 'success')
                <div class="alert alert-success">
                    <h3 class="text-center">Número reservado com sucesso!</h3>
                    <p class="text-center">Lembre-se que para efetivar a reserva, realize o deposito/transferência em até 48h</p>
                    <!-- <p class="text-center"><b>Valor a ser pago:</b> R${{$total}},00</p> -->
                    <p class="text-center">NÃO ESQUEÇA DE ENVIAR O COMPROVANTE POR WHATSAPP (31)99870-2664</p>
                </div>
            @else
                <div class="alert alert-danger">
                    <h3 class="text-center">Desculpe-nos</h3>
                    <p class="text-center">Não foi possível realizar a reserva, por favor entre em contato conosco. (31)99870-2664</p>
                    <p class="text-center">NÃO ESQUEÇA DE ENVIAR O COMPROVANTE POR WHATSAPP</p>
                </div>
            @endif
        </section>
        @include('partials.dados-bancarios')
    </div>
    @include('partials.footer')

</body>

</html>
