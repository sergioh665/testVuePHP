<?php

namespace App\Models;

use CodeIgniter\Model;

class TarefaModel extends Model
{
    protected $table = 'tarefas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'descricao', 'status', 'data_criacao', 'data_atualizacao'];
    protected $useTimestamps = true;
    protected $createdField = 'data_criacao';
    protected $updatedField = 'data_atualizacao';

    protected $validationRules = [
        'titulo'        => 'required|min_length[3]',
        'descricao'     => 'required',
        'status'        => 'required',
        'data_criacao'  => 'required|valid_date',
        'data_atualizacao' => 'required|valid_date'
    ];

    public function getTarefas()
    {
        return $this->findAll();
    }

    public function getTarefa($id)
    {
        return $this->find($id);
    }

    public function createTarefa($data)
    {
        return $this->insert($data);
    }

    public function updateTarefa($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteTarefa($id)
    {
        return $this->delete($id);
    }

    public function validateData($data)
    {
        return !empty($data['titulo']) && !empty($data['descricao']) && in_array($data['status'], ['pendente', 'em progresso', 'concluída']);
    }
}