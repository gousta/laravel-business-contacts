<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'notes',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function getNameAttribute($v)
    {
        return !empty($v) ? $v : null;
    }

    public function setNameAttribute($v)
    {
        $this->attributes['name'] = !empty($v) ? ucfirst($v) : null;
    }

    public function getSurnameAttribute($v)
    {
        return !empty($v) ? $v : null;
    }

    public function setSurnameAttribute($v)
    {
        $this->attributes['surname'] = !empty($v) ? ucfirst($v) : null;
    }

    public function getEmailAttribute($v)
    {
        return !empty($v) ? $v : null;
    }

    public function getPhoneAttribute($v)
    {
        return !empty($v) ? $v : null;
    }

    public function setPhoneAttribute($v)
    {
        $this->attributes['phone'] = !empty($v) ? $v : null;
    }
    
    public function getNotesAttribute($v)
    {
        return !empty($v) ? $v : null;
    }

    public function setNotesAttribute($v)
    {
        $this->attributes['notes'] = !empty($v) ? $v : null;
    }
}
