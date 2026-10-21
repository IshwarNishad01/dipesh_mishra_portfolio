<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = GalleryModel::get();
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'title.required' => 'Please enter gallery title.',
            'image.required' => 'Please select an image.',
            'image.image' => 'File must be a valid image.',
            'image.mimes' => 'Only JPG, JPEG, PNG and WEBP images are allowed.',
            'image.max' => 'Image size must not exceed 2 MB.',
        ]);

        $imagepath = $request->file('image')->store('gallery', 'public');

        GalleryModel::create([
            'title' => $validated['title'],
            'image' => $imagepath,
        ]);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Gallery saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = GalleryModel::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'title.required' => 'Please enter gallery title.',
            'title.max' => 'Title cannot exceed 255 characters.',
            'image.image' => 'Please upload a valid image.',
            'image.mimes' => 'Only JPG, JPEG, PNG and WEBP images are allowed.',
            'image.max' => 'Image size must not exceed 2 MB.',
        ]);

        $gallery = GalleryModel::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }

            // Upload new image
            $imagepath = $request->file('image')->store('gallery', 'public');

            $gallery->image = $imagepath;
        }

        $gallery->title = $validated['title'];
        $gallery->save();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Gallery updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = GalleryModel::findOrFail($id);

        // Delete image from storage/app/public/gallery
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        // Delete database record
        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Gallery deleted successfully!');
    }
}
