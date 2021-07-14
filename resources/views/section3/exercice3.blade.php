@extends('section2base')
@section('content')
<script src="https://unpkg.com/konva@8.1.1/konva.min.js"></script>
    <body>

{{-- <script src="/js/section3/exercice3.js"></script> --}}

        <div class="description">
            <h3 class="title text-center">Imagination</h3>
            <div class="exercice-title">
                <div class="row">
                    <div class="col h-auto d-inline-block">
                      <h2> Réfléchir à de nouvelles solutions</h2>
                    </div>
                    <div class="col-2 d-flex align-content-center flex-wrap ">
                      {{-- <a class="btn disabled " id="passer" role="button">Exercice suivant <i class="fas fa-arrow-right " ></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="exercice-description">
                <p>  Partez du point A, trouvez votre chemin jusqu'au point B. Utilisez votre sourier pour tracer le chemin entre les
                    deux points
              </p>
            </div>
          </div>
        <div class="container">
            <div class="row">
                <div class="col pt-4">
                    <select class="form-select" id="tool">
                        <option value="brush">Brush</option>
                        <option value="eraser">Eraser</option>
                    </select>
                </div>
                <div class="col">
                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                        <button type="button" class="btn btn-primary">valider</button>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div id="container" style=" background: url('/images/section3/puzzle.jpg');
                background-size: contain;
                background-repeat: no-repeat;
                position: relative;
                top: 10%;
                left:10%;
                bottom: 50px;
                
                "></div>
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
    </body>
@endsection