<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Models\BookMonthly;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Book_monthlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book_monthly.index', ['book' => BookMonthly::paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book_monthly.create');

    }
    public function phone_user($id)
    {
        $book = BookMonthly::findOrFail($id);
        $phone= User::where('id',$book->user_id)->first();

        $book->user_id=$phone->phone;

        return view('book_monthly.index', ['book' => $book]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = BookMonthly::findOrFail($id);
        return view('book_monthly.edit', ['book' => $book]);
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

        $book = BookMonthly::findOrFail($id);

        $reqData = $request->all();


        $book->update($reqData);
        return redirect()->route('book_monthly.index')->withStatus(__('Book monthly updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = BookMonthly::findOrFail($id);
        $book->delete();
        return redirect()->route('book_monthly.index')->withStatus(__('Book monthly deleted successfully.'));
    }
}

