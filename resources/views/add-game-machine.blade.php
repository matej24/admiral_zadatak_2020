@extends('app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Game Machine</a></h2>
<br>
 
<form action="{{ route('store-game-machine') }}" method="POST" name="add_game_machine">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Serial Number</strong>
            <input type="text" name="serial_number" class="form-control" placeholder="Enter Serial Number">
            <span class="text-danger">{{ $errors->first('serial_number') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>End of gurantee date</strong>
            <input type="date" class="form-control" name="end_of_guarantee_date" placeholder="Enter End Of Gurantee Date"></input>
            <span class="text-danger">{{ $errors->first('end_of_guarantee_date') }}</span>
        </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label for="exampleFormControlSelect1"><strong>Select game type</strong></label>
    <select class="form-control" id="exampleFormControlSelect1" name="game_type_id">
    @foreach($gameTypes as $gameType)
      <option value="{{ $gameType->id }}">{{ $gameType->name }}</option>
      @endforeach
    </select>
  </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection