<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Book;
use App\User;
use App\Follow;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarioLog=Auth::user();
      $myBooks=Book::where("user_id","=","$usuarioLog->id")->get();
      $vac=compact("myBooks");
      return view("/profile",$vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $reglas = [
        'image' => 'file|image',
      ];

      $mensajes = [
        'image' => 'El campo :attribute debe ser una imagen',
        'file' => 'El campo :attribute no se cargo correctamente',

      ];

      $this->validate($req, $reglas, $mensajes);

      $user=Auth::user();
      $ruta = $req->file('image')->store('public');
      $nombreArchivo = basename($ruta);
      $user->image=$nombreArchivo;
      $user->save();
      return redirect("/profile");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showNormalProfile($id)
    {
      $usuarioLog=Auth::user();

      $user = User::find($id);
      $follow=Follow::where("target_id","=",$user->id)->get();
      $following=Follow::where("user_id","=",$usuarioLog["id"] )
->join('users', 'users.id', '=', 'follows.target_id')
->select('follows.*','users.*')->get();
      $userBooks = Book::where('user_id', '=', $id)->get();
      $usuarioLog=Auth::user();

      $vacLibros=compact("userBooks");
      $vacUser = compact('user', 'follow','following','usuarioLog');
      $vacFollow = compact('follow');
      return view("/normalProfile", $vacLibros, $vacUser);
    }


    public function showOwnProfile()
    {
      $usuarioLog=Auth::user();

      $user = User::find($usuarioLog->id);
      $follow=Follow::where("target_id","=",$usuarioLog["id"] )->get();
      $following=Follow::where("user_id","=",$usuarioLog["id"] )->get();
      $userBooks = Book::where('user_id', '=', $usuarioLog["id"])->get();
      $usuarioLog=Auth::user();
      $myBooks=Book::where("user_id","=","$usuarioLog->id")->get();


      $vacLibros=compact("userBooks");
      $vacUser = compact('user', 'follow','following','myBooks','usuarioLog');

      return view("/profile", $vacLibros, $vacUser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {

     $usuarioLog=Auth::user();
     $usuarioLog->name=$req["name"];
     $usuarioLog->password=bcrypt($req["password"]);

     $usuarioLog->save();

     return redirect("/profile");
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
