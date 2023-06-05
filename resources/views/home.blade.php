
@extends('layouts.app')
@section('content')
@vite(['resources/js/app.js'])
<div class="container w-75 mt-3">
    <h1 class="text-primary mt-5 d-inline">Affectations</h1>
    <a href="{{url('/add')}}" style="width: fit-content" class=" btn btn-success d-flex align-items-center gap-2 float-end">
        <span>Ajouter</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
          </svg>
    </a>
    <table class="table table-hover table-striped mt-5">
        <tr>
                <th>Navire</th>
                <th>Date Accortage</th>
                <th>Shift</th>
                <th>Porte</th>
                <th>Marchandise</th>

        </tr>
        @foreach($affectations as $item)
            <tr>
                <td>{{$item->navire}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->shift->shift}}</td>
                <td>{{$item->porte->porte}}</td>
                <td>{{$item->marchandise->marchandise}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
