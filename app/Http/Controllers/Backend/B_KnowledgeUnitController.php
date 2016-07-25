<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\KnowledgeUnit;
use App\Unit;
use App\Course;
use Illuminate\Http\Request;
use Carbon\Carbon;

class B_KnowledgeUnitController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$knowledgeunits = KnowledgeUnit::latest()->get();
		return view('backend.admin.knowledgeunit.index', compact('knowledgeunits'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$units = Unit::lists('name', 'id')->toArray();
		return view('backend.admin.knowledgeunit.create', compact('units'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		KnowledgeUnit::create($request->all());
		return redirect('admin/knowledgeunit');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$knowledgeunit = KnowledgeUnit::findOrFail($id);
		$units = Unit::lists('name', 'id')->toArray();

		return view('backend.admin.knowledgeunit.show', compact('knowledgeunit','units'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$knowledgeunit = KnowledgeUnit::findOrFail($id);
		$units = Unit::lists('name', 'id')->toArray();

		return view('backend.admin.knowledgeunit.edit', compact('knowledgeunit', 'units'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$knowledgeunit = KnowledgeUnit::findOrFail($id);
		$knowledgeunit->update($request->all());
		return redirect('admin/knowledgeunit');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		KnowledgeUnit::destroy($id);
		return redirect('admin/knowledgeunit');
	}

}
