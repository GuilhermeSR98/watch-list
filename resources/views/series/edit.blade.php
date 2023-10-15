<x-layout title="Editar Série">
    <x-series.form :action="route('series.update', $series->id)" :name="$series->name" />
</x-layout>
