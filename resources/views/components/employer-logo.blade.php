@props(['job', 'width' => '90'])

<img
    src="{{ $job->employer->logo[0] == 'h' ? $job->employer->logo : asset($job->employer->logo) }}" style="width: {{ $width }}px;"
    class="rounded-xl"
    alt="company logo"
/>
