<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/sectionContent/section_css.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sectionContent/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sectionContent/sectionContentHeader.css')}}">
    <title></title>
</head>
<body>
    <div class="left-menu">
        <div class="img-icon">
            <img src="{{ asset('images/sectionContentHeader.jpeg')}}" alt="">
            <p>Résoluon de Prolème</p>
            <a href="">Dashboard</a>
        </div>
    </div>
    <div class="main-page">
      <header>
        <div class="header-left-part">
            <div class="burger">
              <span></span>
              <span></span>
              <span></span>
            </div>
        </div>
        <div class="header-middle-part">
            <p>Auto-évaluation</p>
        </div>
        <div class="header-right-part"></div>
    </div>
    </header>
    <div class="container">
        <div class="card mb-3" style="max: 100%;">
            <div class="row g-0 ">
              <div class="col-4">
                <img src="{{ asset('images/section_image.svg')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-8 ">
                <div class="card-body">
                  <h5 class="card-title badge rounded-pill bg-light text-dark even-larger-badge ">@yield('titleSection')</h5>
                    <div class="row">
                        <!-- DEMO 5 -->
                        <div class="py-1">
                            <div class="row">
                            <!-- DEMO 5 Item-->
                            <div class="col-6 mb-3 mb-lg-0">
                                <div class="hover hover-5 text-white rounded"><img src="https://res.cloudinary.com/mhmd/image/upload/v1570786269/hoverSet-10_ccl30n.jpg" alt="">
                                <div class="hover-overlay"></div>
                                <div class="hover-5-content">
                                    <h3  class="hover-5-title text-uppercase font-weight-light mb-0"> <strong class="font-weight-bold text-white">Notion de Bases </strong></h3>
                                </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- DEMO 5 Item-->
                                <div class="hover hover-5 text-white rounded"><img src="https://res.cloudinary.com/mhmd/image/upload/v1570786267/hoverSet-9_tmoukz.jpg" alt="">
                                <div class="hover-overlay"></div>
                                <div class="hover-5-content">
                                    <h3 class="hover-5-title text-uppercase font-weight-light mb-0"> <strong class="font-weight-bold text-white">Challenge </strong></h3>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                  <div class="row">
                        <div class="col-md-4">
                            @php
                            $score=10;
                            echo"Votre Score: $score";
                        @endphp
                        </div>
                        <div class="col-md-4 offset-md-4"><img src="img/twoStars.png" alt="" srcset="" class="image_badge">

                        </div>
                  </div>
                  <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                    </svg>
                    @php
                    $valider =false;
                     if ($valider) {
                    echo'<div class="alert alert-primary d-flex align-items-center col-md-4 offset-md-3" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                          Chapitre Bien Valider
                        </div>
                  </div>';
                }else {
                    echo'<div class="alert alert-danger d-flex align-items-center col-md-4 offset-md-3" role="alert">
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                        <div class="text-center">
                            Chapitre nest pas encors Valider
                        </div>
                  </div>';
                }
                  @endphp
                </div>
              </div>
            </div>
          </div>
    </div>
  </body>
  </html>
