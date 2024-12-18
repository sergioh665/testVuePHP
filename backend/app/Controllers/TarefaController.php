<?php
namespace App\Controllers;

use App\Models\TarefaModel;
use CodeIgniter\RESTful\ResourceController;

class TarefaController extends ResourceController
{
    public function __construct()
    {
        header("Access-Control-Allow-Origin: http://localhost:8081");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
        header("Access-Control-Allow-Credentials: true");
        header('Content-Type: application/json');
    }

    protected $modelName = 'App\Models\TarefaModel';
    protected $format = 'json';

    public function index()
    {
        $tarefas = $this->model->findAll();
        return $this->respond($tarefas);
    }

    public function create()
    {
        $data = $this->request->getPost();
        if ($this->model->insert($data)) {
            return $this->respondCreated($data);
        }
        return $this->failValidationErrors($this->model->errors());
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if ($this->model->update($id, $data)) {
            return $this->respond($data);
        }
        return $this->failNotFound('Tarefa não encontrada');
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id]);
        }
        return $this->failNotFound('Tarefa não encontrada');
    }
}