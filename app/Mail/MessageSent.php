<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The contact instance.
     *
     * @var Contact
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Addtract - It's shopping time!")
            ->with(['greeting' => $this->contact->name])
            ->with([
                'introLines' => [
                    'Addtract is on a mission to simplify a weekly task for you: general shopping. Partnering with local stores, we\'ll make short work of your shopping list and bring your order right to your door.',
                    'Save time and money, skip the stress of parking and lines, and reorder your favorites with ease.',
                    'We\'re Addtract, and you\'re gonna love us!'
                ],
                'actionUrl' => url('/'),
                'actionText' => 'Shop now',
                'outroLines' => [
                    'Exclusive coupons',
                    'Convenient delivery times',
                    'Get delivery in as little as one hour or when it works with your weekly schedule'
                ],
            ])
            ->markdown('vendor.notifications.email');
    }
}
