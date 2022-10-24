<x-layout title="Nova Séria">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false"/>
</x-layout>
