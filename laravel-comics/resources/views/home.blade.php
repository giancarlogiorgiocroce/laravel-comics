{{--
    Create un nuovo progetto Laravel
    Oggi concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
    Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.
    TODO LIST
    - creare la cartella layout con dentro main.blade.php (con lo scheletro HTML)
    - in main.blade inserire lo @yield con nome scelto (‘content’)
    - creare la vista che estende il layout creare la section per il segnaposto
    - creare le altre viste
    - agganciare le viste alle rotte
    - aggiungere .options({
            processCssUrls: false
        }) a webpack.mix.js
    - per SCSS lanciare npm intall (solo la prima volta) poi npm run dev e poi npm run watch per compilare i CSS
    - linkare i CSS dentro il layout
    - prendere il file con in dati e metterlo in config
    - importarlo nella rotta dedicata
    - passare il dato alla vista che fa il ciclo per stamparla
--}}

@extends('layouts.main')

@section('content')
    <h1>HW</h1>
@endsection
