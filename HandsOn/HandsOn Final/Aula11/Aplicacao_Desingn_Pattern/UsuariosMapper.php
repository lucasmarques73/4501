<?php

class UsuariosMapper
{

    protected $tableGateway;

    public function __construct()
    {
        $this->tableGateway = new TableGateway('usuarios');
    }

    public function salvar(Usuarios $usuario)
    {
        $dados = [
            'nome' => $usuario->getNome(),
            'email' => $usuario->getEmail(),
            'senha' => $usuario->getSenha()
        ];
        
        if($usuario->getId() == null){
            return $this->tableGateway->inserir($dados);
        }
        
        return $this->tableGateway->alterar($dados, $usuario->getId());
    }

    public function buscarPorId($id)
    {
        return $this->tableGateway->buscarRegistro("id=$id");
    }

    public function Listar()
    {
        return $this->tableGateway->listar();
    }

    public function excluir($id)
    {
        return $this->excluir($id);
    }
}