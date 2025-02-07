<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs" class="mt-6">
        <x-forms.input label="Job Title" name="title" placeholder="e.g. Backend Engineer" />
        <x-forms.input label="Salary" type="number" name="salary" placeholder="e.g. $120,000" />
        <x-forms.input label="Location" placeholder="e.g. Winter Park, Florida" name="location" />
        <x-forms.input label="Url" placeholder="e.g. https://company.com/" name="url" />
        <x-forms.select label="Type" name="type" placeholder="e.g. Part Time">
            <option class="text-black">Full Time</option>
            <option class="text-black">Part Time</option>
            <option class="text-black">Freelance</option>
        </x-forms.select>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma seperated)" placeholder="e.g. Backend, API, Java, Database" name="tags" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
