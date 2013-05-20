<?php

class Group extends Eloquent {

    protected $fillable = ['title'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';

    /**
     * Associate with Users (n:n).
     *
     * @return relationship
     */
    public function users()
    {
        return $this->belongsToMany('User')->withTimestamps();
    }

    /**
     * Associate with Discussions (1:n).
     *
     * @return relationship
     */
    public function discussions()
    {
        return $this->hasMany('Discussion');
    }

    /**
     * Return a sorted list of groups.
     *
     * @return mixed
     */
    public static function sortedList()
    {
        return Auth::user()->groups()->orderBy('title', 'asc')->get();
    }

    /**
     * Delete group and related discussions etc.
     *
     * @return mixed
     */
    public function delete()
    {
        // Check for discussions belonging to the group first
        if ($this->discussions) {
            foreach ($this->discussions as $discussion) {
                $discussion->forceDelete();
            }
        }
        // Remove entry in group_user pivot table
        $this->users()->detach();

        // Now delete the group
        return parent::delete();
    }

    /**
     * Find currently selected group.
     *
     * @return mixed
     */
    public static function current()
    {
        $group = parent::find(Request::segment(2));
        if (!$group) {
            return null;
        }
        if ( ! Auth::user()->groups()->where('group_id', '=', $group->id)) {
            return null;
        }
        return $group;
    }
}