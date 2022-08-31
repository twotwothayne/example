<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingItemController extends Controller
{
    public function createShoppingItem(Request $request)
    {
        $shoppingItem = new ShoppingItem();
        $shoppingItem->name = $request->name;
        $shoppingItem->list_id = $request->list_id;
        $shoppingItem->qty = $request->qty;
        $shoppingItem->checked = $request->checked;
        $shoppingItem->save();

        return $shoppingItem;
    }

}
