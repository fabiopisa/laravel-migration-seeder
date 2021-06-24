@extends('layouts.main')

@section('content')
  <section class="container">
    <h1>La nostra scelta di pacchetti:</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">CodicePack</th>
          <th scope="col">Stato</th>
          <th scope="col">Città</th>
          <th scope="col">Quando</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $travels as $travel)
          <tr>
            <th scope="row">{{$travel['CodicePack']}}</th>
            <td>{{$travel['Stato']}}</td>
            <td>{{$travel['Citta']}}</td>
            <td>{{$travel['Quando']}}</td>
            <td>{{$travel['Prezzo']}} €</td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </section>
  <section class="container">
    {{$travels->links()}}
  </section>
  
@endsection