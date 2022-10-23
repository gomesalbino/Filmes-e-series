<x-layout title="Minhas Series">
    <a class="btn btn-dark" href="{{ route('series.create') }}">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success mt-3 mt-3">
            {{ $mensagemSucesso }}
        </div>
    @endisset
        <ul class="list-group mb-3 mt-3">
            @foreach ($series as $serie)
                <li class="list-group-item d-flex justify-content-between algin-items-center">
                    {{ $serie->nome }}

                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>

                </li>
            @endforeach
        </ul>

</x-layout>
