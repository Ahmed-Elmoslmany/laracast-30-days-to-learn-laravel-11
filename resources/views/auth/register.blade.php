<x-layout>
    <x-slot name="heading">
        Register
    </x-slot>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="first_name">First name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="first_name" id="first_name" placeholder="Ahmed " required/>
                            <x-form-error name="first_name"/>
                        </div>
                    </x-form-field>
                </div>
                <x-form-field class="sm:col-span-4">
                    <x-form-label for="last_name">Last name</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="last_name" id="last_name" placeholder="Elmmosmany" required/>
                        <x-form-error name="last_name"/>
                    </div>
                </x-form-field>

                <x-form-field class="sm:col-span-4">
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="email" id="email" placeholder="ahmed@mail.com" required/>
                        <x-form-error name="email"/>
                    </div>
                </x-form-field>

                <x-form-field class="sm:col-span-4">
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password" id="password" placeholder="*********" required/>
                        <x-form-error name="password"/>
                    </div>
                </x-form-field>
                <x-form-field class="sm:col-span-4">
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="*********" required/>
                        <x-form-error name="password_confirmation"/>
                    </div>
                </x-form-field>
            </div>
        </div>





        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>


    </form>

</x-layout>
