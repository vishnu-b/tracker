<?php

class Tracker extends Eloquent{

    protected $table = 'tracker';

    public function user()
    {
        return $this->hasOne('User');
    }

}
