<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
  protected $fillable = [
    'title',
    'location',
    'description',
    'image',
    'price',
    'activities'
  ];

  protected $casts = [
      'activities' => 'array',
      'created_at' => 'datetime',
      'updated_at' => 'datetime',
      'deleted_at' => 'datetime',
  ];

  public static function rules($id = null): array
  {
      return [
          'title' => 'required|string|max:255',
          'slug' => 'nullable|string|unique:tours,slug',
          'description' => 'required|string',
          'image' => 'nullable|image|max:2048',
          'price' => 'required|numeric|min:0',
          'activities' => 'nullable|array',
          'activities.*' => 'string|max:255',
          'location' => 'required|string|max:255',
      ];
  }
public static function messages(): array
  {
      return [
          'title.required' => 'The tour title is required.',
          'description.required' => 'The tour description is required.',
          'price.required' => 'The tour price is required.',
          'price.numeric' => 'The tour price must be a valid number.',
          'location.required' => 'The tour location is required.',
      ];
  }

  public function getImageUrlAttribute(): ?string
  {
      return $this->image ? asset('admin/images/' . $this->image) : null;
  }
}
