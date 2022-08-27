<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BonusMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data['user'];
        $name =  $this->data['user']->name;
        $add_bonus =  $this->data['add_bonus'];
        return $this->from('noreply@sam-trader.com')->subject('Samtrader')
            ->with(['data' => $data, 'name' => $name, 'add_bonus' => $add_bonus])->markdown('emails.bonusmail');
    }
}
