<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif
    <div class="row mb-3">
        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
        <input type="text" name="nome" id="nome" autofocus placeholder="Nome serie"
            @isset($nome)value="{{ $nome }}" @endisset class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-lg mt-3">
        <i class="fa-solid fa-pen-nib"></i>
    </button>
    <a class="btn btn-danger btn-lg ms-3 mt-3" href="{{ route('series.index') }}">
         <i class="fa-regular fa-rectangle-xmark"></i>
    <a/>
</form>
