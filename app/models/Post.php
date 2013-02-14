<?php

class Post extends Eloquent {

    /**
     * Associate with Discussion (1:n).
     *
     * @return relationship
     */
    public function discussions()
    {
        return $this->belongsTo('Discussion');
    }

    public function delete()
    {
        return parent::delete();
    }
}