<?php

namespace App\Models;

use App\Models\Companies;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stellen extends Model
{
    use HasFactory;

    protected $table = 'stellen';
    
    protected $fillable = [
        'bezeichnung',
        'beschreibung',
        'salary',
        'standort',
        'categories_id',
        'company_id',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }

    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }

    public function getCategoryNameAttribute()
    {
        return $this->categories ? $this->categories->job_categories_name : 'Keine Kategorie';
    }

    public function getCompanyNameAttribute()
    {
        return $this->companies ? $this->companies->name : 'Keine Firma';
    }
}