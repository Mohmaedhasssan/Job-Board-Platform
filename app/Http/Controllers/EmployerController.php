<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        return Employer::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'logo' => ['required'],
            'user_id' => ['required', 'exists:users'],
        ]);

        return Employer::create($data);
    }

    public function show(Employer $employer)
    {
        return $employer;
    }

    public function update(Request $request, Employer $employer)
    {
        $data = $request->validate([
            'name' => ['required'],
            'logo' => ['required'],
            'user_id' => ['required', 'exists:users'],
        ]);

        $employer->update($data);

        return $employer;
    }

    public function destroy(Employer $employer)
    {
        $employer->delete();

        return response()->json();
    }
}
