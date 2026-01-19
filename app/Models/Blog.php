<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast;

class Blog extends Model
{
    //
    protected $fillable = ['title', 'content', 'author', 'image'];

    public static function rules($id = null): array
    {
        return [
            'title' => 'required|string|max:255|unique:blogs,title,' . $id,
            'content' => 'required|string|min:100',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];
    }
    
    public static function messages(): array
    {
        return [
            'title.unique' => 'Blog title should be unique',
            'content.min' => 'Content should be at least 100 characters long.',
        ];
    }
    
    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('admin/images/' . $this->image) : null;
    }

 
}
