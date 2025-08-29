<x-main-layout>
    <div class="flex justify-center items-center w-full">
        @if ($errors->any())
            @foreach ($errors as $error )
            <li>
                <ul>{{ $error ?? $message }}</ul>
            </li>
        @endforeach
        @endif
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <x-card>
                <h1 class="text-lg font-bold">REGISTER</h1>
                <x-form-field>
                    <x-label for="first_name">First Name:</x-label>
                    <x-input id="first_name" name="first_name" :value="old('first_name')" required />
                    <x-form-error name="first_name" />
                </x-form-field>
                <x-form-field>
                    <x-label for="last_name">Last Name:</x-label>
                    <x-input id="last_name" name="last_name" :value="old(key: 'last_name')" required />
                    <x-form-error name="last_name" />
                </x-form-field>
                <x-form-field>
                    <x-label for="email">Email:</x-label>
                    <x-input id="email" name="email" placeholder="Enter email" :value="old('email')" required />
                    <x-form-error name="email" />
                </x-form-field>
                <x-form-field>
                    <x-label for="password">Password:</x-label>
                    <x-input type="password" id="password" name="password" required />
                    <x-form-error name="password" />
                </x-form-field>
                <x-form-field>
                    <x-label for="password_confirmation">Confirm Password:</x-label>
                    <x-input type="password" id="password_confirmation" name="password_confirmation" required />
                    <x-form-error name="password_confirmation" />
                </x-form-field>
                <div class="flex justify-end gap-2">
                    <a href="{{ route('login.index') }}"><x-secondary-button type="button">CANCEL</x-secondary-button></a><x-primary-button type="submit">REGISTER</x-primary-button>
                </div>
            </x-card>
        </form>
    </div>
</x-main-layout>
