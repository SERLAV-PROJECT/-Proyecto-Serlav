<?php
namespace App\Notifications;
use App\Models\Factura;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifiable; 
class FacturaNotification extends Notification
{
  use Queueable;
  use Notifiable;

/**
 * Create a new notification instance.
 *
 * @return void
 */
public function __construct(Factura $factura)
{
    $this->factura = $factura;
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
        'nombreCliente' => $this->factura->nombreCliente,
        'fecha' => $this->factura->fecha,
        'valorTotal' => $this->factura->valorTotal,
        'estado' => $this->factura->estado
    ];
}
}