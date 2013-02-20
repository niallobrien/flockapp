<?php

class Discussion extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'discussions';

    /**
     * Associate with Group (1:n).
     *
     * @return relationship
     */
    public function group()
    {
        return $this->belongsTo('Group');
    }

    /**
     * Associate with Posts (1:n).
     *
     * @return relationship
     */
    public function posts()
    {
        return $this->hasMany('Post');
    }

    /**
     * Find currently selected discussion.
     *
     * @return mixed
     */
    public static function current()
    {
        return parent::find(Request::segment(4));
    }

    function delete()
    {
        // Check for posts to discussion first
        if ($this->posts)
        {
            foreach ($this->posts as $post)
            {
                $post->delete();
            }
        }
        // Now delete the discussion
        return parent::delete();
    }
}