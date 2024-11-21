@extends('layouts.main')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Тип</th>
        <th scope="col">Модель</th>
        <th scope="col">Цена у.е.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($machines as $machine)
            <th scope="row">
                {{$machine->id}}
            </th>
            <td>{{$machine->type}}</td>
            <td>
              <a href="{{route('machine.show', $machine->id)}}">{{$machine->model}}</a>
            </td>
            <td>{{$machine->foreign_price}}</td>
            <tr></tr>
        @endforeach        
      </tr>      
    </tbody>
  </table>  
  <div>
    <a href="{{route('machine.create')}}" class="btn btn-success mb-3">Добавить</a>
  </div>  
@endsection
