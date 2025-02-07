<x-layout>
    <div class="space-y-10">
        <section class="text-center pb-10 pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input label="" name="q" placeholder="Web Developer..." class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full max-w-xl" />
            </x-forms.form>
        </section>

        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag size="base" :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Finding Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
