<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
        <a href="{{ URL::previous() }}" style="display: inline-block;text-align:left;" class="underline">Back</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 style="text-align: center;font-weight:700;" class="p-6">Add New Employees</h1>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('pages.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                    
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3">
                        </div>
                    
                        <div class="mb-4">
                            <label for="father_name" class="block text-gray-700 text-sm font-bold mb-2">Father's Name:</label>
                            <input type="text" name="father_name" id="father_name" class="border rounded w-full py-2 px-3">
                        </div>
                    
                        <div class="mb-4">
                            <label for="mother_name" class="block text-gray-700 text-sm font-bold mb-2">Mother's Name:</label>
                            <input type="text" name="mother_name" id="mother_name" class="border rounded w-full py-2 px-3">
                        </div>
                    
                        <div class="mb-4">
                            <label for="card_no" class="block text-gray-700 text-sm font-bold mb-2">Card No:</label>
                            <input type="number" name="card_no" id="card_no" class="border rounded w-full py-2 px-3">
                        </div>
                    
                        <div class="mb-4">

                            <label class="inline-flex items-center" for="gender">Gender: </label>
                            <select name="gender" id="gender">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>                               
                           
                        </div>
                    
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Marital Status:</label>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="marital_status" value="0" class="form-radio" checked>
                                    <span class="ml-2">Married</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" name="marital_status" value="1" class="form-radio">
                                    <span class="ml-2">Unmarried</span>
                                </label>
                            </div>
                        </div>
                    
                        <div class="mb-4">
                            <label for="date_of_birth" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth:</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="border rounded w-full py-2 px-3">
                        </div>
                    
                        <div class="mb-4">
                            <label for="salary" class="block text-gray-700 text-sm font-bold mb-2">Salary:</label>
                            <input type="number" name="salary" id="salary" class="border rounded w-full py-2 px-3">
                        </div>
                    

                        {{-- <div class="mb-4">
                            <label for="is_ot_enable">Is OT Enabled?</label>
                            <select name="is_ot_enable" id="is_ot_enable">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div> --}}

                        <div class="mb-4">
                            <label for="is_ot_enable">Is OT Enabled?</label>
                            <input type="checkbox" name="is_ot_enable" id="is_ot_enable_yes" value="1" checked> Yes
                            <input type="checkbox" name="is_ot_enable" id="is_ot_enable_no" value="0"> No
                        </div>
                    

                        

                        <div class="mb-4">
                            <label for="present_address" class="block text-gray-700 text-sm font-bold mb-2">Present Address:</label>
                            <textarea name="present_address" id="present_address" class="border rounded w-full py-2 px-3"></textarea>
                        </div>
                    
                        <div class="mb-4">
                            <label for="permanent_address" class="block text-gray-700 text-sm font-bold mb-2">Permanent Address:</label>
                            <textarea name="permanent_address" id="permanent_address" class="border rounded w-full py-2 px-3"></textarea>
                        </div>
                    
                        <div class="mb-4">
                            <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                            <input type="file" name="photo" id="photo" class="border rounded w-full py-2 px-3">
                        </div>
                                        

                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500  py-2 px-4 rounded view-button">Add Employee</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
