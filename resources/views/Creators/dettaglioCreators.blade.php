<x-layout>
  <x-navbar />
  <header>
    <h1 class="text-center my-5">Dettaglio Creator</h1>
  </header>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <img src="/media/avatar.png" alt="Foto del creator" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <p class="h2 text-center">{{$creator['name']}} {{$creator['surname']}}</p>
          <p class="h4 text-center">{{$creator['description']}}</p>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aspernatur vel delectus sequi! Voluptate facilis vero animi. Obcaecati voluptate perspiciatis possimus veniam provident at totam libero, aliquid officia autem maxime.</p>
        </div>
      </div>
    </div>
  </main>

</x-layout>