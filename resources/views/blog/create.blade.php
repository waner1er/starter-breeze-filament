<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>
    <livewire:blog.create-form></livewire:blog.create-form>
</x-app-layout>
