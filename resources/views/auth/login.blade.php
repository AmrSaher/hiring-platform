<x-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email Address" name="email" type="email" placeholder="Enter your email address" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Enter your password" />

        <x-forms.button>Log In</x-forms.button>
        <p class="text-gray-400">Read terms and conditions</p>
    </x-forms.form>
</x-layout>
