<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
            Destination::messages()
        );

       
        DB::beginTransaction();
        try
        {
            $destination = new Destination();
            $destination ->title =  $validated['title'];
          $destination->slug = $validated['slug'] ?? Str::slug($validated['title']);
            $destination->description = $validated['description'];
            $destination->location = $validated['location'];
            $destination->activities = $validated['activities'];
     
            if ($request->hasFile('image')) {
    
                $imagePath = $request->file('image')->store('admin/images/destinations', 'public');
                $destination->image = $imagePath;
            }
            $destination->save();
                     DB::commit();

               return redirect()->route('admin.destinations')
                ->with('success', 'Destination created successfully!');
        }
        catch (\Exception $e){
                 DB::rollBack();
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
        try {
            return view ('destination-detail',compact('destination'));

        }catch (\Exception $e){
         return redirect()->back()->with('error', 'Destination not found.');

        }
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Destination $destination)
    {
        $validated = $request->validate(
            Destination::rules(),
            Destination::messages()
        );

        DB::beginTransaction();

        try {
            $oldImage = $destination->image;

            $destination->title = $validated['title'];
            $destination->slug = $validated['slug'] ?? Str::slug($validated['title']);
            $destination->description = $validated['description'];
            $destination->location = $validated['location'];
            $destination->activities = $validated['activities'];

            // Handle new image upload
            if ($request->hasFile('image')) {
                // Upload new image and store full path
                $imagePath = $request->file('image')->store('admin/images/destinations', 'public');
                $destination->image = $imagePath;
            }

            $destination->save();

            // Delete old image after successful save (if a new one was uploaded)
            if (isset($imagePath) && $oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }

            DB::commit();

            return redirect()->route('admin.destinations')
                ->with('success', 'Destination updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            // Clean up new image if update fails
            if (isset($imagePath) && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }

            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update destination: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
       DB::beginTransaction();

        try {
            // delete image from storage if present
            if ($destination->image && Storage::disk('public')->exists($destination->image)) {
                Storage::disk('public')->delete($destination->image);
            }

            $destination->delete();
            DB::commit();

            return redirect()->route('admin.destinations')
                ->with('success', 'Destination deleted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to delete destination: ' . $e->getMessage());
        }
    }

    public function restore($id){
        try{
            $destination = Destination::withTrashed()->findOrFail($id);
            $destination ->restore();
             return redirect()->route('admin.destinations')
                ->with('success', 'Destination restored successfully!');
      } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to restore destination.');
        }

    }

    public function create (){
        try{
            return view('admin/add-destination');
        } 
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to load the page');
        }
    }
       public function edit(Destination $destination)
    {
        return view('admin/edit-destinations', compact('destination'));
    }
}
