<?php
class Community extends Eloquent {
    protected $table = 'communities';

    public function followers() {
        return $this->belongsToMany('User', 'follows', 'community_id');
    }

    public function questions() {
        return $this->hasMany('Question');
    }
}
