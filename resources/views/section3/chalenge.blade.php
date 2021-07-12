@extends('section3base') 
@section('content')

    {{-- <!-- start Quiz button --> --}}
    <div class="start_btn"><button>Start Quiz</button></div>

    {{-- <!-- Info Box --> --}}
    <div class="info_box">
        <div class="info-title"><span>les regles de quiz of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Vous n'aurez que <span>15 secondes</span> pour chaque question.</div>
            <div class="info">2. Une fois que vous avez sélectionné votre réponse, elle ne peut pas être annulée.</div>
            <div class="info">3. Vous ne pouvez sélectionner aucune option une fois que le temps s'est écoulé.</div>
            <div class="info">4. Vous ne pouvez pas quitter le Quiz pendant que vous jouez.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continuer</button>
        </div>
    </div>

    {{-- <!-- Quiz Box --> --}}
    <div class="quiz_box">
        <header>
            <div class="title">Awesome Quiz Application</div>
            <div class="timer">
                <div class="time_left_txt">Temps restant</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                {{-- <!-- Here I've inserted question from JavaScript --> --}}
            </div>
            <div class="option_list">
                {{-- <!-- Here I've inserted options from JavaScript --> --}}
            </div>
        </section>

        {{-- <!-- footer of Quiz Box --> --}}
        <footer>
            <div class="total_que">
                {{-- <!-- Here I've inserted Question Count Number from JavaScript --> --}}
            </div>
            <button class="next_btn">suivant</button>
        </footer>
    </div>

    {{-- <!-- Result Box --> --}}
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Vous avez terminé le quiz!</div>
        <div class="score_text">
            {{-- <!-- Here I've inserted Score Result from JavaScript --> --}}
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit" href="" >Quit Quiz</button>
        </div>
    </div>
 {{-- <!-- Inside this JavaScript file I've inserted Questions and Options only --> --}}
 <script src="/js/section3/chalenge/questions.js"></script>

 {{-- <!-- Inside this JavaScript file I've coded all Quiz Codes --> --}}
 <script src="/js/section3/chalenge/script.js"></script>
 
 @endsection