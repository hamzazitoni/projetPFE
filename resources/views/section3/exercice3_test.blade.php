{{-- @extends('section2base')
@section('content')
<style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
     
    }
  </style>
  <div class="description">
    <h3 class="title text-center">Eclairage</h3>
    <div class="exercice-title">
        <div class="row">
            <div class="col h-auto d-inline-block">
              <h2> Redéfinir un problème  </h2>
            </div>
            <div class="col-2 d-flex align-content-center flex-wrap ">
              <a class="btn disabled " id="passer" role="button">Exercice suivant <i class="fas fa-arrow-right " ></i></a>
            </div>
        </div>
    </div>
    <div class="exercice-description">
        <p> Cette 
      </p>
    </div>
  </div>
  <div class="container" style="overflow:auto;">

        <span> Tool:
            <select id="tool">
              <option value="brush">Brush</option>
              <option value="eraser">Eraser</option>
            </select>
                <div id="container" style=" background-image: url('/images/section3/puzzle.jpg');
                                            background-size: contain;
                                            background-repeat: no-repeat;
                                            position: relative;
                                            top: 20px;
                                            height:80vh;
                                            left: 300px;
                                            bottom: 50px;
                                            
                                            ">
                                            
                </div>

  </div>
  <script>
    var width = window.innerWidth;
    var height = window.innerHeight ;
    // var imgBac=document.getElementById('container').style.background='red';

    // first we need Konva core things: stage and layer
    var stage = new Konva.Stage({
      container: 'container',
      width: width,
      height: height,
    });

    var layer = new Konva.Layer();
    stage.add(layer);

    // then we are going to draw into special canvas element
    var canvas = document.createElement('canvas');
    canvas.width = stage.width();
    canvas.height = stage.height();

    // created canvas we can add to layer as "Konva.Image" element
    var image = new Konva.Image({
      image: canvas,
      x: 0,
      y: 0,
    });
    layer.add(image);

    // Good. Now we need to get access to context element
    var context = canvas.getContext('2d');
    context.strokeStyle = '#df4b26';
    context.lineJoin = 'round';
    context.lineWidth = 5;

    var isPaint = false;
    var lastPointerPosition;
    var mode = 'brush';

    // now we need to bind some events
    // we need to start drawing on mousedown
    // and stop drawing on mouseup
    image.on('mousedown touchstart', function () {
      isPaint = true;
      lastPointerPosition = stage.getPointerPosition();
    });

    // will it be better to listen move/end events on the window?

    stage.on('mouseup touchend', function () {
      isPaint = false;
    });

    // and core function - drawing
    stage.on('mousemove touchmove', function () {
      if (!isPaint) {
        return;
      }

      if (mode === 'brush') {
        context.globalCompositeOperation = 'source-over';
      }
      if (mode === 'eraser') {
        context.globalCompositeOperation = 'destination-out';
      }
      context.beginPath();

      var localPos = {
        x: lastPointerPosition.x - image.x(),
        y: lastPointerPosition.y - image.y(),
      };
      context.moveTo(localPos.x, localPos.y);
      var pos = stage.getPointerPosition();
      localPos = {
        x: pos.x - image.x(),
        y: pos.y - image.y(),
      };
      context.lineTo(localPos.x, localPos.y);
      context.closePath();
      context.stroke();

      lastPointerPosition = pos;
      // redraw manually
      layer.batchDraw();
    });

    var select = document.getElementById('tool');
    select.addEventListener('change', function () {
      mode = select.value;
    });
  </script>



<script src="https://unpkg.com/konva@8.1.1/konva.min.js"></script>

    
@endsection --}}
<!DOCTYPE html>
<html>
  <head>
    <script src="https://unpkg.com/konva@8.1.1/konva.min.js"></script>
    <meta charset="utf-8" />
    <title>Konva Free Drawing Demo</title>
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
  </head>

  <body>
    <div class="description">
        <h3 class="title text-center">Eclairage</h3>
        <div class="exercice-title">
            <div class="row">
                <div class="col h-auto d-inline-block">
                  <h2> Redéfinir un problème  </h2>
                </div>
                <div class="col-2 d-flex align-content-center flex-wrap ">
                  <a class="btn disabled " id="passer" role="button">Exercice suivant <i class="fas fa-arrow-right " ></i></a>
                </div>
            </div>
        </div>
        <div class="exercice-description">
            <p> Cette 
          </p>
        </div>
      </div>






      <div class="container">
            <span> Tool:
            <select id="tool">
            <option value="brush">Brush</option>
            <option value="eraser">Eraser</option>
            </select>
        
                <div id="container" style=" background: url('/images/section3/puzzle.jpg');
                background-size: contain;
                background-repeat: no-repeat;
                position: relative;
                top: 15px;
                left:10%;
                bottom: 50px;
                
                "></div>



</div>
 
    <script>
      var width = window.innerWidth;
      var height = window.innerHeight ;

      // first we need Konva core things: stage and layer
      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height,
      });

      var layer = new Konva.Layer();
      stage.add(layer);

      // then we are going to draw into special canvas element
      var canvas = document.createElement('canvas');
      canvas.width = stage.width();
      canvas.height = stage.height();

      // created canvas we can add to layer as "Konva.Image" element
      var image = new Konva.Image({
        image: canvas,
        x: 0,
        y: 50,
      });
      layer.add(image);

      // Good. Now we need to get access to context element
      var context = canvas.getContext('2d');
      context.strokeStyle = '#df4b26';
      context.lineJoin = 'round';
      context.lineWidth = 5;

      var isPaint = false;
      var lastPointerPosition;
      var mode = 'brush';

      // now we need to bind some events
      // we need to start drawing on mousedown
      // and stop drawing on mouseup
      image.on('mousedown touchstart', function () {
        isPaint = true;
        lastPointerPosition = stage.getPointerPosition();
      });

      // will it be better to listen move/end events on the window?

      stage.on('mouseup touchend', function () {
        isPaint = false;
      });

      // and core function - drawing
      stage.on('mousemove touchmove', function () {
        if (!isPaint) {
          return;
        }

        if (mode === 'brush') {
          context.globalCompositeOperation = 'source-over';
        }
        if (mode === 'eraser') {
          context.globalCompositeOperation = 'destination-out';
        }
        context.beginPath();

        var localPos = {
          x: lastPointerPosition.x - image.x(),
          y: lastPointerPosition.y - image.y(),
        };
        context.moveTo(localPos.x, localPos.y);
        var pos = stage.getPointerPosition();
        localPos = {
          x: pos.x - image.x(),
          y: pos.y - image.y(),
        };
        context.lineTo(localPos.x, localPos.y);
        context.closePath();
        context.stroke();

        lastPointerPosition = pos;
        // redraw manually
        layer.batchDraw();
      });

      var select = document.getElementById('tool');
      select.addEventListener('change', function () {
        mode = select.value;
      });
    </script>
  </body>
</html>