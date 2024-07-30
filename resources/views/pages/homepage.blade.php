@extends('layouts.app')

@section('SCSS')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('content')
    <div class="container-fluid jumbo-container">
        <img src="" alt="">
        <h1>Ilaria Maiolo</h1>  
    </div>

    <section class="easy-bg">
        <h2 class="text-uppercase">chi sono</h2>
        <p>Mi chiamo Ilaria, una giovane imprenditrice guidata dalla passioneper il Fitness Olistico. La mia storia, tinta di nero, parla di sofferenza e sacrificio, ma anche di un infinita di fame di riscatto che mi ha spinta oltre ogni ostacolo.
        Il fitness non è solo stata la mia salvezza, è diventato il cuore del mio business.
        Attraverso di esso, ho appreso la consapevolezza di sè e costruito un corpo che riflette il mio spirito.
        Oggi, qualificata in Estica e certificata come Personal Trainer e Tecnico posturale certificato, ho creato un programma unnico che aiuta altre donne a trovare il proprio equilibrio psico-fisico, trasmettendo le lezioni che ho appreso sul mio cammino
        </p>
    </section>
    <img class="divImg" src="" alt="">

    <section class="pink-bg">
        <img src="https://picsum.photos/200" alt="">
        <p>Sono un'anima perfezionista e altruista nel mondo del Fitness Olistico. Mi dedico a identificare e coltivare il potenziale nascosto in ogni donna, comunicando in un linguaggio che comnette e trasforma.
        </p>
        <img src="https://picsum.photos/200" alt="">
    </section>

    <section class="easy-bg">
        <h2 class="text-uppercase">il mio metodo</h2>
        <p>IM SYSTEM rappresenta la quintessenza della mia filosofia e dell'innovazione nel campo del fitness femminile.
        Nonostante la varietà di strumenti disponibili per comprendere le esigenza del corpo gemmoinile, mi sono resa conto che le soluzioni standarnd non soddisfaevano le aspettativa delle mie clienti, Questa consapevolezza mi ha spinto a sfidare il convenzionale: non è la quantità di esercizio, ma un approccio olistico e multidisciplinare che definisce un piano verameante efficace.
        Unendo il Pilates, con il suo focus sul controllo muscolare e l'ascolto del corpo, al Bodybuilding, che modella la forma fisica, ho creato un metodo unico.
        IM SYSTEM è un programma che armonizza: allenamento, cura estetica e nutrizione, incarnando il imo ideale di fitness.</p>
    </section>

    <section class="easy-bg">
        <h2 class="text-uppercase">la mia visione</h2>
        <p>Conidero l'allenamento una forma di meditazione attiva, dove è fondamentale ascoltare e connettersi profondamente con il proprio corpo. Se finora hai praticato esercizi affrettati o usato pesi eccessivi senza ottenere i risultati sperati, è tempo di lasciare queste abitudini alle spalle. Con i nostri programmi, imparerai a eseguire ogni movimeto con precisione, attivando correttamente i muscoli desiderati, migliorando così sia l'estetica che la funzionalità del corpo, senza alterare la tua postura. Che tu scelga di allenarti con pochi sempilci attrezzi a casa o con una gamma completa di equipaggiamento in palestra, ti guiderò verso una trasformazione completa.</p>
    </section>


    <section class="pink-bg-cta">
        <h2 class="text-uppercase">la mia visione</h2>
        <h3 class="text-uppercase">cosa offro</h3>
        <hr>
        <h2 class="text-uppercase">impt</h2>
        <p>IMPT offre una base di partenza al nostro rinomato metodo IM System, consentendo di scoprire se è adatto a te prima di avazare.</p>
        <button class="text-upperccase">inizia ora</button>
    </section>

    <section class="easy-bg-cta">
        <h3 class="text-uppercase">cosa offro</h3>
        <hr>
        <h2 class="text-uppercase">im coaching</h2>
        <p>Rappresenta la punta di diamante dei nostri servizi, calbrato con precisione per coloro che hanno già sperimentato IMPT e cercano un </p>
        <button class="text-upperccase">inizia ora</button>
    </section>

    <section class="pink-bg">
        <h3 class="text-uppercase">guida all'acquisto</h3>
        <hr>
        <p>Scegli la tua opzione preferita e poi rilassati nella tua area personale, dove tutto è pronto per te.
        </p>

        <p>Con pochi clic, <span>completa l'iscrizione</span> e conferma il <span>form</span> per la richiesta.
            Immediatamente, accederai a una vasta gamma di materiali escludivi e contenuti personalizzati nella tua area riservata.
            <span>Qui</span> potrai facilmente organizzare il tuo calendario, monitorare i progressi con i dati dettagliati e vedere le tue trasformazioni attrverso le foto di confronto.
        </p>

        <p>è tutto organizato per garantirti un'esperienza senza stress, consentendoti di concentrarti completamente sul tuo benessere.
        </p>
    </section>
@endsection