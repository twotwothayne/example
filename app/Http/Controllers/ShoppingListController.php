<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingList;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShoppingListController extends Controller
{
    public function readShoppingLists()
    {
        $user = User::find(1);
        return $user->shoppinglists;
        //return $user->shoppinglists()->where("name", "=", "'Lasagne'")->get();
    }

    public function readShoppingList(ShoppingList $shoppingList)
    {
        return $shoppingList;
    }

    public function index()
    {
        $shoppinglists = ShoppingList::all();
        return view('shoppinglist.shoppinglist')->with('shoppinglists', $shoppinglists);
    }

    public function createShoppingList(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:25',
            'description' => 'min:10|max:255'
        ]);
        
        $shoppingList = new ShoppingList();
        $shoppingList->name = $request->name;
        $shoppingList->description = $request->description;
        $shoppingList->user_id = $request->user_id;
        $shoppingList->save();

        return $shoppingList;
    }

    public function update(Request $request, $id)
    {
        $shoppingList = ShoppingList::find($id);
        $shoppingList->name = $request->filled("name") ? $request->name : $shoppingList->name;
        $shoppingList->description = $request->filled("description") ? $request->description : $shoppingList->description;
        //shorthand if statement 
        $shoppingList->save();
        return back();
    }
    

    public function show($id)
    {
        $shoppingList = ShoppingList::find($id);
        return view('shoppinglist.viewshoppinglist')->with('shoppingList', $shoppingList);
    }
}
