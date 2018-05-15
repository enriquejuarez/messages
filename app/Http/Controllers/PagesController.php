<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
	public function home()
	{
		return view('home');
	}

	public function saludo($nombre = 'Carlos')
	{
		return view('saludo',compact('nombre'));
	}

	public function mensajes(CreateMessageRequest $request)
	{
		$data = $request->all();
		return back()->with('info', 'Tu mensaje ha sido enviado correctamente');

	}
}
