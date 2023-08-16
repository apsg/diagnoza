<?php
namespace App\Mail;

use App\CitiesHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public ?string $name;

    public ?string $email;

    public ?string $message;

    public ?string $city;

    public ?string $phone;

    public ?string $age;

    public ?string $wywiad;

    public ?string $pronoun;

    public function __construct(
        string $name,
        string $email,
        ?string $phone = '',
        string $message = '',
        ?string $age = null,
        string $wywiad = null,
        string $pronoun = ''
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
        $this->city = CitiesHelper::get('name');
        $this->age = $age;
        $this->wywiad = $wywiad;
        $this->pronoun = $pronoun;
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
