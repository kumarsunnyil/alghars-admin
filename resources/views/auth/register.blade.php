<x-guest-layout>
    <div class="description">
        <p>Fill in the registration form and choose your preffered classes days.</p>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <x-input-label for="name" :value="__('Student\'s Name')" class="form-label" />
            <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Age -->
        <div class="form-group">
            <x-input-label for="age" :value="__('Student\'s Age')" class="form-label"  />
            <x-text-input id="age" class="block mt-1 w-full form-control" type="text" name="age" :value="old('age')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
        <!-- Grade -->
        <div class="form-group">
            <x-input-label for="grade" :value="__('Grade')" class="form-label"  />
            <x-text-input id="grade" class="block mt-1 w-full form-control" type="text" name="grade" :value="old('grade')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('grade')" class="mt-2" />
        </div>
        <!-- Parents Name -->
        <div class="form-group">
            <x-input-label for="pName" :value="__('Parent\'s Name')" class="form-label"  />
            <x-text-input id="pName" class="block mt-1 w-full form-control" type="text" name="pName" :value="old('pName')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('pName')" class="mt-2" />
        </div>
        <!-- Phone -->
        <div class="form-group">
            <x-input-label for="phone" :value="__('Phone')" class="form-label"  />
            <x-text-input id="phone" class="block mt-1 w-full form-control" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('grade')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4 form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Location -->
        <div class="form-group">
            <x-input-label for="location" :value="__('Location')" class="form-label"  />
            <x-text-input id="location" class="block mt-1 w-full form-control" type="text" name="location" :value="old('location')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('location')" class="mt-2" />
        </div>
        <!-- Program -->
        <div class="form-group">
            <x-input-label for="program" :value="__('Program')" class="form-label"  />
            <x-text-input id="program" class="block mt-1 w-full form-control" type="text" name="program" :value="old('program')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('program')" class="mt-2" />
        </div>

{{-- 
        <!-- Password -->
        <div class="mt-4 form-group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 form-group">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}

        <!-- Message -->
        <div class="form-group">
            <x-input-label for="message-box" :value="__('Message')" class="form-label"  />
            <x-text-input id="message-box" class="block mt-1 w-full form-control" type="text" name="message-box" :value="old('message-box')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('message-box')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4 text-center mt-4 pt-2  btn mainBtn">
                {{ __('Register') }}
            </x-primary-button>

        </div>
    </form>
</x-guest-layout>
