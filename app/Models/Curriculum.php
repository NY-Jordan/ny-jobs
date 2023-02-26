<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'experience',
        'path',
        'profession_id',
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }

    public   function search($name, int $profession, $experience)
    {
        $curriculum = $this;
        if (isset($name) && !is_null($name)) { 
            $curriculum = $curriculum->where('name', 'like', $name);
        }
        if (!empty($profession)) {
            $curriculum = $curriculum->where('profession_id', $profession);
        }
        if (!empty($experience)) {
            
            $curriculum = $curriculum->where('experience', "like", "%$experience%");
        }
       
        $res = $curriculum->paginate(50);
        return $res;
    }
}
