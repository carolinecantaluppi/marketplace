<x-layout>
    {{-- Error message --}}
    <div class="container row offset-md-3">
        <div class="col-12 col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif  
        </div>
    </div>
    <div class="container row offset-md-3">
        <div class="col-12 col-md-6">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
    {{-- Card --}}
    <div class="card card-body shadow-lg p-3 mb-5 bg-body rounded offset-md-2 mt-5" style="width: 50rem; justify-content: center">
        <div class="card mb-3 card-style">
            <div class="row g-0">
                <div id="colortext" class="col-md-4 card-img">
                    <canvas id="canvas" width="100%" height="400"></canvas>
                </div>
            </div>
        </div>
        {{-- Form --}}
        <form class="showform" method="POST" action="{{route(($tshirt != null) ? 'editTshirt' : 'createTshirt', $tshirt['id'] ?? '')}}" enctype="multipart/form-data">
            @csrf       
            <div class="mb-3">
                <h5 class="card-title">Personalizza la tua maglietta:</h5>
                <label for="exampleInputEmail1" class="form-label">Inserisci un titolo per la tua creazione</label>
                <input name="title" value="{{$tshirt['title'] ?? ""}}" type="text" class="form-control">  
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Inserisci un testo per personalizzare la tua maglietta</label>
                <input id="text" name="text" value="" type="text" class="form-control">  
            </div>
            <input type="hidden" id="imgBase" name="imgBase" value="" />
            <input type="hidden" id="img64" name="img64" value="" />
            <div class="d-grid gap-2 col-6 mx-auto mt-3">
                <button class="btn btn-primary" type="submit">Salvare</button>
            </div>
        </form>
    </div>
</x-layout>