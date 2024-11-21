@extends('layouts.main')
@section('content')
<form action = "{{route('machine.update', $machine->id)}}" method = "post">
      @csrf
      @method ('patch')
      <div class="mb-3">
        <label for="type" class="form-label">Тип станка</label>
        <input name = "type" type="text" class="form-text" id="type" value="{{$machine->type}}">    
      </div>

      <div class="mb-3">
        <label for="model" class="form-label">Модель</label>
        <input name = "model" type="text" class="form-text" id="model" value="{{$machine->model}}">
      </div>

      <div class="mb-3">
        <label for="standard_equipment" class="form-label">Стандартная комплектация</label>
        <input name = "standard_equipment" type="text" class="form-text" id="standard_equipment"
           value="{{$machine->standard_equipment}}">
      </div>

      <div class="mb-3">
        <label for="foreign_price"  class="form-label">Цена в долларах</label>
        <input name = "foreign_price" type="text" class="form-text" id="foreign_price" 
          value="{{$machine->foreign_price}}">
      </div>
      
      <button type="submit" class="btn btn-primary mb-3">Изменить</button>
</form>
<div class="mb-3">
  <a href="{{route('machine.index')}}">Назад</a>
</div>

    
@endsection
