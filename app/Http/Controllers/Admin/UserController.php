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
		$users = User::where(['id' => 10])->get();
		return view("admin.users.index", compact("title", "users"));
	}
	
	public function show(int $id)
	{
		/*echo "<h1>Usuário</h1>";
		
		echo "<p>{$this->users[$id][0]} | {$this->users[$id][1]}</p>";*/
		
		$title = "Usuário";
		//$user = $this->users[$id];
		//$user = DB::table("users")->select("id", "name", "email")->where('id', $id)->first();
		$user = DB::table("users")->find($id);
		return view('admin.users.show', compact("title", "user"));
	}
	
	public function create()
	{
		$create = DB::table("users")->insert([
			'name' => 'Usuário Teste',
			'email' => 'teste@meuemail.com.br',
		]);
		
		if($create)
		{
			return redirect()->route("users");
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
