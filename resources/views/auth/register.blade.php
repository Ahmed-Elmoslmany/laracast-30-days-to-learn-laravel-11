<x-layout>
    <x-slot name="heading">
        Register
    </x-slot>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="title">First name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="first_name" id="first_name" placeholder="Ahmed Elmmosmany"/>
                            <x-form-error name="first_name"/>
                        </div>
                    </x-form-field>
                </div>
                <x-form-field class="sm:col-span-4">
                    <x-form-label for="salary">Last name</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="last_name" id="last_name" placeholder="$ 30,000"/>
                        <x-form-error name="last_name"/>
                    </div>
                </x-form-field>

                <x-form-field class="sm:col-span-4">
                    <x-form-label for="salary">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="text" name="email" id="email" placeholder="$ 30,000"/>
                        <x-form-error name="email"/>
                    </div>
                </x-form-field>
            </div>
        </div>





        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>


    </form>

</x-layout>
