<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Tạo biến chứa dữ liệu dùng để render email template
     */
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
        $name = $this->data['name'];
        $email = $this->data['email'];
        $message = $this->data['message']; 
        $phone_number = $this->data['phone_number'];
        $msg_subject = $this->data['msg_subject'];
        return $this->from(env('MAIL_FROM_ADDRESS', 'havanlinh19042000@gmail.com'), env('MAIL_FROM_NAME', 'Shop Bán Hàng'))
            ->replyTo($email)
            ->subject("Có khách hàng $email vừa liên hệ với chủ đề $msg_subject")
            ->view('emails.contact-email')
            ->with('data', $this->data);
    }
}
