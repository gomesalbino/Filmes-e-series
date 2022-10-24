<x-layout title="Temporada: '{!! $series->nome !!}'">
  
      <div class="mt-3">
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
            <div class="mt-3">
                <a class="btn btn-primary btn-lg ms-3" href="{{ route('series.index') }}">
                <i class="fa-sharp fa-solid fa-backward-fast"></i>
                <a/>
            </div>
      </div>
</x-layout>
