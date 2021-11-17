<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\VerifyUser;
use Illuminate\Http\Request;
use App\Mail\RegisteredMessage;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreRegisterRequest;
use App\Http\Repository\RegisterRepository;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $registerRepository;

    public function __construct()
    {
        $this->registerRepository = new RegisterRepository;
    }
    public function index()
    {
        return view('auth.register');
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
    public function store(StoreRegisterRequest $request)
    {
        $user = $this->registerRepository;
        $user->store($request);

        return view('mail.notification')->with('success', 'verification code is sent to your email');
    }
    public function verifyEmail($token)
    {
        if ($this->registerRepository->emailVerify($token)) {
            return redirect()->route('store.login')->with('success', 'email verified');
        }
        return redirect()->route('register')->with('message', 'something went wrong');
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
