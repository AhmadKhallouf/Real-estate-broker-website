<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RePostNotification extends Notification
{
    use Queueable;
    private $user_create;
    private $post_id;
    private $number_of_process;
    private $time_of_ad;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user_create,$post_id,$number_of_process,$time_of_ad)
    {
        $this->user_create = $user_create;
        $this->post_id = $post_id;
        $this->number_of_process = $number_of_process;
        $this->time_of_ad = $time_of_ad;
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
            'type_of_notify'=>'rePost',
            'user_create'=>$this->user_create,
            'post_id'=>$this->post_id,
            'number_of_process'=>$this->number_of_process,
            'time_of_ad'=>$this->time_of_ad
        ];
    }
}
