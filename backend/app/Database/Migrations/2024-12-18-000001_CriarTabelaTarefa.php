<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriarTabelaTarefa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'descricao' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['pendente', 'em progresso', 'concluída'],
                'default' => 'pendente',
            ],
            'data_criacao' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'data_atualizacao' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tarefas');
    }

    public function down()
    {
        $this->forge->dropTable('tarefas');
    }
}