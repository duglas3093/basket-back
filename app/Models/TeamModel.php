<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'equipo';
    protected $primaryKey       = [
        'id',
        'usuario_id',
        'campeonato_id'
    ];
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nro_jugadores',
        'nombre',
        'categoria',
        'entrenador',
        'habilitado',
        'pais',
        'puntos_acum',
        'imagen_vaucher',
        'fyh_inscripcion',
        'escudo'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}