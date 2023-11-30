<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\User;

class UserController extends Controller
{
	protected $users = [
		['name' => 'João Silva', 'email' => 'joao.silva@email.com'],
		['name' => 'Maria Oliveira', 'email' => 'maria.oliveira@email.com'],
		['name' => 'Pedro Santos', 'email' => 'pedro.santos@email.com'],
		['name' => 'Ana Costa', 'email' => 'ana.costa@email.com'],
		['name' => 'Ricardo Pereira', 'email' => 'ricardo.pereira@email.com'],
		['name' => 'Catarina Santos', 'email' => 'catarina.santos@email.com'],
		['name' => 'Hugo Martins', 'email' => 'hugo.martins@email.com'],
		['name' => 'Carla Rodrigues', 'email' => 'carla.rodrigues@email.com'],
		['name' => 'André Almeida', 'email' => 'andre.almeida@email.com'],
		['name' => 'Sofia Pereira', 'email' => 'sofia.pereira@email.com'],
		['name' => 'Daniel Silva', 'email' => 'daniel.silva@email.com'],
		['name' => 'Marta Costa', 'email' => 'marta.costa@email.com'],
		['name' => 'Luís Oliveira', 'email' => 'luis.oliveira@email.com'],
		['name' => 'Inês Martins', 'email' => 'ines.martins@email.com'],
		['name' => 'Paulo Santos', 'email' => 'paulo.santos@email.com'],
		['name' => 'Mariana Costa', 'email' => 'mariana.costa@email.com'],
		['name' => 'Tiago Pereira', 'email' => 'tiago.pereira@email.com'],
		['name' => 'Raquel Almeida', 'email' => 'raquel.almeida@email.com'],
		['name' => 'Diogo Rodrigues', 'email' => 'diogo.rodrigues@email.com'],
		['name' => 'Cátia Silva', 'email' => 'catia.silva@email.com'],
		['name' => 'Bruno Santos', 'email' => 'bruno.santos@email.com'],
		['name' => 'Carolina Oliveira', 'email' => 'carolina.oliveira@email.com'],
		['name' => 'Nuno Pereira', 'email' => 'nuno.pereira@email.com'],
		['name' => 'Andreia Costa', 'email' => 'andreia.costa@email.com'],
		['name' => 'Rui Martins', 'email' => 'rui.martins@email.com'],
		['name' => 'Filipa Rodrigues', 'email' => 'filipa.rodrigues@email.com'],
		['name' => 'João Santos', 'email' => 'joao.santos@email.com'],
		['name' => 'Patrícia Oliveira', 'email' => 'patricia.oliveira@email.com'],
		['name' => 'Ricardo Costa', 'email' => 'ricardo.costa@email.com'],
		['name' => 'Catarina Almeida', 'email' => 'catarina.almeida@email.com'],
		['name' => 'Hélder Silva', 'email' => 'helder.silva@email.com'],
		['name' => 'Tânia Martins', 'email' => 'tania.martins@email.com'],
		['name' => 'Miguel Pereira', 'email' => 'miguel.pereira@email.com'],
		['name' => 'Sara Costa', 'email' => 'sara.costa@email.com'],
		['name' => 'José Rodrigues', 'email' => 'jose.rodrigues@email.com'],
		['name' => 'Andreia Silva', 'email' => 'andreia.silva@email.com'],
		['name' => 'Hugo Oliveira', 'email' => 'hugo.oliveira@email.com'],
		['name' => 'Cristina Santos', 'email' => 'cristina.santos@email.com'],
		['name' => 'Francisco Almeida', 'email' => 'francisco.almeida@email.com'],
		['name' => 'Liliana Silva', 'email' => 'liliana.silva@email.com'],
		['name' => 'Carlos Martins', 'email' => 'carlos.martins@email.com'],
		['name' => 'Beatriz Pereira', 'email' => 'beatriz.pereira@email.com'],
		['name' => 'Jorge Costa', 'email' => 'jorge.costa@email.com'],
		['name' => 'Ana Rodrigues', 'email' => 'ana.rodrigues@email.com'],
		['name' => 'Manuel Santos', 'email' => 'manuel.santos@email.com'],
		['name' => 'Diana Oliveira', 'email' => 'diana.oliveira@email.com'],
		['name' => 'Rafael Almeida', 'email' => 'rafael.almeida@email.com'],
		['name' => 'Isabel Costa', 'email' => 'isabel.costa@email.com']
	];

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

		/*$user = User::create(['name' => 'Willian Pereira', 'email' => 'willian@email.com']);

		if($user)
		{
			return redirect()->route("user", $user->id);
		}*/

		$user = User::insert($this->users);
		return redirect()->route("users");
	}
	
	public function update(int $id)
	{
		$user = User::where("id", "<", 11)->update(["name" => "João Silva"]);
		return redirect()->route("users");
	}
	
	public function delete(int $id)
	{
		$user = User::truncate();
		return redirect()->route("users");
	}
}
