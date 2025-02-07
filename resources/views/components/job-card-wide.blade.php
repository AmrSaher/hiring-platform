@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :$job />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <a href="{{ $job->url }}" target="_blank" class="font-bold text-xl mt-1 group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</a>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->type }} - From ${{ $job->salary }}</p>
    </div>
    <div class="flex items-center gap-2">
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
