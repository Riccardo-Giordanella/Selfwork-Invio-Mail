<x-layout>
  <x-navbar />
  <header>
    <h1 class="text-center my-5">Chi Siamo</h1>
  </header>

  <main>
    <div class="container">
      <div class="row">
        @foreach ($creators as $creator)
        <div class="col-12 col-md-4 d-flex justify-content-evenly">
          <div class="card card-custom">
            <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine del creatore">
            <div class="card-body">
              <h5 class="card-title">{{$creator['name']}} {{$creator['surname']}}</h5>
              <p class="card-text">{{$creator['description']}}</p>
              <a href="{{route('dettaglio', ['name'=> $creator['name']])}}" class="btn btn-primary">Vai al dettaglio</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </main>
</x-layout>