<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;

class UjiControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function login()
     {
         return view('sign.login');
     }

     public function logout()
     {
        Auth::logout();
        return redirect('/login');
     }

     public function admin()
     {
        return view('dash.dashboards');
     }
     

    public function landing()
    {
        $otobook = Book::orderBy('downloaded', 'desc')->take(6)->get();
        return view('home', compact('otobook'));
    }
    

    public function index()
    {
        return view('sign.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regis = User::where('role', 'user')->get();
        return view('dash.data', compact('regis')); 
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
            'name' => 'required|min:5',
            'email' => 'required|email:dns',
            'no_hp' => 'required|min:1|max:13',
            'askot' => 'required|min:4',
            'password' => 'required|min:5',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'askot' => $request->askot,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('sign.login')->with('success', 'berhasil menambahkan akun! silahkan login');
    }

    public function tambah(Request $request)
    {$keyword = $request->keyword;
        // dd($keyword);
        $category = book::where('title', 'LIKE', '%' . $keyword . '%')->paginate(15);
        return view('dash.create', compact('category'));
    }

    public function auth(Request $request)
    {
        $check = $request->validate([
            'email'=>'required|exists:users,email',
            'password'=>'required',
        ],
        [
            'email.exists' => 'email belum terdaftar',
            'email.required' => 'email harus diisi',
            'password.required' => 'password harus diisi',
        ]);
        if(Auth::attempt($check)){
            $request->session()->regenerate();
            return redirect()->intended('/')->with('succes', 'Berhasil Login');
        } else {
            return redirect()->back()->with('error', 'Silahkan Cek dan Coba Lagi');
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

    public function destroy(user $user, $id)
    {
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->route('dash.data')->with('succes', 'berhasil menghapus');
    }
}
