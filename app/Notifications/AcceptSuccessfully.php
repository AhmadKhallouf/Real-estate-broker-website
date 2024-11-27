<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcceptSuccessfully extends Notification
{
    use Queueable;

    private $post_id;
    private $time;

    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($post_id,$time)
    {
        $this->post_id = $post_id;
        $this->time = $time;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

   
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'noteUpload'=>'Congratulations, your post is accepted,',
            'post_id' => $this->post_id,
            'time_of_accept' => $this->time,
        ];
    }
}
