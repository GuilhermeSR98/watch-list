<x-layout title="Nova Série">

    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome da Série: </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Game Of Thrones">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
