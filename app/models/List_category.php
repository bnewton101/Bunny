<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class List_category extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'list_categories';
    protected $fillable = array('name');
    
public function getAuthIdentifier() {
  return $this->getKey();
}
public function lists() {
    return $this->belongsTo('lists');
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