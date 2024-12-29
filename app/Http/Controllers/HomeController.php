<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home', [
            'items' => Item::leftJoin('orders as o', function ($join) {
                $join
                    ->on('o.item_id', '=', 'items.id')
                    ->where('o.user_id', '=', Auth::id());
            })
                ->whereNull('o.id')->select(['items.*'])
                ->paginate(10)
        ]);
    }
}
