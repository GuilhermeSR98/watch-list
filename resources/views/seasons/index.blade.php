<x-layout title="Temporadas de {!! $series->name !!}">
    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">Tempotada {{ $season->number }}
                <span class="badge bg-secondary p-2">
                    Episódios : {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
