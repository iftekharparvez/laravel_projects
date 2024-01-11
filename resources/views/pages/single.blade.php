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
                        <h2>Employee Information</h2>
                    </div>
                    <div class="employee-info-content">
                        <div class="info-item">
                            <label>ID:</label>
                            <span>{{$single->id}}</span>
                        </div>
                        <div class="info-item">
                            <label>Employee Name:</label>
                            <span>{{$single->name}}</span>
                        </div>
                        <div class="info-item">
                            <label>Father's Name:</label>
                            <span>{{$single->father_name}}</span>
                        </div>
                        <div class="info-item">
                            <label>Mother's Name:</label>
                            <span>{{$single->mother_name}}</span>
                        </div>
                        <div class="info-item">
                            <label>Card No:</label>
                            <span>{{$single->card_no}}</span>
                        </div>
                        <div class="info-item">
                            <label>Gender:</label>
                            <span>
                                @if($single->gender == '1')
                                Male
                                @elseif($single->gender == '2')
                                Female
                                @else
                                Other
                                @endif
                            </span>
                        </div>
                        <div class="info-item">
                            <label>Marital Status:</label>
                            <span>
                                @if($single->marital_status == '0')
                                Married
                                @else
                                Unmarried
                                @endif
                            </span>
                        </div>
                        <div class="info-item">
                            <label>Date Of Birth:</label>
                            <span>{{$single->date_of_birth}}</span>
                        </div>
                        <div class="info-item">
                            <label>Is Ot Enable:</label>
                            <span>
                                @if($single->is_ot_enable == '1')
                                Yes
                                @else
                                No
                                @endif
                            </span>
                        </div>
                        <div class="info-item">
                            <label>Present Address:</label>
                            <span>{{$single->present_address}}</span>
                        </div>
                        <div class="info-item">
                            <label>Permanent Address:</label>
                            <span>{{$single->permanent_address}}</span>
                        </div>
                        <div class="info-item">
                            <label>Photo:</label>
                            <span>
                                <img src="{{ asset('storage/' . $single->photo) }}" alt="Uploaded Photo">
                            </span>
                        </div>
                        <div class="info-item">
                            <label>Salary:</label>
                            <span>{{$single->salary}}</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
