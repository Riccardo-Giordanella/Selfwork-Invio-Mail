<x-layout>
  <x-navbar />
  <header>
    <h1 class="text-center my-5">I nostri articoli</h1>
  </header>

  <main>
    <div class="container">
      <div class="row">
        @foreach ($articles as $article)
        <div class="col-12 col-md-4 d-flex justify-content-evenly">
          <div class="card card-custom">
            <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine del creatore">
            <div class="card-body">
              <h5 class="card-title">{{$article['name']}}</h5>
              <p class="card-text">{{$article['description']}}</p>
              <p class="card-text">{{$article['price']}}€</p>
              <a href="#" class="btn btn-primary">Acquista</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </main>
</x-layout>