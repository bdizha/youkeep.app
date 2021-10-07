<?php

namespace App\Mail;


use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var User
     */
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Spazastop - It's shopping time!")
            ->with([
                'greeting' => $this->user->name
            ])
            ->with([
                'introLines' => [
                    'Spazastop is on a mission to simplify a weekly task for you: general shopping. Partnering with local stores, we\'ll make short work of your shopping list and bring your order right to your door.',
                    'Save time and money, skip the stress of parking and lines, and reorder your favorites with ease.',
                    'We\'re Spazastop, and you\'re gonna love us!'
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
