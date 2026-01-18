<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    try {
            $destinations = Destination::latest()->paginate(10);
            return view('admin/destinations', compact('destinations'));
        }
        catch (\Exception $e){
            return redirect()->back()->with('error', 'Failed to load destinations: ' . $e->getMessage());

        }
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate(
            Destination::rules(),
            Destination::messages(),
        );

       
        DB::beginTransaction();
        try
        {
            $destination = new Destination();
            $destination = $validated['title'];
            $destination->slug = $validated['slug'] ?? \Str::slug($validated['title']);
            $destination->description = $validated['description'];
            $destination->location = $validated['location'];
            $destination->activities = $validated['activities'];
     
            if($request ->hasFile('image')){
                 $imagePath = $request->file('image')->store('admin/destinations', 'public');
                $destination->image = basename($imagePath);
            }
            $destination->save();
                     DB::commit();

               return redirect()->route('admin.destinations')
                ->with('success', 'Destination created successfully!');
        }
        catch (\Exception $e){
              // Clean up uploaded file if creation fails
            if (isset($imagePath) && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create destination: ' . $e->getMessage());
        }
    }
   

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
