<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use App\Quyen;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Gate;
class UserController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        $users->count();

        return view('backend.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('backend.user.index'));
        }
        $quyen = Quyen::all();
        
        return view('backend.users.edit')->with([
            'quyen' => $quyen,
            'user' => $user,
            ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // // Tìm object Sản phẩm theo khóa chính
        $user->name = $request->name;
        $user->username = $request->username;
        $user->genre = $request->genre;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->updated_at = Carbon::now();
        $user->active = $request->active;
        $user->save();
        $user->quyens()->sync($request->quyen);
        $request->session()->flash('alert-info', 'Cập nhật thành công');

        return redirect()->route('backend.user.index');
//dd($request);   
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect(route('backend.user.index'));
        }
        $user->quyens()->detach();
        $user->delete();
    }
}
