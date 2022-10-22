<x-layout title="Minhas Series">
     <a class="btn btn-dark" href="{{ route('series.create') }}">Adicionar</a>
        <div class="mb-3 mt-3 list-group">
            <ul>
            @foreach ($series as $serie )
                <li class="list-group-item">{{ $serie }} </li>
            @endforeach
            </ul>
        </div>
 
</x-layout>


