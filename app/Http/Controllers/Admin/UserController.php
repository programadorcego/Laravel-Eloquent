<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\User;

class UserController extends Controller
{
	public function index()
	{
		$title = "Usuários";
		$users = User::all();
		return view("admin.users.index", compact("title", "users"));
	}
	
	public function show(int $id)
	{
		$title = "Usuário";
		$user = User::find($id);
		return view('admin.users.show', compact("title", "user"));
	}
	
	public function create()
	{
		/*$user = new User();
		$user->name = "Willian Pereira";
		$user->email = "willian@email.com";
		$create = $user->save();
		
		if($create)
		{
			return redirect()->route("user", $user->id);
		}*/

		$user = User::create(['name' => 'Willian Pereira', 'email' => 'willian@email.com']);

		if($user)
		{
			return redirect()->route("user", $user->id);
		}
	}
	
	public function update(int $id)
	{
		$update = DB::table("users")->where("id", $id)->update(['name' => 'Usuário Teste Update']);
		
		if($update)
		{
			return redirect()->route("users");
		}
	}
	
	public function delete(int $id)
	{
		$delete = DB::table("users")->where("id", $id)->delete();
		
		if($delete)
		{
			return redirect()->route("users");
		}
	}
}
