<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>

        
        <a href="/add" style="display: block;text-align:right;" class="underline">Add Employee</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>Employee List Items</h2>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th>Present Address</th>
                            <th>Action</th>
                        </tr>
                        @foreach($data as $singledata)
                        <tr>
                            <td>{{$singledata->id}}</td>
                            <td>{{$singledata->name}}</td>
                            <td>{{$singledata->father_name}}</td>
                            <td>{{$singledata->mother_name}}</td>
                            <td>{{$singledata->present_address}}</td>
                            <td class="action-buttons">
                                <a href="/single-employee/{{$singledata->id}}" class="view-button">View</a>
                                <a href="/edit-employee/{{$singledata->id}}/edit" class="edit-button">Edit</a>

                                <form style="display:inline;" onsubmit="return confirm('Do you want to delete?');" action="/delete-employee/{{$singledata->id}}/delete" method="POST">
                                    @csrf
                                    <button type="submit" class="delete-button">Delete</button>
                                </form>


                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
