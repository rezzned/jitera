<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Users::With('getAddress')->With('getCompany')->get();

        $arrUser = [];

        foreach ($users as $vusers) {
            $address = $vusers->getAddress;

            $geo = $vusers->getAddress->Geo;

            $rAddress = (array_merge(json_decode($address, true), json_decode($geo, true)));

            $arrUser[] = [
                'name' => $vusers->name,
                'username' => $vusers->username,
                'email' => $vusers->email,
                'address' => $address,
                'phone' => $vusers->phone,
                'website' => $vusers->website,
                'company' => $vusers->getCompany
            ];
        }

        return response()->json($arrUser);
    }

    public function searchByFollower(Request $request)
    {
        //
        $key = $request->key;

        $users = Users::With('getFollow')->Where('name', $key)->get();

        foreach ($users as $vusers) {
            $rFollow = NULL;
            $address = $vusers->getAddress;

            $geo = $vusers->getAddress->Geo;

            $rAddress = (array_merge(json_decode($address, true), json_decode($geo, true)));

            foreach($vusers->getFollow as $follow){
                $rFollow[] = $follow->getFollowInfo;
            }

            $arrUser[] = [
                'name' => $vusers->name,
                'username' => $vusers->username,
                'email' => $vusers->email,
                'address' => $address,
                'phone' => $vusers->phone,
                'website' => $vusers->website,
                'company' => $vusers->getCompany,
                'follow' => $rFollow
            ];
        }


        return response()->json($arrUser);
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
    public function store(Request $request)
    {
        //
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
