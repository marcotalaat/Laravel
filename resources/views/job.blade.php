<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>


    <h2>{{ $job['title'] }}</h2>
    <p>We will pay to you {{ $job['salary'] }} per year</p>
</x-layout>