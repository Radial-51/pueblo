<?php

namespace App\Http\Controllers;

use App\Models\EmployeeRating;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = EmployeeRating::all();
        return view('employee-ratings.index', compact('surveys'));
    }

    public function create()
    {
        return view('employee-ratings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_employee_id' => 'required|integer',
            'counter_employee_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'service_rating' => 'required|integer|min:1|max:5',
            'counter_rating' => 'required|integer|min:1|max:5',
            'service_feedback' => 'nullable|string',
            'counter_feedback' => 'nullable|string',
        ]);

        EmployeeRating::create($request->all());

        return redirect()->route('employee-ratings.index')
            ->with('success', 'Encuesta creada exitosamente.');
    }

    public function show(EmployeeRating $survey)
    {
        return view('employee-ratings.show', compact('survey'));
    }

    public function edit(EmployeeRating $survey)
    {
        return view('employee-ratings.edit', compact('survey'));
    }

    public function update(Request $request, EmployeeRating $survey)
    {
        $request->validate([
            'service_employee_id' => 'required|integer',
            'counter_employee_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'service_rating' => 'required|integer|min:1|max:5',
            'counter_rating' => 'required|integer|min:1|max:5',
            'service_feedback' => 'nullable|string',
            'counter_feedback' => 'nullable|string',
        ]);

        $survey->update($request->all());

        return redirect()->route('employee-ratings.index')
            ->with('success', 'Encuesta actualizada exitosamente.');
    }

    public function destroy(EmployeeRating $survey)
    {
        $survey->delete();

        return redirect()->route('employee-ratings.index')
            ->with('success', 'Encuesta eliminada exitosamente.');
    }
}
