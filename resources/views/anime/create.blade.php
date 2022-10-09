@extends('templates.main')
@section('container')
    <main class="card col-6 mx-auto bg-warning">
      <div class="card-body">
        <form action="/anime" method="post">
          @csrf
          <input type="text" name="title" id="title" placeholder="title">
          <input type="number" name="episodes" id="episodes" placeholder="episodes">
          <button type="submit">Create!</button>
        </form>
      </div>
    </main>
@endsection