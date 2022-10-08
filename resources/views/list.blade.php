@extends('templates.main')
@section('container')
    <main class="col-8 bg-warning card">
      <nav class="card-header">

      </nav>
      <section class="card-body">
        <ul>
          @foreach ($listAnime as $anime)
            <li>{{ $anime->title }}</li>
          @endforeach
        </ul>
      </section>
    </main>
    <aside class="col-4 bg-warning card">
      <form action="">

      </form>
    </aside>
@endsection