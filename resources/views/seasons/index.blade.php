<x-layout title="Temporadas de {!! $series->name !!}">
    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">Temporada {{ $season->number }}
                <a href="{{ route('episodes.index', ['series' => $series, 'season' => $season]) }}">
                    <span class="badge bg-secondary p-2">
                        Episódios : {{ $season->episodes->count() }}
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
