<?php

namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interfaces\Ilog;
use src\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, Ilog, INotificacao
{
    public function salvar()
    {
        //Logica
    }
    public function registrarLog(Log $log)
    {
        //Logica
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        
    }
}