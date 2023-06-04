<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Parents;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function store(Request $request)
    {
        // Create a new parent record
        $parent = Parent::create([
            'fathers_name' => $request->input('fathers_name'),
            'fathers_occupation' => $request->input('fathers_occupation'),
            'mothers_name' => $request->input('mothers_name'),
            'mothers_occupation' => $request->input('mothers_occupation'),
            'guardian_name' => $request->input('guardian_name'),
            'guardian_contact_no' => $request->input('guardian_contact_no'),
            'address' => $request->input('address'),
            'contact_no' => $request->input('contact_no'),
        ]);

        // Retrieve the child data from the request
        $childData = $request->only(
            collect($request->all())->filter(function ($value, $key) {
                return str_starts_with($key, 'inputField');
            })->keys()->toArray()
        );

        // Loop through the child data and create child records
        foreach ($childData as $studentId) {
            // Create a new child record
            Child::create([
                'parent_id' => $parent->id,
                'student_id' => $studentId,
            ]);
        }

        // Redirect or perform any additional actions after saving the data

        return redirect()->route('parent.index');
    }
}