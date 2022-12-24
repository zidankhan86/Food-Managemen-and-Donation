<?php

namespace App\Models;

use App\Models\Food;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodRequest extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
         * Get all of the comments for the FoodRequest
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function food(): HasMany
        {
            return $this->hasMany(Food::class, 'id', 'food_id');
        }
        public function organization(){
            return $this->belongsTo(User::class,'user_id','id');
        }

}
