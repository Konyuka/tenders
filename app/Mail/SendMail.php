<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Payments;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $data = $this->mailData->posts;
        $transID = $this->mailData->transId;
        $transaction = Payments::where('trans_id', '=', $transID)->first();
        $userDetails = $this->mailData->user;
        return dd($this->mailData);

        $address = $this->mailData->user['userEmail'];
        $subject = 'Purchased Tender Details';
        $name = $this->mailData->user['userName'];
        $cc = 'michaelsaiba84@gmail.com';
        $from = "Bidders Portal";
        return $this->view('email.multiple')
        ->text('email.laraemail_plain')
        ->from($from, $name)
            ->cc($address, $name)
            ->bcc($cc, $name)
            ->replyTo($from, $name)
            ->subject($subject)
            ->with([
            'mailMessages' => $this->mailData->posts,
            'recieverName' => $name,
            'invoiceNumber' => $transaction->account,
            'receiptNumber' => $transID,
            ]);
    }
}
