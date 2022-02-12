<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        return redirect(route('dashboard.create'))->with('flash_message', 'redirected!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::with('contact')->find(Auth::id());
        return view('cabinet', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'user_id' => 'required',
            'firstname' => 'required',
            'middle' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'address' => 'required',
            'housenumber' => 'required|integer',
            'postalcode' => 'required',
            'phonenumber' => 'required',
            'dateofbirth' => 'required',
        ]);

        $data = $request->all();

        $userContacts = Contact::where('user_id', '=', $data['user_id'])->first();
        if (isset($userContacts)) {
            $userContacts->update($request->all());
            return redirect(route('dashboard.create'))->with('flash_message', 'Contacts was updated successfuly!');
        } else {
            Contact::create($data);
            return redirect(route('dashboard.create'))->with('flash_message', 'Data was stored successfuly!');
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
