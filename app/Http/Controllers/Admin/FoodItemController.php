<?php

namespace App\Http\Controllers\Admin;
use App\Models\FoodItem;
use App\Http\Controllers\Controller;
use Doctrine\DBAL\Query\QueryException;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foodItems = FoodItem::paginate(4);
        return view('backend.admin.foodItem.index', compact('foodItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.foodItem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        try {
            FoodItem::create([
                'name' => $request->name
            ]);
            return redirect()->route('foodItems.index')->withMessage("FoodItem Created!");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors('Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(FoodItem $foodItem)
    {
        return view('backend.admin.foodItem.show', compact('foodItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoodItem $foodItem)
    {
        return view('backend.admin.foodItem.edit', compact('foodItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FoodItem $foodItem)
    {
        $request->validate([
            'name' => 'required'
        ]);
        try {
            $foodItem->update([
                'name' => $request->name,
            ]);
            return redirect()->route('foodItems.index')->withMessage("FoodItem Updated!");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors('Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodItem $foodItem)
    {
        $foodItem->delete();
        return redirect()->route('foodItems.index')->withMessage("FoodItem Deleted!");
    }
}
