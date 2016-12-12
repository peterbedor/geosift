<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Field;
use App\Models\FieldLink;
use App\Models\FieldPhoneNumber;
use App\Models\FieldTextarea;
use App\Models\FieldTextbox;
use App\Models\FieldType;
use Illuminate\Http\Request;

class FieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($account, Collection $collection, Request $request)
    {
		$data = $request->all();

        $type = $request->input('field');

		switch ($type) {
			case 'phone-number':
				$this->createPhoneNumberField($data, $collection);

				break;
			case 'textbox':
				$this->createTextBoxField($data, $collection);

				break;
			case 'textarea':
				$this->createTextareaField($data, $collection);

				break;
			case 'link':
				$this->createLinkField($data, $collection);

				break;
		}
    }

	public function createField($fieldId, $data, $collection)
	{
		$field = new Field([
			'field_type_id' => $fieldId,
			'name' => $data['field_name'],
			'description' => $data['field_description']
		]);

		$field->save();

		$field->collections()->attach($collection);
    }

	public function createPhoneNumberField($data, $collection)
	{
		$fieldType = FieldType::where('name', 'Phone / Fax')->first();

		$this->createField($fieldType->id, $data, $collection);
    }

	public function createTextBoxField($data, $collection)
	{
		$fieldType = FieldType::where('name', 'Textbox')->first();

		$this->createField($fieldType->id, $data, $collection);
    }

	public function createTextareaField($data, $collection)
	{
		$fieldType = FieldType::where('name', 'Textarea')->first();

		$this->createField($fieldType->id, $data, $collection);
    }

	public function createLinkField($data, $collection)
	{
		$fieldType = FieldType::where('name', 'Link')->first();

		$this->createField($fieldType->id, $data, $collection);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
