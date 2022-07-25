<x-layout>
  {{-- Card --}}
    <div class="container mt-5">
        <div class="row">
            @forelse($tshirts as $tshirt)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card rounded shadow-sm border-0">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{Storage::url($tshirt['id'])}}/thumbnail.jpg" alt="series pictures" width="100%" height="300"> 
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bolder" style="text-align: center">{{$tshirt['title']}}</h5>  
                            <a href="{{route('home', ['id'=>$tshirt['id']])}}" class="btn btn-sm btn-warning justify-content-center">Modifica</a>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <form method="POST" action="{{route('deleteTshirt', ["id"=>$tshirt['id']])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-group btn-sm btn-danger">Elimina</button>
                                </form>
                            </div>
                            <p class="card-text mt-3"><small class="text-muted">Creato il {{$tshirt->created_at->format('d/m/Y H:m')}}</small></p>
                        </div>      
                    </div>
                </div>
            @empty
                <h2 style="text-align: center">Non ci sono magliette.</h2>
            @endforelse
        </div>
    </div>
</x-layout>