@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <a href="{{ $job->url }}" target="_blank" class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">{{ $job['title'] }}</a>
        <p class="text-sm mt-4">{{ $job->type }} - From ${{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex items-center gap-2">
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
        <x-employer-logo :$job width="42" />
    </div>
</x-panel>
