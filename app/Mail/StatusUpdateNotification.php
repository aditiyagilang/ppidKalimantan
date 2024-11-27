<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatusUpdateNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $status;
    public $rejectReason;

    public function __construct($status, $rejectReason = null)
    {
        $this->status = $status;
        $this->rejectReason = $rejectReason;
    }

    public function build()
    {
        return $this->subject('Update Status Permohonan')
            ->view('public.emailStatus');
    }
}
