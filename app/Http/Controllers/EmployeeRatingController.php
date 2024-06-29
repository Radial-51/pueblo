<?php

namespace App\Http\Controllers;

use App\Models\EmployeeRating;
use App\Http\Requests\EmployeeRatingRequest;

/**
 * Class EmployeeRatingController
 * @package App\Http\Controllers
 */
class EmployeeRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeRatings = EmployeeRating::paginate();

        return view('employee-rating.index', compact('employeeRatings'))
            ->with('i', (request()->input('page', 1) - 1) * $employeeRatings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employeeRating = new EmployeeRating();
        return view('employee-rating.create', compact('employeeRating'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRatingRequest $request)
    {
        EmployeeRating::create($request->validated());

        return redirect()->route('employee-ratings.index')
            ->with('success', 'EmployeeRating created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employeeRating = EmployeeRating::find($id);

        return view('employee-rating.show', compact('employeeRating'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employeeRating = EmployeeRating::find($id);

        return view('employee-rating.edit', compact('employeeRating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRatingRequest $request, EmployeeRating $employeeRating)
    {
        $employeeRating->update($request->validated());

        return redirect()->route('employee-ratings.index')
            ->with('success', 'EmployeeRating updated successfully');
    }

    public function destroy($id)
    {
        EmployeeRating::find($id)->delete();

        return redirect()->route('employee-ratings.index')
            ->with('success', 'EmployeeRating deleted successfully');
    }
}