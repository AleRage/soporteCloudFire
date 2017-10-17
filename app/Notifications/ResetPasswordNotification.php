<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)

            ->from('soporte@CloudFire.com', 'CloudFire.com')
            ->subject('Solicitud de restablecimiento de contraseña')
            ->greeting('Hola! ' . $notifiable->name)
            ->line('Recibió este correo porque se solícito un restablecimiento de contraseña para su cuenta. Haga clic en el siguiente botón para cambiar su contraseña.')
            ->action('Restablecer contraseña', url(config('app.url') . route('password.reset', $this->token, false)))
            ->line('Si no solicitó un restablecimiento de contraseña, puede ignorar este correo y nada habrá cambiado.')
            ->salutation('¡Hasta Pronto!');
    }
}
