<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Destination extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'location',
        'activities'
    ];

    protected $casts = [
        'activities'=>'array',
        'created_at'=>'datetime',
         'updated_at' => 'datetime',
    ];

     /**
     * Validation rules for the model
     */

     public static function rules($id = null): array
     {
        return [

            'title' => 'required|string|max:255|unique:destinations,title,' . $id,
             'slug' => 'nullable|string|max:255|unique:destinations,slug,' . $id,
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
             'description'=>'required|string|min:100',
              'location' => 'required|string|max:255',
            'activities' => 'required|array|min:1',
            'activities.*' => 'required|string|max:100',
 
        ];
     }
      /**
     * Custom messages for validation
     */

        public static function messages(): array
    {
        return [
            'activities.required' => 'At least one activity is required for the destination.',
            'activities.min' => 'Please add at least one activity.',
            'description.min' => 'Description should be at least 100 characters long.',
            'title.unique'=>'Destination title should be unique',
        ];
    }
       /**
     * Get the image URL attribute
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->image 
                ? asset('admin/images/destinations/' . $this->image)
                : asset('admin/images/air-france.png')
        );
    }
}
