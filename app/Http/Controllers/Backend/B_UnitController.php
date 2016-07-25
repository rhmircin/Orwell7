<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Unit;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UnitRequest;
use Carbon\Carbon;

class B_UnitController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$units = Unit::latest()->get();
		return view('backend.admin.unit.index', compact('units'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$courses = Course::lists('name', 'id')->toArray();
		return view('backend.admin.unit.create', compact('courses'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UnitRequest $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Unit::create($request->all());
		return redirect('admin/unit');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$unit = Unit::findOrFail($id);
		$courses = Course::lists('name', 'id')->toArray();

		return view('backend.admin.unit.show', compact('unit','courses'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$unit = Unit::findOrFail($id);
		$courses = Course::lists('name', 'id')->toArray();

		return view('backend.admin.unit.edit', compact('unit','courses'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UnitRequest $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$unit = Unit::findOrFail($id);
		$unit->update($request->all());
		return redirect('admin/unit');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Unit::destroy($id);
		return redirect('admin/unit');
	}

}
