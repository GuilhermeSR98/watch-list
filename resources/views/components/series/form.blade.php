<form action="{{ $action }}" method="POST">
    @csrf
    @isset($name)
        @method('PUT')
    @endisset
    <div class="row mb-3">
        <div class="col-8"> <label for="name" class="form-label">Nome da Série: </label>
            <input autofocus type="text" class="form-control" id="name" name="name" placeholder="Game Of Thrones"
                @isset($name)
        value="{{ $name }}"
    @endisset>
        </div>
        <div class="col-2"> <label for="seasons" class="form-label">Temporadas: </label>
            <input type="text" class="form-control" id="seasons" name="seasons" placeholder="8">
        </div>
        <div class="col-2"> <label for="episodes" class="form-label">Episódios: </label>
            <input type="text" class="form-control" id="episodes" name="episodes" placeholder="24">
        </div>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>
