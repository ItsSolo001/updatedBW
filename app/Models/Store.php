<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'stores'; 

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'image_url',
        'description',
        'price',
        'status', // e.g., 'available', 'sold'
    ];

    // Optional: Define relationships if necessary
    // Example: If you have a User who owns the Store
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Optional: Define accessors and mutators if necessary
    // Example: For price formatting
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2); // Format price to 2 decimal points
    }
}
