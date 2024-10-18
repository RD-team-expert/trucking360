<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'icon', 'description', 'overview', 'features', 'benefits', 'content', 'image', 'button_url', 'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($service) {
            $service->slug = Str::slug($service->title);

            // Ensure slug is unique
            $originalSlug = $service->slug;
            $count = 1;

            while (static::where('slug', $service->slug)->where('id', '!=', $service->id)->exists()) {
                $service->slug = $originalSlug . '-' . $count++;
            }
        });
    }

    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class);
    }
}
