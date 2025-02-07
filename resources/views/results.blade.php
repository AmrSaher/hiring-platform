<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="mt-6 space-y-6">
        @if($jobs->count())
            @foreach($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        @else
            <p class="text-gray-400 text-center">No jobs found.</p>
        @endif
    </div>
</x-layout>
