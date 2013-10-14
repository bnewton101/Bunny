<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Lists extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lists';
    protected $fillable = array('name');
    
    
public function getAuthIdentifier() {
  return $this->getKey();
}
public function user() {
    return $this->belongsTo('user');
}
public function category() {
    return $this->hasMany('list_category');
}
public function items() {
    return $this->hasMany('list_item');
}

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   // protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    

    /**
     * Get the password for the user.
     *
     * @return string
     */
    

    

}