<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
class EmployeeController extends Controller
{

    public function datalist()
    {
        //

        $datalist = Employee::oldest()->get();
        return view('/dashboard', ['data' => $datalist]);
        
    }


    public function create()
    {
        //
        return view('pages.add');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'card_no' => 'required|integer',
            'gender' => 'required|in:1,2,3', // Assuming 0 for male, 1 for female
            'marital_status' => 'required|in:0,1', // Assuming 0 for married, 1 for unmarried
            'date_of_birth' => 'nullable|date',
            'salary' => 'required|numeric',
            'is_ot_enable' => 'required|in:0,1',
            
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules
        ]);

        // Handle file upload if a photo is provided
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Create and save the Employee model
        $employee = new Employee([
            'name' => $request->input('name'),
            'father_name' => $request->input('father_name'),
            'mother_name' => $request->input('mother_name'),
            'card_no' => $request->input('card_no'),
            'gender' => $request->input('gender'),
            'marital_status' => $request->input('marital_status'),
            'date_of_birth' => $request->input('date_of_birth'),
            'salary' => $request->input('salary'),

          

            'is_ot_enable' => $request->input('is_ot_enable'),

            'present_address' => $request->input('present_address'),
            'permanent_address' => $request->input('permanent_address'),
            'photo' => $photoPath,
        ]);


        $employee->save();

        return redirect('/home')->with('success', 'Employee added successfully!');

    
    }



    public function edit(Employee $employee, $id)
    {
        $employee = Employee::findOrFail($id);
        return view('pages.edit', ['employeedata' => $employee]);
    }
    
// EmployeeController.php

public function update(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string',
        'father_name' => 'required|string',
        'mother_name' => 'required|string',
        'card_no' => 'required|integer',
        'gender' => 'required|in:1,2,3',
        'marital_status' => 'required|in:0,1',
        'date_of_birth' => 'nullable|date',
        'salary' => 'required|numeric',
        'is_ot_enable' => 'required|in:0,1',
        'present_address' => 'required|string',
        'permanent_address' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Find the employee by ID
    $employee = Employee::find($id);

    // Handle file upload if a new photo is provided
    if ($request->hasFile('photo')) {
        // Delete the existing photo if it exists
        if ($employee->photo) {
            Storage::disk('public')->delete($employee->photo);
        }

        // Store the new photo
        $photoPath = $request->file('photo')->store('photos', 'public');
        $employee->photo = $photoPath;
    }

    // Update employee data
    $employee->update([
        'name' => $request->input('name'),
        'father_name' => $request->input('father_name'),
        'mother_name' => $request->input('mother_name'),
        'card_no' => $request->input('card_no'),
        'gender' => $request->input('gender'),
        'marital_status' => $request->input('marital_status'),
        'date_of_birth' => $request->input('date_of_birth'),
        'salary' => $request->input('salary'),
        'is_ot_enable' => $request->input('is_ot_enable'),
        'present_address' => $request->input('present_address'),
        'permanent_address' => $request->input('permanent_address'),
    ]);

    $employee->save();

    return redirect('/home')->with('success', 'Employee updated successfully!');
}







    public function show(Employee $employee, $id)
    {
        //
        $employee = Employee::findOrFail($id);
        return view('pages.single', ['single' => $employee]);
    }

    public function destroy(Employee $employee, $id)
    {
        //
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('/home');
    }
}
