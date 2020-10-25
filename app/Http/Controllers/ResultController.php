<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ResultController extends Controller
{

	/**
	 * Handle the incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */



	public function store()
	{

		$v = request()->get('Valor');

		if ($v == null) {
			$resultado = "?";
		}

		$u1 = request()->get('Unit_1');
		$u2 = request()->get('Unit_2');


		if ($u1 < $u2 && $v != null) {

			$resultado = ($v / (pow(10, ($u2 - $u1))));
		}

		if ($u1 > $u2 && $v != null) {

			$resultado = ($v * (pow(10, ($u1 - $u2))));
		}

		if ($u1 == $u2 && $v != null) {

			$resultado = $v;
		}





		$user_ = User::find(auth()->user()->id);

		if ($u2 == 0) {
			
			$user_->milimeters = $user_->milimeters+1;

			$user_->save();
		}

		else if ($u2 == 1) {

			$user_->centimeters = $user_->centimeters+1;

			$user_->save();
		}

		else if ($u2 == 2) {

			$user_->decimeters = $user_->decimeters+1;

			$user_->save();
		}

		else if ($u2 == 3) {

			$user_->meters = $user_->meters+1;

			$user_->save();
		}

		else if ($u2 == 4) {

			$user_->decameters = $user_->decameters+1;

			$user_->save();
		}

		else if ($u2 == 5) {

			$user_->hectometers = $user_->hectometers+1;

			$user_->save();
		}

		else if ($u2 == 6) {

			$user_->kilometers = $user_->kilometers+1;

			$user_->save();
		}




		return view('result', compact('resultado'));
	}
}
