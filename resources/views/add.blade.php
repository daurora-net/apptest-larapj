@extends('layouts.default')
@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/add" method="post">
  <div class="card">
    <p class="title mb-15">Todo List</p>
    <div class="todo">
      <table>
        @csrf
        <tr>
          <th>タスク名</th>
          <td>
            <input type="text" name="task" class="input-update">
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button class="button-add">送信</button>
          </td>
        </tr>
      </table>
    </div>
  </div>
</form>
@endsection