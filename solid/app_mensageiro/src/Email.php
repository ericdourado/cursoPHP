<?php

namespace src;

class Email implements IMensagemToken
{

    public function enviar(): void
    {
        echo "Email: seu token é 123456";
    }
}