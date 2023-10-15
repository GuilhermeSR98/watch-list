<form action="{{ $action }}" method="POST">
    @csrf
    @isset($name)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="name" class="form-label">Nome da Série: </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Game Of Thrones"
            @isset($name)
        value="{{ $name }}"
    @endisset>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
