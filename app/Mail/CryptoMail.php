<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;


class CryptoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $template;
    public $cryptoType;
    public $quantity;

    public function __construct($template, $cryptoType, $quantity)
    {
        $this->template = $template;
        $this->cryptoType = $cryptoType;
        $this->quantity = $quantity;
    }

    public function build()
    {
        Config::set('mail.mailers.smtp', [
            'transport' => 'smtp',
            'host' => env('CUSTOM_MAIL_HOST', 'smtp.hostinger.com'),
            'port' => env('CUSTOM_MAIL_PORT', 465), // Cast to integer, correct default
            'encryption' => env('CUSTOM_MAIL_ENCRYPTION', 'ssl'),
            'username' => env('CUSTOM_MAIL_USERNAME'), // No fallback
            'password' => env('CUSTOM_MAIL_PASSWORD'), // No fallback
            'timeout' => null,
            'auth_mode' => null,
        ]);

        $this->mailer('smtp');

        $subject = match ($this->template) {
            'giveaway' => 'Crypto Giveaway Notification',
            'airdrop' => 'Crypto Airdrop Confirmation',
            'refund' => 'Crypto Refund Processed',
        };

        $view = match ($this->template) {
            'giveaway' => 'emails.giveaway',
            'airdrop' => 'emails.airdrop',
            'refund' => 'emails.refund',
        };



        return $this->subject($subject)
            ->from(env('CUSTOM_MAIL_FROM_ADDRESS', 'mail@hacwallet.com'), env('CUSTOM_MAIL_FROM_NAME', 'Trust Wallet'))
            ->view($view)
            ->with([
                'cryptoType' => $this->cryptoType,
                'quantity' => $this->quantity,

            ]);
    }
}
