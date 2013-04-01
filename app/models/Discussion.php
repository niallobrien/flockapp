<?php

class Discussion extends Eloquent {

    protected $fillable = ['title', 'parent_discussion_id', 'parent_post_id'];

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
     * Polymorphic relationship with Posts.
     *
     * @return relationship
     */
    public function posts()
    {
        return $this->morphMany('Post', 'postable');
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

    /**
     * Permanently remove the discussion from db storage
     *
     * @return mixed
     */
    public function hardDelete()
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

    /**
     * Flag the discussion as deleted, but keep in db storage
     * This is primarly useful for ensuring that discussion are not orphaned
     *
     * @return int
     */
    public function softDelete()
    {
        // Don't delete the discussion, just change the flag so it appears to be deleted
        if($this->is_deleted == 0) {
            $this->is_deleted = 1;
            return $this->save();
        }
    }

    /**
     * Is this discussion marked as deleted (soft-delete)?
     * 
     * @return boolean
     */
    public function removed()
    {
        if($this->is_deleted == '1') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Scoped query to see if discussion is active
     * 
     * @param  $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        $query->where('is_deleted', 0);
    }

    /**
     * Scoped query to see if discussion is inactive (soft-deleted)
     * 
     * @param  $query
     * @return mixed
     */
    public function scopeInactive($query)
    {
        $query->where('is_deleted', 1);
    }
}