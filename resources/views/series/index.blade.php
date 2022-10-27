<x-layout title="Minhas Series">
    <a class="btn btn-primary " href="{{ route('series.create') }}">
       <i class="fa-sharp fa-solid fa-folder-plus"></i>
    </a>
     <a href="{{ route('imprimir') }}" class="btn btn-secondary mt-3 mb-3 ms-2">
     <i class="fa-solid fa-print"></i>
     </a>
    @isset($mensagemSucesso)
        <div class="alert alert-success mt-3 mt-3">
            {{ $mensagemSucesso }}
        </div>
    @endisset
        <ul class="list-group mb-3 mt-3">
            @foreach ($series as $serie)
                <li class="list-group-item d-flex justify-content-between algin-items-center">
                    <a href="{{ route('seasons.index', $serie->id) }}">
                       {{ $serie->nome }}
                    </a>
                    <span class="d-flex">
                    <a class="btn btn-success btn-sm" href="{{ route('series.edit', $serie->id) }}">
                    <i class="fa-solid fa-marker"></i>
                    </a>
                        <form action="{{ route('series.destroy', $serie->id) }}" method="POST" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                    </span>

                </li>
            @endforeach
        </ul>

</x-layout>
