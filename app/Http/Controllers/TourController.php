<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $tours = Tour::latest()->paginate(5);
            return view('tours', compact('tours'));
        }catch(\Exception $e){
            return back()->withError($e->getMessage());
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add-tours');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate(
            Tour::rules(),
            Tour::messages()
        );
        try{
              DB::beginTransaction();
            $tours = new Tour();

            $tours->fill($validated);
            $tours->save();
            DB::commit();

            return redirect()->route('tours.index')->with('success', 'Tour created successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            return back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        //
        return view('tour-detail', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        //
        return view('admin/edit-tours', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
        $validated = $request->validate(
            Tour::rules($tour->id),
            Tour::messages()
        );

        try{
            DB::beginTransaction();
            $tour->fill($validated);
            $tour->save();
            DB::commit();

            return redirect()->route('admin/tours-update')->with('success', 'Tour updated successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            return back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        //
        try{
            DB::beginTransaction();
            $tour->delete();
            DB::commit();

            return redirect()->route('admin/tours')->with('success', 'Tour deleted successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            return back()->withError($e->getMessage());
        }
    }

    public function listTours()
    {
        //
        try{
            $tours = Tour::all();
            return view('tours', compact('tours'));
        }catch(\Exception $e){
            return back()->withError($e->getMessage());
        }
        
    }
    public function restore($id){
        try{
            $tour = Tour::withTrashed()->findOrFail($id);
            $tour ->restore();
             return redirect()->route('admin.tours')
                ->with('success', 'Tour restored successfully!');
      } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to restore tour.');
        }

    }
}
