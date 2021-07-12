<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
      *, *::after, *::before {
    box-sizing: border-box;
  }
  
  :root {
    --cell-size: 100px;
    --mark-size: calc(var(--cell-size) * .9);
    --blue-col : #30BCED;
  }
  
  body {
    margin: 0;
    font-family: 'Lato',sans-serif;
    font-size: 14px;
    background:#fff;
    width: 100%;
    overflow-x: hidden;
  }
  
  
  /* Header styles */
  header{
    width: 100%;
    height: 45px;
    background-color: #30BCED;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px;
  }
  .burger{
    cursor: pointer;
  }
  .burger span{
    background-color: #fff;
    height: 2.5px;
    width: 18px;
    margin-bottom: 3px;
    border-radius: 1px;
    display: block;
  }
  header .header-middle-part{
    color :#fff;
    letter-spacing: .7px;
  }
  
  /*left menu */
  
  .left-menu{
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:#0d1b2a;
    overflow-x: hidden;
    transition: all 0.5s;
    padding-top: 10px;
    display: flex;
    align-items: center;
    flex-direction: column;
  }
  .left-menu div img{
    width: 70%;
    position: relative;
    left:10px;
    transition: 0.3s;
  }
  .left-menu div p{
    color:#fff;
    font-weight: bold;
    text-align: center;
    position: relative;
    top:-10px;
    left:-5px;
    transition: 0.3s;
  }
  .left-menu div a{
    text-decoration: none;
    color:#fff;
    background-color: #30BCED;
    padding: 8px 19px;
    display: inline-block;
    border-radius: 100px;
    font-size: 13px;
  
  }
  .collapsed{
    width: 220px;
  }
  .coll{
    margin-left: 220px;
  }
  .main-page{
    width: 100%;
    transition: 0.5s;
  }
  /********************/
  
  
  .container{
    height: 100%;
    border: 5px solid #eee;
    width: 60%;
    padding:5px 20px;
    margin: 60px auto;
    border-radius: 5px;
  }

  
  /* description style */
  
  .description{
    width: 75%;
    margin : 60px auto;
  }
  .exercice-title h2{
    font-size: 25px;
    position: relative;
  }
  .exercice-title h2::before{
    position: absolute;
    content:'';
    left:0;
    top:-10px;
    width: 30px;
    background-color: #30BCED;
    height: 6px;
    border-radius: 100px;
  }
  .exercice-description {
    border : 1px solid #ccc;
    padding: 5px 12px;
    border-radius: 5px;
    box-shadow: 1px 1px 1px 1px rgba(0,0,0,.1);
    border-left: 3  px solid #30BCED;
  }
  .exercice-description p {
    font-size: 17px;
    line-height: 26px;
  }
  </style>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src='jquery.svg3dtagcloud.min.js'></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


  <script src="https://kit.fontawesome.com/887c56acc8.js" crossorigin="anonymous"></script>
  <title>section3 introduction</title>
</head>
<body>
  <div class="left-menu">
      <div class="img-icon">
        <img src="./iconM2.svg" alt="">
        <p>Gestion du Temps</p>
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
  

    <div class="description">
        <h3 class="title text-center"> MODULE DE RESOLUTION CREATIVE DE PROBLEME</h3>
        <div class="exercice-title">
            <div class="row">
                <div class="col h-auto d-inline-block">
                <h2>Introduction</h2>
                </div>
                <div class="col-2 d-flex align-content-center flex-wrap ">
                    <div class="validate-btn ">
                        <a href="#"> <button >Chapitre suivant <i class="fas fa-arrow-right" ></i></button></a>
                    </div> 
                </div>

            </div>
        </div>
        <div class="exercice-description">
            <p>la vidéo ci-dessous va vous présenter les trois étapes du processus de résolution créative de problèmes</p>
        </div>
    </div>
    <div class="container ">
        <div class="ratio ratio-16x9">
            <iframe src="video/ResolutionCreative.mp4" title="introduction" allowfullscreen></iframe>
        </div>
        {{-- <div class="validate-btn position-absolute bottom-0 end-0">
            <a href="#"> <button >Chapitre suivant <i class="fas fa-arrow-right" ></i></button></a>
        </div>  --}}
    </div>

</body>
</html>