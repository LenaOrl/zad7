<?php
namespace Lena\Zad7;

class SMSNotification extends AbstractNotification
{
    public function send(string $message): string
    {
        $this->status = 'Отправлено';
        $this->timestamp=date('Y-m-d H:i:s');
        return "SMS отправлен с таким содержимым: {$message}";
    }

    public function getType(): string
    {
        return 'SMS';
    }
}