<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GeneratePost extends Notification
{
    use Queueable;
    private $post_id;
    private $user_create;
    private $type_of_investment;
    private $type_of_real_estate;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($post_id,$user_create,$type_of_investment,$type_of_real_estate)
    {
        $this->post_id = $post_id;
        $this->user_create = $user_create;
        $this->type_of_investment = $type_of_investment;
        $this->type_of_real_estate = $type_of_real_estate;
        

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
            'type_of_notify' => 'generate',
            'post_id'=>$this->post_id,
            'user_create'=>$this->user_create,
            'type_of_investment'=>$this->type_of_investment,
            'type_of_real_estate'=>$this->type_of_real_estate
        ];
    }
}
