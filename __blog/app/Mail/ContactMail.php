<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use IlluminateContracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
/**Create a new message instance
 * 
 * @return void
 */
    public function __construct(Request $request)

    {
        $this->email = $request;
    }

    /**Build the message
     * 
     * @return $this
     */
    
     public function build()

     {
         return $this->subject('Jauns newsletter pieteikums')
                     ->from($this->email->email, $this->email->name)
                     ->to('annarakstakodu@gmail.com')
                     ->view('email.contactmail');
     }
}