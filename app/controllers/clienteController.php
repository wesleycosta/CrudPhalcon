<?php
class ClienteController extends \Phalcon\Mvc\Controller
{
    public function cadastrarAction()
    {
        $clienteInsert = new Cliente();

        $clienteInsert->id_cliente = 1;
        $r = $clienteInsert->get(1);
        
        $clienteInsert->atualizar(1);


        foreach($clienteInsert->buscar("") as $item)
        {
            echo $item->nome;    
        }
    }
}
?>