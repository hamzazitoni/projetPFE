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
                <form action=" {{ route('checkResetPassord')}}" method="POST">
                    @csrf
                    <img src="{{ asset('/images/authImg/avatarLogin.png') }}">
                    <h3 class="title titre">Nouveau mot de passe</h3>
                    <div class="input-div one">
                        <div class="i">
                                <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            @if(old('email'))
                            @else
                                <h5>Email</h5>
                            @endif
                            <input type="text" class="input" value="{{old('email')}}" name="email" placeholder="">
                        </div>
                    </div>
                    @error('email')
                        <span class="error">
                            Donnez une adresse e-mail valide.
                        </span>
                    @enderror
                    @if (session()->has('confirmError'))
                        <span class="error">
                            Aucun compte trouvé pour cette adresse e-mail.
                        </span>
                        @php
                            session()->forget('confirmError');
                        @endphp
                    @endif
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                                @if(old('passwordnew'))
                                @else
                                    <h5>Mot de Passe</h5>
                                @endif
                                <input type="password" class="input" value="{{old('passwordnew')}}" name="passwordnew" placeholder="">
                        </div>
                    </div>
                    @error('passwordnew')
                        <span class="error">
                            Le mot de passe doit contenir aumoins 6 caractères.
                        </span>
                    @enderror
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            @if(old('passwordcomfirm'))
                            @else
                                <h5>Confirmation</h5>
                            @endif
                            <input type="password" class="input" value="{{old('passwordcomfirm')}}" name="passwordcomfirm" placeholder="">
                        </div>
                    </div>
                    @error('passwordcomfirm')
                        <span class="error">
                            Le mot de passe doit contenir aumoins 6 caractères.
                        </span>
                    @enderror
                    @if (session()->has('confirmPasswordError'))
                        <span class="error">
                            Le mot de passe de confirmation est différent de l'initial.
                        </span>
                        @php
                            session()->forget('confirmPasswordError');
                        @endphp
                    @endif
                    <a href="{{ route('login')}}">Se connecter</a>
                    <a href="{{ route('signin')}}">Pas de compte ?</a>
                    <input type="submit" class="btn" value="Changer">
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/authJs/login.js')}}"></script>

