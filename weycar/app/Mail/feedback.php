<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class feedback extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $title;
    protected $mess;

    /**
     * Create a new message instance.
     *
     * @return $name
     * @return $email
     * @return $title
     * @return $mess
     */
    public function __construct($name, $email, $title, $mess)
    {
        $this->name = $name;
        $this->email = $email;
        $this->title = $title;
        $this->mess = $mess;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->view('feedback', 
        ['name' => $this->name, 
        'email' => $this->email, 
        'title' => $this->title,
        'mess' => $this->mess]);
        
    }
}
