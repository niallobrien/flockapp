<?php

class Post extends Eloquent {

    protected $fillable = ['content', 'user_id'];
    protected $softDelete = true;
    /**
     * Associate with Discussions (1:n).
     *
     * @return relationship
     */
    public function discussion()
    {
        return $this->belongsTo('Discussion');
    }

    /**
     * Associate with Users (1:n).
     *
     * @return relationship
     */
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function delete()
    {
        return parent::delete();
    }

    public function postable()
    {
        return $this->morphTo();
    }
}