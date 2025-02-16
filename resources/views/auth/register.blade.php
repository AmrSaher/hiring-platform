<x-layout>
    <x-page-heading>Sign Up</x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" placeholder="Enter your name" />
        <x-forms.input label="Email Address" name="email" type="email" placeholder="Enter your email address" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Enter your password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" placeholder="Confirm your password" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer_name" placeholder="Enter employer name" />
        <x-forms.input label="Employer Logo" name="employer_logo" type="file" />

        <x-forms.button>Sign Up</x-forms.button>
    </x-forms.form>
</x-layout>
