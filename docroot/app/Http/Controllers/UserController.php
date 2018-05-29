<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19
 * Time: 14:56
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['show', 'index']);;
	}

	/**
	 * @param $slug can be user name or id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($slug)
	{
		if(is_numeric($slug)){
			$user = User::findOrFail($slug);
		}else{
			$user = User::where('name', $slug)->firstOrFail();
		}

		return view('user.profile', [ 'user'=>$user ]);
	}

	/**
	 * @param $id must be userid
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('user.edit', [ 'user'=>$user ]);
	}

	/**
	 * @param Request $request Dependency injection
	 * @param $id
	 */
	public function update(Request $request, $id){
		$user = User::findOrFail($id);
		$user->name = $request->input('username');
		$user->email = $request->input('email');
		$user->password = bcrypt($request->input('password'));
		$user->save();
		return view('user.profile', [ 'user'=>$user ]);
	}
}