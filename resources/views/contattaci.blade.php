<x-layout>
    <x-navbar />
    <section class="bg-custom p-2">
        <header>
            <h1 class="text-center my-5">Contattaci</h1>
        </header>

        <main>
            <section class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 bg-warning rounded">

                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form class="d-flex flex-column justify-content-center p-5" method="POST" action="{{route('invio_mail')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Inserisci il tuo nome</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Inserisci la tua e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Inserisci il tuo messaggio</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Invia</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </section>


</x-layout>