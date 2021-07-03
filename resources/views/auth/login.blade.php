<link rel="stylesheet" type="text/css" href="{{asset('css/authCss/login.css')}}">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    @if (session('success'))
        <div class=" alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('connectionError'))
        <div class="error alert-danger">
            {{ session('connectionError') }}
        </div>
    @endif
    <div id="login">
        <img class="wave" src="{{ asset('/images/authImg/wave.png') }}">
        <div class="container">
            <div class="img">
                <img src="{{ asset('/images/authImg/bg.png') }}">
            </div>
            <div class="login-content">
                <form action=" {{ route('check')}}" method="POST">
                    @csrf
                    <img src="{{ asset('/images/authImg/avatarLogin.png') }}">
                    <h2 class="title">Connexion</h2>
                    <div class="input-div one">
                        <div class="i">
                                <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Email</h5>
                            <input type="text" class="input" value="" name="email" placeholder="">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                                <h5>Mot de Passe</h5>
                                <input type="password" class="input" value="" name="password" placeholder="">
                        </div>
                    </div>
                    <a href="#">Mot de Passe Oublié?</a>
                    <a href="{{ route('signin')}}">Pas de compte ?</a>
                    <input type="submit" class="btn" value="Login">
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/authJs/login.js')}}"></script>

