<x-modal id="registerModal">
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <x-card>
        <div class="flex justify-between">
            <h1 class="text-lg font-bold">REGISTER</h1>
            <x-secondary-button data-close-modal="registerModal"><i class='bx  bx-x'></i> </x-secondary-button>
        </div>
        <div class="flex gap-2 justify-between">
            <label for="email" class="w-30">Email:</label>
            <x-input id="email" name="email" placeholder="Enter email"></x-input>
        </div>
        <div class="flex gap-2 justify-between">
            <label for="password" class="w-30">Password:</label>
            <x-input type="password" id="password" name="password" placeholder="Enter password"></x-input>
        </div>
        <div class="flex gap-2 justify-between">
            <x-label>Confirm Password </x-label>
            <x-input type="password_confirmation" id="password_confirmation" name="password_confirmation" />
        </div>
        <div class="flex justify-end gap-2">
            <x-secondary-button>CANCEL</x-secondary-button><x-primary-button>REGISTER</x-primary-button>
        </div>
    </x-card>
    </form>
</x-modal>
