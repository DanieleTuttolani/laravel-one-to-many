@extends('layouts.app')
@section('content')

<div class="my-bgc">
    <div class="my-container faded p-3">
        {{-- intestazioni presentazioni e foto --}}
        <div class="struttura-genitore titolo d-flex">
            <div class="img-pit struttura">
                <div class="img-wrapper struttura">
                    <img class="img-fluid" src="https://www.petme.it/wp-content/uploads/2022/07/Schermata-2022-07-14-alle-17.50.21.png" alt="">
                </div>
            </div>
            <div class="desc-wrapper col-5 struttura">
                <div class="name">prova</div>
                <div class="desc">prova</div>
            </div>
            <div class="info wrapper struttura">delle info</div>
        </div>
        {{-- vetrina progetti --}}
        <section class="projects d-flex">
            {{-- left --}}
            <section class="left d-flex">
                    <div class="struttura-genitore">
                        <div class="title p-1">
                            <h4>Vetrina Progetti</h4>
                        </div>
                        <div class="project-body struttura p-3">
                            <img class="img-fluid" src="https://s1.1zoom.me/big0/810/Dogs_Husky_Snout_574782_1280x720.jpg" alt="">
                            <hr class="border-light">
                            <div class="text-wrapper d-flex row text-light">
                                <div class="col-6"><p>Sogetto : </p></div>
                                <div class="col-6"><p>Collaboratori :</p></div>
                                <div class="col"><p>Descrizione :</p></div>
                            </div>
                        </div>
                    </div>
            </section>
            {{-- right --}}
            <section class="right">
                <div class="pit p-3 mx-2 text-light">
                    <h2 class="title">Linguaggi</h2>
                    <div class="p-0">
                        <div class="lang-wrapper d-flex">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="">
                            <span class="p-1 ms-2">JavaScript</span>
                        </div>
                        {{-- todo ciclo sui linguaggi --}}
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>
@endsection