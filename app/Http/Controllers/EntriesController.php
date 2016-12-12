<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Entry;
use App\Models\FieldLink;
use App\Models\FieldPhoneNumber;
use App\Models\FieldTextarea;
use App\Models\FieldTextbox;
use App\Models\FieldType;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($account, Collection $collection)
    {
		$fields = $collection->fields()->with('fieldType')->get();

        return view('dashboard.collections.entries.create', [
        	'collection' => $collection,
			'fields' => $fields
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($account, Collection $collection, Request $request)
    {
        $fields = $request->input('field');

		$entry = new Entry([
			'collection_id' => $collection->id,
			'country_id' => 234,
			'status_id' => 1,
			'name' => 'Test',
			'slug' => 'test',
			'street_1' => '123 Box Street',
			'street_2' => 'B',
			'municipality' => 'Franklin',
			'territory' => 'TN',
			'sub_territory' => 'test',
			'postal_code' => 32748
		]);

		$entry->save();

		$collection->entries()->attach($entry);

		foreach ($fields as $id => $field) {
			$fieldType = FieldType::where('id', $field['type_id'])->first();

			if ($fieldType->name === 'Phone / Fax') {
				$field = new FieldPhoneNumber([
					'field_id' => $id,
					'entry_id' => $entry->id,
					'country_code' => $field['country_code'],
					'area_code' => $field['area_code'],
					'phone' => $field['phone'],
					'extension' => $field['extension']
				]);

				$field->save();
			} else if ($fieldType->name === 'Textbox') {
				$field = new FieldTextbox([
					'field_id' => $id,
					'entry_id' => $entry->id,
					'textbox' => $field['textbox']
				]);

				$field->save();
			} else if ($fieldType->name === 'Link') {
				$field = new FieldLink([
					'field_id' => $id,
					'entry_id' => $entry->id,
					'link' => $field['link_href'],
					'label' => $field['link_label']
				]);

				$field->save();
			}
		}
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
