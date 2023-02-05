<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pond extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function storeImage($image){
        $filename = time() . '-' . $image->getClientOriginalName();
        $image = $image->storeAs('images', $filename, 'public');
        return $image;
    }
    public function deleteExistingImage(){
        Storage::delete('public/' . $this->image);
    }
}
