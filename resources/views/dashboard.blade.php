<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="btn">
                <a href="/addstaff">Add Staff</a>
                <a href="/viewmechanic">View Mechanic</a>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
.btn a{
    font-size:20px;
    padding: 5px 20px;
    font-weight:bold;
    color:#fff;
    background: #dd0000;
}
</style>