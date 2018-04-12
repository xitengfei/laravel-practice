<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/1
 * Time: 11:39
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		echo 'Hello welcome to dashboard!';
	}
}