<x-layout title="Séries">
    <a class="btn btn-dark mb-3" href="/series/create">Adicionar Nova Série</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between">{{ $serie->name }}
                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">X</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
