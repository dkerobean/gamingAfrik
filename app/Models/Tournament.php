<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'description', 'game', 'image', 'start_date', 'check_in','enrolled',
      'prize', 'skill_level', 'entry_fee', 'slots', 'video_url', 'rules',
      'format', 'prize_claim', 'first', 'second', 'third', 'team_size', 'prize_claim'
    ];

    public function users(){
      return $this->belongsToMany(User::class);
    }
}
