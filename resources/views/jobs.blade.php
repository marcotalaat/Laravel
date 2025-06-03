<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <p>Available Jobs</p>

    @foreach ($jobs as $job)
        <li>
            <a href='/jobs/{{ $job['id'] }}'>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary']}} per year
            </a>
        </li>
    @endforeach
</x-layout>