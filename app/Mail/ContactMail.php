<?php

/**参考サイト：https://wayasblog.com/laravel-contact-form/ */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $template;
    public $subject;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template, $subject, $data)
    {
        $this->template = $template;
        $this->subject  = $subject;
        $this->data     = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // 送信者向け
        if ($this->template === 'mails.contact') {
            return $this->from('info@chiiki-junkanyu.jp', '株式会社共創')
                ->text($this->template)
                ->subject($this->subject);
        }
        // 会社側向け
        elseif ($this->template === 'mails.contact_to_company') {
            $senderName = !empty($this->data['company']) ? $this->data['company'] : $this->data['name'];
            return $this->from('info@chiiki-junkanyu.jp', $senderName)
                ->replyTo($this->data['email'], $senderName)
                ->text($this->template)
                ->subject($this->subject);
        }
        // その他のケース
        else {
            return $this->text($this->template)->subject($this->subject);
        }
    }
}
