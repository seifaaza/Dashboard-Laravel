@extends('layouts.app')
@section('content')
@vite(['resources/js/app.js'])

<div class="container w-50 ">
    <h1 class="text-primary float-end mb-5">Ajouter une affectation</h1>
    <a href="{{url('/')}}" style="width: fit-content" class=" btn btn-secondary d-flex align-items-center gap-2 float-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>
          <span>Retour</span>
    </a>
    <form action="{{url('/store')}}" method="POST" >
        @csrf
        <input type="text" name="navire" placeholder="Navire" class="form-control"> <br>
        <input type="text" name="n_visite" placeholder="Nombre de visite" class="form-control"> <br>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <label for="">Porte</label>
        <select name="porte_id" id="" class="form-control">
            @foreach($portes as $item)
            <option value="{{$item->id}}">{{$item->porte}}</option>
            @endforeach
        </select> <br>
              </div>
              <div class="col">
                <label for="">Shift</label>
        <select name="shift_id" id="" class="form-control">
            @foreach($shifts as $item)
            <option value="{{$item->id}}">{{$item->shift}}</option>
            @endforeach
        </select> <br>
              </div>
              <div class="col">
                <label for="">Marchandises</label>
                <select name="marchandise_id" id="" class="form-control">
                    @foreach($marchandises as $item)
                    <option value="{{$item->id}}">{{$item->marchandise}}</option>
                    @endforeach
                </select> <br>
              </div>
            </div>
          </div>
        <h3 class="my-3 ">Liste des machines</h3>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <h5> Grues</h5>
                <input type="radio" name="grue" id="grue1" value="grue 1">
                <label for="grue1">Grue 1</label> <br>
                <input type="radio" name="grue" id="grue2" value="grue 2">
                <label for="grue2">Grue 2</label> <br>
                <input type="radio" name="grue" id="grue3" value="grue 3">
                <label for="grue3">Grue 3</label> <br>
              </div>
              <div class="col">
                <h5> Tracteurs</h5>
                <input type="radio" name="tracteur" id="tracteur1" value="tracteur 1">
                <label for="tracteur1">Tracteur 1</label> <br>
                <input type="radio" name="tracteur" id="tracteur2" value="tracteur 2">
                <label for="tracteur2">Tracteur 2</label> <br>
                <input type="radio" name="tracteur" id="tracteur3" value="tracteur 3">
                <label for="tracteur3">Tracteur 3</label> <br>
              </div>
              <div class="col">
                <h5> Chargeurs</h5>
                <input type="radio" name="chargeur" id="chargeur1" value="chargeur 1">
                <label for="chargeur1">Chargeur 1</label> <br>
                <input type="radio" name="chargeur" id="chargeur2" value="chargeur 2">
                <label for="chargeur2">Chargeur 2</label> <br>
                <input type="radio" name="chargeur" id="chargeur3" value="chargeur 3">
                <label for="chargeur3">Chargeur 3</label> <br>
              </div>
              <div class="col">
                <h5> Elevateur</h5>
                <input type="radio" name="elevateur" id="elevateur1" value="elevateur 1">
                <label for="elevateur1">Elevateur 1</label> <br>
                <input type="radio" name="elevateur" id="gelevateur" value="elevateur 2">
                <label for="elevateur2">Elevateur 2</label> <br>
                <input type="radio" name="elevateur" id="gelevateur" value="elevateur 3">
                <label for="elevateur3">Elevateur 3</label> <br>
              </div>
            </div>
          </div>
          <button class=" btn btn-success d-flex align-items-center gap-2 mt-3">
            <span>Ajouter</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg>
          </button>
    </form>
</div>
@endsection
