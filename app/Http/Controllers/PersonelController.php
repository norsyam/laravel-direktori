<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use Illuminate\Http\Request;
use App\Http\Controllers\API\ApiPersonelController;

class PersonelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // if($request->filled('search')){
        //     $personels = Personel::search($request->search)->get();
        // }else{
        //     $personels = Personel::all();
        // }

        $personels_response = (new ApiPersonelController)->personel_luar_list();
        // dd($personels->success);
        if($personels_response->success === true){
            $personels = $personels_response->data;
            return view('personel.index',compact('personels'));
        }else{
            return 404;
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // dd($id);
        $personels_response = (new ApiPersonelController)->personel_luar($id);
        // return $personels_response;
        if($personels_response->success === true){
            $personel = $personels_response->data;
            return view('personel.show',compact('personel'));
        }else{
            return 404;
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
