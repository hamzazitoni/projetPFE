@extends('section1/baseSection')
@section('title')
    Apprendre les concepts fondamentaux 
@endsection

@section('contentSection')
    <div class="container" id="all_exercices">
            <div class=" container template" id="exo1">
                <div class="row" id="content">
                    <div class="col-md-3  col-ms-3 col-xs-3 result" id="1">
                        <div class="content">
                            <div class="front" style="background-image: url('card_red.png')">
                                <div class="inner">
                
                                       <h1> Proposition 1 </h1>               
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    Salim veut commander une veste 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-ms-3 col-xs-3 result" id="2">
                        <div class="content">
                            <div class="front" style="background-image: url('card_blue.png')">
                                <div class="inner">
                                    <h1> Proposition 2 </h1>               
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    Saim veut aller au centre Al-Jawhara
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-ms-3 col-xs-3 result" id="3">
                        <div class="content">
                            <div class="front" style="background-image: url('card_red.png')">
                                <div class="inner">
                                    <h1> Proposition 3 </h1>               
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    Salim veut Une veste
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-ms-3 col-xs-3 result" id="4">
                        <div class="content">
                            <div class="front" style="background-image: url('card_blue.png')">
                                <div class="inner">
                                    <h1> Proposition 4 </h1>               
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    Salim souhaite une veste de couleur marron
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" container template" id="exo2">
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
                <div class="bigBox">
                    <div class="up"><span class="glyphicon glyphicon-chevron-up"></span></div>
                    <div class="boxIn">
                        <div class="box" id="boxChoice">
                            <div class="choice " draggable="true" >Marche</div> 
                            <div class="choice trueAns" draggable="true" >Le Prix </div> 
                            <div class="choice" draggable="true" >Acheter</div> 
                            <div class="choice trueAns" draggable="true" >Nom de la Marque</div> 
                            <div class="choice" draggable="true" >Longueur du centre</div> 
                            <div class="choice" draggable="true" >Le salaire du portier</div> 
                            <div class="choice trueAns" draggable="true" >Design et Couleur</div> 
                            <div class="choice" draggable="true" >l'image de la entrée</div> 
                            <div class="choice trueAns" draggable="true" >Qualité</div> 
                        </div>
                    </div>
                    <div class="down"><span class="glyphicon glyphicon-chevron-down"></span></div>
                </div>
                <div class="box" id="boxAns">
                    <h2 class="question">Identifiez les criteres de decision</h2>
                </div>
            </div>
        <div class=" container template" id="exo3">
            <table> 
                <th id="empty"></th>
                <th>Marque</th>
                <th>Qualité</th>
                <th>Prix</th>
                <th>Modèle<br>Couleur</th>
                <th>Notation</th>
                <tr>
                    <td class="veste">Veste 1</td>
                    <td>4</td>
                    <td>3</td>
                    <td>2</td>
                    <td>3</td>
                    <td id="tr1">
                        <div class="slideRangeContainer">
                            <input type="range" min="0" max="4" value="1" id="1Q" class="slideRanger">
                            <div id="value1" class="value"> 0</div>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td class="veste">Veste 2</td>
                    <td>3</td>
                    <td>2</td>
                    <td>2</td>
                    <td>4</td>
                    <td id="tr2">
                        <div class="slideRangeContainer">
                            <input type="range" min="0" max="4" value="1" id="2Q" class="slideRanger">
                            <div id="value2" class="value"> 0</div>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td class="veste">Veste 3</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td id="tr3">
                        <div class="slideRangeContainer">
                            <input type="range" min="0" max="4" value="1" id="3Q" class="slideRanger">
                            <div id="value3" class="value"> 0</div>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td class="veste">Veste 4</td>
                    <td>4</td>
                    <td>4</td>
                    <td>2</td>
                    <td>4</td>
                    <td id="tr4">
                        <div class="slideRangeContainer">
                            <input type="range" min="0" max="4" value="1" id="4Q" class="slideRanger">
                            <div id="value4" class="value"> 0</div>
                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td class="veste" >Veste 5</td>
                    <td>2</td>
                    <td>1</td>
                    <td>4</td>
                    <td>2</td>
                    <td id="tr5">
                        <div class="slideRangeContainer">
                            <input type="range" min="0" max="4" value="1" id="5Q" class="slideRanger">
                            <div id="value5" class="value"> 0</div>
                        </div>
                        
                    </td>
                </tr>
            </table>
            <div id="btn">
                <button class="bt btn validate">Valider</button>
                <a href=' {{ route("chalenge") }} '><button class="bt btn nextbtn "  > Test de Niveau </button></a> 
            </div> 

        </div>
         
    </div>
    <div class="question1">
        <h1>Idenfication du Problème</h1>
        <hr>
        <p> Quel est le problème de Salim ?</p>
        <button class="btn btnFermer">FERMER</button>
    </div>
    <div class="question2">
        <h1>Development d'alternatives</h1>
        <hr>
        <p> Salim fait le tour des magasins et trouve 5 veste qui repondent à ses critères.<br> Compare les en fonction des quatre critères</p>
        <button class="btn btnFermer1">FERMER</button>
    </div>
@endsection