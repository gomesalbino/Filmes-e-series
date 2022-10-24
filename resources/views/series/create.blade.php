<x-layout title="Nova Séria">
    <form action="{{ route('series.store') }}" method="post">
    @csrf
    <div class="row mb-3">
        <div class="col-8">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <input type="text" name="nome" id="nome" autofocus placeholder="Nome serie"
                value="{{ old('nome') }}" class="form-control">
        </div>
        <div class="col-2">
            <label for="seasonsQty" class="col-sm-2 col-form-label">Temporadas:</label>
            <input type="text" name="seasonsQty" id="seasonsQty"  placeholder="Nº Temporada"
                value="{{ old('seasonsQty') }}" class="form-control">
        </div>
        <div class="col-2">
            <label for="episodesPerSeason" class="col-sm-2 col-form-label">Episódios:</label>
            <input type="text" name="episodesPerSeason" id="episodesPerSeason"  placeholder="Nº de episódio"
                value="{{ old('episodesPerSeason') }}" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-lg">
        <i class="fa-regular fa-floppy-disk"></i>
    </button>
</form>

</x-layout>
