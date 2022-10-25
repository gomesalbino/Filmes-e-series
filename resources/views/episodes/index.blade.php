<x-layout title="Episódios" :mensagem-sucesso="$mensagemSucesso">
    <form  method="post">
    @csrf
        <div class="mt-3">
            <ul class="list-group mb-3 mt-3">
                @foreach ($episodes as $episode)
                    <li class="list-group-item d-flex justify-content-between algin-items-center">
                        Episódio: {{ $episode->number }}
                        
                        <input type="checkbox" 
                        name="episodes[]" 
                        value="{{ $episode->id }}" 
                        @if($episode->watched) checked @endif
                        />
                    </li>
                @endforeach

            </ul>
            <div class="d-flex mt-3">

                <div>
                <button class="btn btn-primary btn-lg ms-3 mb-5" type="submit">
                    <i class="fa-sharp fa-solid fa-cart-arrow-down"></i>
                 <button />
                </div>
                   <div class="ms-1">
                     <a class="btn btn-info btn-lg ms-3 mb-5" href="{{ route('series.index') }}">
                        <i class="fa-sharp fa-solid fa-backward-fast"></i>
                    <a />
                   </div>
            </div>
        </div>
    </form>
</x-layout>
