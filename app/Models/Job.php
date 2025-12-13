<?php

namespace App\Models;

use App\Observers\JobObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

//#[ObservedBy([JobObserver::class])]
class Job extends Model
{
    use HasFactory;
    
    protected $table = 'job_listings';

    protected $guarded = [];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey:'job_listing_id');
    }

}