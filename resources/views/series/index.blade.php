<x-layout title="Séries">
    <a class="btn btn-dark mb-3" href="/series/criar">Adicionar Nova Série</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
