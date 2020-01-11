@extends('app')
      @section('content')
      <div class="mt-5">
     <h1 class="page-header text-center">Game machines</h1>
     <div class="row mt-5">
         <div class="col-md-12">
         <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Serial Number</th>
      <th scope="col">End of guarantee date</th>
      <th scope="col">Game type</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($gameMachines as $gameMachine)
    <tr>
      <td>{{$gameMachine->name}}</td>
      <td>{{$gameMachine->serial_number}}</td>
      <td>{{$gameMachine->end_of_guarantee_date}}</td>
      <td>{{$gameMachine->gameType->name}}</td>
      <td><a href="/delete-game-machine/{{ $gameMachine->id }}">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
         </div>
     </div>
     </div>
     </div>
     @endsection