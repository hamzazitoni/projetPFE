    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/887c56acc8.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('css/authCss/signIn.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
    </script>

    <div class="container">

    </div>

    <div id="sign">
        <div class="img_sign">
          <img src="{{ asset('images/authImg/bg_sign.png') }}" width="70%">
        </div>
        <div class="container">
          <header>Inscription</header>
            @if (session('error'))
                <span class="error">
                    {{ session('error') }}
                </span>
                @php
                    session()->forget('error');
                @endphp
            @endif
            @if (session()->has('confirmError'))
                <span class="error">
                    {{ session('confirmError') }}
                </span>
                @php
                    session()->forget('confirmError');
                @endphp
            @endif
          <div class="progress-bar">
            <div class="step">
              <p>Nom</p>
              <div class="bullet">
                <span>1</span>
              </div>
              <div class="check fas fa-check"></div>
            </div>
            <div class="step">
              <p>Contact</p>
              <div class="bullet">
                <span>2</span>
              </div>
              <div class="check fas fa-check"></div>
            </div>
            <div class="step">
              <p>Naissance</p>
              <div class="bullet">
                <span>3</span>
              </div>
              <div class="check fas fa-check"></div>
            </div>
            <div class="step">
              <p>Envoie</p>
              <div class="bullet">
                <span>4</span>
              </div>
              <div class="check fas fa-check"></div>
            </div>
          </div>
          <div class="form-outer">
            <form action=" {{ route('register')}}" method="POST">
                @csrf
                <div class="page slide-page">
                    <div class="title">Info:</div>
                    <div class="field">
                    <div class="label">Nom</div>
                    <input type="text" id="name" value="{{ old('name')}}" name="name" placeholder="Votre nom">
                    </div>
                    <div class="field">
                    <div class="label">Prénom</div>
                    <input type="text" id="firstName" value="{{ old('firstName')}}" name="firstName" placeholder="Votre Prénom">
                    </div>
                    <div class="field">
                    <button class="suivant1 firstNext next"  >Suivant</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Contact Info:</div>
                    <div class="field">
                    <div class="label">Adresse Mail</div>
                    <input type="text" id="email" value="{{ old('email')}}" name="email" placeholder="Votre E-mail">
                    </div>
                    <div class="field">
                    <div class="label">Apogée</div>
                    <input type="text" id="appoge" value="{{ old('appoge')}}" name="appoge" placeholder="Votre Numéro Appogée">
                    </div>
                    <div class="field btns">
                    <button class="prev-1 prev">Precedant</button>
                    <button class="next-1 next">Suivant</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title" >Date de naissance:</div>
                    <div class="field">
                    <div class="label">Date</div>
                    <input type="text" id="date" value="{{ old('date')}}" name="date" placeholder="date de naissance" >
                    </div>
                    <div class="field">
                    <div class="label">Genre</div>
                    <select name="genre" id="genre">
                        <option value="home">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                    </div>
                    <div class="field btns">
                    <button class="prev-2 prev">Precedant</button>
                    <button class="next-2 next">Suivant</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Mot de Passe:</div>
                    <div class="field">
                    <div class="label">Nouveau </div>
                    <input type="password" value="{{ old('password')}}" name="password" id="password" required>
                    </div>
                    <div class="field">
                    <div class="label">Confirmation</div>
                    <input type="password" name="confirmPassword" id="confirmPassword" required>
                    </div>
                    <div class="field btns">
                    <button class="prev-3 prev">Precedant</button>
                    <button class="submit">Envoyer</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>

    <script src="{{asset('js/authJs/signIn.js')}}"></script>
    <script src="{{asset('js/authJs/signinFormValidation.js')}}"></script>

