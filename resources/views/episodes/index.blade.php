<x-layout title="Episódios de {!! $series->name !!} Temporada {!! $season->number !!}">
    <form action="" method="POST">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">Episódio
                    {{ $episode->number }}
                    <input type="checkbox" name="episodes[]" value="{{ $episode->id }}">
                </li>
            @endforeach
        </ul>
        <button class="btn btn-success mt-3">Salvar</button>
    </form>
</x-layout>