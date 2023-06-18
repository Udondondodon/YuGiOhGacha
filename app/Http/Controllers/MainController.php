<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Card;
use App\Models\Inventory;

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

    public function inventory() {
        $inventories = Inventory::with('card')->get()->sortBy('card.id');
        
        return view('inventory.index', compact('inventories'))->with([
            'title' => 'Inventory',
        ]);
    }

    public function detail($id) {
        $cards = Card::where('id', $id)->first();

        return view('card.index', 
            compact('cards'), [
            'title' => 'Card Detail'
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
            
            foreach ($randomCards as $card) {
                $inventory = new Inventory();
                $inventory->user = Auth::user()->name;
                $inventory->user = $user->name;
                $inventory->user_id = $user->id;
                $inventory->card_id = $card->id;
                $inventory->save();
            }
            
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
