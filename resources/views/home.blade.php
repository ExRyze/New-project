@extends('templates.main')
@section('container')
  <main class="col-8 pe-2">
    <div class="bg-warning card">
      <div class="card-header">
        <h4>Home</h4>
      </div>
      <div class="card-body d-flex flex-column">
        <section class="d-flex flex-column">
          <h5 class="border-bottom border-3 border-dark pb-2 px-3 mb-3">Highlights</h5>
          <div class="d-flex align-items-stretch">
            <div class="col-8 pe-2">
              <div class="card-body bg-white carousel">
  
              </div>
            </div>
            <div class="col-4 ps-2">
              <div class="card-body bg-white h-100">
  
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
  <aside class="col-4 ps-2">
    <div class="bg-warning card">
      <div class="card-header">
        <h6>IDK</h6>
      </div>
      <div class="card-body">
        
      </div>
    </div>
  </aside>
@endsection