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
     * Associate with Discussion (1:n)
     * Self-referential relationship on parent_id column for forking feature
     * 
     * @return relationship
     */
    public function parent()
    {
        return $this->belongsTo('Discussion', 'parent_id');
    }

    /**
     * Associate with Discussion (n:1)
     * Self-referential relationship on parent_id column for forking feature
     * 
     * @return relationship
     */
    public function children()
    {
        return $this->hasMany('Discussion', 'parent_id');
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
        if ($this->posts) {
            foreach ($this->posts as $post) {
                $post->delete();
            }
        }
        // Now delete the discussion
        return parent::delete();
    }
}