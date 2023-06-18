<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Card;

class MainController extends Controller
{
    public function home() {
        return view('home.index', [
            'title' => 'Login'
        ]);
    }
    public function log() {
        return redirect('/')->with('success', 'Barang created successfully');;
    }

    public function register() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function dashboard() {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }

    public function grind(){

        return view('grind.index', [
            'title' => 'Grind',
        ]);
    }
    public function gacha() {
        $randomCards = Card::inRandomOrder()->take(10)->get();

        $user = Auth()->user();
        if ($user->gems < 999) {
            return redirect('dashboard');
        }
        if ($user->gems > 1000) {
            $user->gems -= 1000;
            $user->save();
            return view('gacha.index', compact('randomCards'), ['title' => 'Gacha']);
        }

    }

    public function increase()
    {
        $user = Auth::user();
        $user->gems += mt_rand(500, 1000);
        $user->save();
        
        return response()->json(['success' => true]);
    }
}
