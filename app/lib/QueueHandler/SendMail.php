<?php

class SendEmail {

    public function fire($job, $data)
    {
    	Mail::send('emails.welcome', $data, function($m)
    	{
    		$m->from('us@example.com', 'Laravel');
    	    $m->to('digitaldelusions@gmail.com', 'John Smith')->subject('Welcome!');
    	});

        $job->delete();
    }

}