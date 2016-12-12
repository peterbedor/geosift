<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Field;
use Auth;
use App\Http\Requests\StoreCollection as Request;
use App\Models\Collection;

class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($account)
    {
		$account = Account::where('slug', $account)->first();

		$collections = $account->collections()
			->withCount('entries')
			->get();

        return view('dashboard.collections.index', [
        	'collections' => $collections
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.collections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$collection = new Collection([
			'name' => $request->input('name'),
			'slug' => str_slug($request->input('name')),
			'account_id' => Auth::user()->account_id
		]);

		$collection->save();

		return redirect('/collections/' . $collection->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($account, Collection $collection)
    {

		return view('dashboard.collections.show', [
     		'collection' => $collection,
			'entries' => $collection->entries()->with('country')->fields()->get()
		]);
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
