<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h2 class="mb-4 text-2xl">Available Jobs</h2>

    <div class='space-y-3'>
    @foreach ($jobs as $job)
        <a href='/jobs/{{ $job['id'] }}' class="block p-4 border border-white  rounded-lg text-black bg-gray-300">
            <div class='text-green-800 font-bold'>{{ $job->employer->name  }}</div>
            <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary']}} per year
        </a>
    @endforeach
    </div>

    <div class='my-5'>
        {{ $jobs->links(); }}
    </div>
</x-layout>