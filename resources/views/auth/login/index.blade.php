<x-main-layout>
    <div class="flex justify-center items-center w-full min-h-screen">
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <div class="flex flex-col gap-2 justify-center p-5 border rounded w-lg">
                <h1 class="text-lg font-bold">LOGIN</h1>
                <div class="flex gap-2 justify-between">
                    <label for="email" class="w-24">Email:</label>
                    <x-input id="email" name="email" placeholder="Enter email"></x-input>
                    <x-form-error name="email" />
                </div>
                <div class="flex gap-2 justify-between">
                    <label for="password" class="w-24">Password:</label>
                    <x-input type="password" id="password" name="password" placeholder="Enter Password"></x-input>
                    <x-form-error name="password" />
                </div>
                <x-primary-button>LOGIN</x-primary-button>
                <p>Don't have account?
                    <a href="/register" class="hover:bg-black-100 cursor-pointer"
                        data-open-modal="registerModal">Sign in
                    </a>
                </p>
            </div>
        </form>
    </div>
</x-main-layout>
