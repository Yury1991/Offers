@extends('layouts.main')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Тип</th>
        <th scope="col">Модель</th>
        <th scope="col">Цена в у.е.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
            <th scope="row">{{$machine->id}}</th>
            <td>{{$machine->type}}</td>
            <td>{{$machine->model}}</td>
            <td>{{$machine->foreign_price}}</td>
            <tr></tr>     
      </tr>      
    </tbody>    
  </table>
  <div>
    <a href="{{route('machine.edit', $machine->id)}}">Изменить</a>
  </div>
  <div>
    <form action="{{route('machine.delete', $machine->id)}}" method="post">
      @csrf
      @method('delete')
      <input type="submit" class = "btn btn-danger mb-3" value="Удалить">
    </form>
  </div>
  <div>
    <a href="{{route('machine.index')}}">Назад</a>
  </div>
@endsection
