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
}