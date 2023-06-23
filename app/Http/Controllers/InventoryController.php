<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __invoke() {
        $inventaris = Inventory::getAll();
        return view('admin.inventory.list', ['inventaris' => $inventaris]);
    }
}
