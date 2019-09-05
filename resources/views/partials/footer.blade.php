<!-- Footer -->
    <footer class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Carros Colecionáveis 2019</small>
        </div>
    </footer>            

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="wpp position-fixed ">
        <a class="text-center text-white rounded" href="https://wa.me/5531998702664">
            <i class="fab fa-whatsapp fa-2x"></i>
        </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('js/jquery.easing.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/freelancer.js')}}"></script>
    <script src="{{asset('js/chevinho.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('#telefone').mask('(00) 0000-00009');
        });
    </script>