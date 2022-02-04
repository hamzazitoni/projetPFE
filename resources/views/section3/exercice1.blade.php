@extends('section3base')
@section('content')

<div class="description">
  <h3 class="title text-center">Prise de Conscience</h3>
  <div class="exercice-title">
      <div class="row">
          <div class="col h-auto d-inline-block">
          <h2>Définir les Priorités </h2>
          </div>
          <div class="col-2 d-flex align-content-center flex-wrap ">
              <div class="validate-btn ">
                  <a href="{{ route('s3_exercice1_2',['id'=>3]) }}" id='passer'> <button >Exercice suivant <i class="fas fa-arrow-right " ></i></button></a>
              </div>
          </div>

      </div>
  </div>
  <div class="exercice-description">
      <p>Prioriser ces problèmes selon vous</p>
  </div>
</div>
<div class="container bg-primary bg-gradient">
      <div class="list">
        <input type="text" class="input" placeholder="Ajoute un problem" maxlength="66"/>
        <span class="add">+</span>
      </div>
      <ul>
        <li class="draggable" draggable="true">Comment réussir un examen donné</li>
        <li class="draggable" draggable="true">Comment obtenir l'emploi de mes rêves</li>
        <li class="draggable" draggable="true">Comment garder en ordre mon bureau ma chambre qui sont toujours désordonnés </li>
        <li class="draggable" draggable="true">Comment résoudre les problèmes récurrents que j'ai avec mon meilleur ami </li>
      </ul>


    </div>
      <script>
        var score = 50;
        var btn = document.querySelector('.add');
var remove = document.querySelector('.draggable');

function dragStart(e) {
  this.style.opacity = '0.4';
  dragSrcEl = this;
  e.dataTransfer.effectAllowed = 'move';
  e.dataTransfer.setData('text/html', this.innerHTML);
};

function dragEnter(e) {
  this.classList.add('over');
}

function dragLeave(e) {
  e.stopPropagation();
  this.classList.remove('over');
}

function dragOver(e) {
  e.preventDefault();
  e.dataTransfer.dropEffect = 'move';
  return false;
}

function dragDrop(e) {
  if (dragSrcEl != this) {
    dragSrcEl.innerHTML = this.innerHTML;
    this.innerHTML = e.dataTransfer.getData('text/html');
  }
  return false;
}

function dragEnd(e) {
  var listItens = document.querySelectorAll('.draggable');
  [].forEach.call(listItens, function(item) {
    item.classList.remove('over');
  });
  this.style.opacity = '1';
}

function addEventsDragAndDrop(el) {
  el.addEventListener('dragstart', dragStart, false);
  el.addEventListener('dragenter', dragEnter, false);
  el.addEventListener('dragover', dragOver, false);
  el.addEventListener('dragleave', dragLeave, false);
  el.addEventListener('drop', dragDrop, false);
  el.addEventListener('dragend', dragEnd, false);
}

var listItens = document.querySelectorAll('.draggable');
[].forEach.call(listItens, function(item) {
  addEventsDragAndDrop(item);
});

function addNewItem() {
  var newItem = document.querySelector('.input').value;
  if (newItem != '') {
    document.querySelector('.input').value = '';
    var li = document.createElement('li');
    var attr = document.createAttribute('draggable');
    var ul = document.querySelector('ul');
    li.className = 'draggable';
    attr.value = 'true';
    li.setAttributeNode(attr);
    li.appendChild(document.createTextNode(newItem));
    ul.appendChild(li);
    addEventsDragAndDrop(li);
    score = score + 5;
  }
}

btn.addEventListener('click', addNewItem);
document.getElementById('passer').addEventListener('click',()=>{
  $.get('http://127.0.0.1:8000/score/add', { sectionID: 3 },
        (data) => {
            document.getElementById('score').innerHTML = data.score;
        })
    $.get('http://127.0.0.1:8000/vie/get',
        (data) => {
            document.getElementById('progression').style.width = data.vie + "%";
        })
})
      </script>
@endsection
