<x-layout title="Episódios de {!! $series->name !!} Temporada {!! $season->number !!}">
    <form action="{{ route('episodes.update', ['series' => $series, 'season' => $season]) }}" method="POST">
        @method('PUT')
        @csrf
        <ul class="list-group w-50 mt-3">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio
                    {{ $episode->number }}
                    <input class="form-check-input" type="checkbox" name="episodes[]"
                        @if ($episode->watched) checked @endif value="{{ $episode->id }}">
                </li>
            @endforeach
        </ul>
        <button class="btn btn-success mt-3">Salvar</button>
        <a href="{{ route('series.index') }}" class="btn btn-primary mt-3">Home</a>
    </form>
</x-layout>
