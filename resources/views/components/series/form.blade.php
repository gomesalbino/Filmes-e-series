<form action="{{ $action }}" method="post">
     @csrf
     @isset($nome)
        @method('PUT') 
     @endisset
        <div class="row mb-3">
        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
        <input type="text"
         name="nome" 
         id="nome" autofocus 
         placeholder="Nome serie"
         @isset($nome)value="{{ $nome }}" @endisset
        class="form-control">
        </div>

         <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>