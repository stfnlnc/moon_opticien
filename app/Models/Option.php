<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_url',
        'site_name',
        'site_description',
        'site_keywords',
        'site_logo',
        'site_favicon',
        'site_copyright'
    ];

    public function faviconUrl(): string
    {
        return Storage::disk('public')->url($this->site_favicon);
    }

    public function logoUrl(): string
    {
        return Storage::disk('public')->url($this->site_logo);
    }
}
