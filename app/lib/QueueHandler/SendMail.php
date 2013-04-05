<?php

class SendEmail {

    public function fire($job, $data)
    {
        $user = User::find(1000);
        $user->first_name = "Jason";
        $user->save();
        $job->delete();
    }

}