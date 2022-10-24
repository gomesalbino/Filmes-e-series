<x-layout title="Temporada: '{!! $series->nome !!}'">
  
        <ul class="list-group mb-3 mt-3">
            @foreach ($seasons as $season)
                <li class="list-group-item d-flex justify-content-between algin-items-center">
                    
                     Temporada:  {{ $season->number }}
               
                    <span class="badge bg-success">
                    {{ $season->episodes->count() }}
                    </span>

                </li>
            @endforeach
        </ul>

</x-layout>
