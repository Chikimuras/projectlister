@extends('layouts.app')

@section('content')

<div class="columns">

  <div class="column">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Créez vos propres projets</p>
        </header>
        <div class="card-content">
            <div class="content">
                Ici vous pouvez lister tous vos projets les plus fou. Pas de soucis tout est controlé et anonyme.
                Si quelqu'un est interressé par votre projet et en mesure de le réaliser avec vous. Alors vous serez mis en contact.
            </div>
        </div>
    </div>
  </div>

  <div class="column">
  <div class="card">
        <header class="card-header">
            <p class="card-header-title">Suivez des projets qui vous correspondent</p>
        </header>
        <div class="card-content">
            <div class="content">
                Vos préférences nous tiennent à coeur. Alors dites les nous et nous nous efforcerons pour vous montrer seulement
                ce qui vous interresses réelement.<br>
                Donnez nous vos disponibilté, vos moyens techniques et/ou financiers et nous nous chargeons du reste!
            </div>
        </div>
    </div>
  </div>

  <div class="column">
  <div class="card">
        <header class="card-header">
            <p class="card-header-title">Alors qu'attendez vous?</p>
        </header>
        <div class="card-content">
            <div class="content">
                Quoi qu'il en soit rien ne coûtes d'allez jetter un coup d'oeil non?
                Alors c'est partit!<br>
                Ajoutez votre projet <a href="projects/create" class="link-home">ici</a>.<br>
                Ou bien consulter tous les projets public en attentes d'une équipe <a href="projects" class="link-home">ici</a>.
            </div>
        </div>
    </div>
  </div>

</div>

@endsection