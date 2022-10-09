<?php

namespace App\Mail;

use App\CitiesHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var string */
    public $name;

    /** @var string */
    public $email;

    /** @var string */
    public $message;

    /** @var string */
    public $city;

    /** @var string */
    public $phone;

    public ?string $age;
    public ?string $wywiad;

    public function __construct(
        string $name,
        string $email,
        string $phone = '',
        string $message = '',
        string $age = null,
        string $wywiad = null
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
        $this->city = CitiesHelper::get('name');
        $this->age = $age;
        $this->wywiad = $wywiad;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.contact')
            ->subject('Kontakt Diagnoza ADOS-2')
            ->replyTo($this->email);
    }
}
