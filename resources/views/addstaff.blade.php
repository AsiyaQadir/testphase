<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <form action="addstaff" method="POST">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="sid" value='SID{{ Auth::user()->id }}'>


                <div>
                    <label for="name">Name</lable>
                    <input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                </div>

                <div>
                    <label for="address">Address</lable>
                    <input id="address" class="block mt-1 w-full" type="text" name="address" required />
                </div>

                <div>
                    <label for="cnic">Cnic</lable>
                    <input id="cnic" class="block mt-1 w-full" type="text" name="cnic" required />
                </div>

                <div>
                    <label for="phone">Phone</lable>
                    <input id="phone" class="block mt-1 w-full" type="tel" name="phone" required />
                </div>

                <div>
                    <label for="role">Role</lable>
                    <select id="name" class="block mt-1 w-full" name="role" required >
                        <option value="manager">Manager</option>
                        <option value="mechanic">Mechanic</option>
                        <option value="helper">Helper</option>
                    </select>
                </div>
                <button class="block mt-2 w-full py-2" style="background:#0d6efd;color:#fff;">Save Details</button>
            </form>

        </div>
    </div>
</x-app-layout>