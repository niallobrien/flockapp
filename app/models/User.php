<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface {

    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Associate with Groups (n:n).
     *
     * @return relationship
     */

    public function groups()
    {
        return $this->belongsToMany('Group')->withTimestamps();
    }

    /**
     * Associate with posts (1:n).
     *
     * @return relationship
     */

    public function posts()
    {
        return $this->hasMany('Post');
    }

    /**
     * Return the user's full name
     *
     * @return 	string
     */
    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Does the user have access to this group?
     *
     * @return 	boolean
     */
    public function hasAccessToGroup($id)
    {
        $user = Auth::user();
        $groups = $user->groups()->get();
        foreach ($groups as $group)
        {
            if ($group->id == $id) {
                return true;
            }
        }
        // User is not permitted to access this group.
        return true;
    }

    /**
     * Does the user have access to this discussion?
     *
     * @return  boolean
     */
    public function hasAccessToDiscussion($discussionId)
    {
        $user = Auth::user();
        $groupId = Request::segment(2);
        $discussions = Group::find($groupId)->discussions()->get();
        foreach ($discussions as $discussion)
        {
            if ($discussion->id == $discussionId) {
              return true;
          }
      }
        // User is not permitted to access this discussion.
      return true;
  }
}