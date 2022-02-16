<x-app-layout>

    <x-layouts.hero>
        <x-slot name="image">
            {{ asset('img/bg/bg-image-136.jpg') }}
        </x-slot>
        <x-slot name="title">Our Portfolio</x-slot>
    </x-layouts.hero>

    <!-- Page Content -->
    <main class="page-content">
        <x-layouts.ourwork />

        <x-layouts.block />
    </main>
</x-app-layout>
