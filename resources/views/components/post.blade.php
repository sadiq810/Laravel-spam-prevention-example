<x-auth-validation-errors class="mb-4" :errors="$errors" />

<h2>Total Post Counts: {{ \App\Models\Post::count() }}</h2>

<form method="POST" action="{{ route('post') }}">
@csrf

<!-- Name -->
    <div>
        <x-label for="name" :value="__('Title')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="title" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Body')" />

        <x-input id="email" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required />
    </div>

    <x-honeypot></x-honeypot>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ __('Save') }}
        </x-button>
    </div>
</form>
