<?php

namespace App\Models;

use App\Livewire\Projects\Proposals;
use App\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function casts()
    {
        return[
            'tech_stack' => 'array',
            'status' => ProjectStatus::class,
            'ends_at' => 'datetime'
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public  function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

}
