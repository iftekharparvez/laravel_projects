<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
        <a href="{{ URL::previous() }}" style="display: inline-block;text-align:left;" class="underline">Back</a>
        <a href="/add" style="display: block;text-align:right;" class="underline">Add Employee</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="employee-info-container">
                    <div class="employee-info-header">
                        <h2>Employee List</h2>
                    </div>
      
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
