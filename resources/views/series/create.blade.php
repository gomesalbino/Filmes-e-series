<x-layout title="Nova Séria">
    <form action="{{ route('series.salvar') }}" method="post">
     @csrf
        <div class="row mb-3">
        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
        <input type="text" name="nome" id="nome" autofocus placeholder="Nome serie" class="form-control">
        </div>

         <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
