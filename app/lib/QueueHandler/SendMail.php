<?php

class SendEmail {

    public function fire($job, $data)
    {
    	Mail::send('emails.welcome', [], function($m)
    	{
    		$m->from('me@niallobrien.me', 'Laravel');
    	    $m->to('digitaldelusions@gmail.com', 'John Smith')->subject('Welcome!');
    	});

        $job->delete();
    }

}