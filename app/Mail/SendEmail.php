<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\PengajuanRoyalti;


class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        return $this->subject('Pengajuan Data Royalti')->markdown('email',['data' => $this->data])->attach(public_path('storage/public/pdf/'. $this->data->dataroyalti->kode.$this->data->nama. $this->data->dataroyalti_id. $this->data->dataroyalti->judul_buku .'.pdf'));
    }
}
