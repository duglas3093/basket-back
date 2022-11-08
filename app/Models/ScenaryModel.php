<?php

namespace App\Models;

use CodeIgniter\Model;

class ScenaryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'escenario';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nombre',
        'ubicacion',
        'capacidad',
        'disponible',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nombre'=>[
            'label'=>'nombre',
            'rules'=> 'required'
        ],
        'ubicacion'=>[
            'label'=>'ubicacion',
            'rules'=> 'required'
        ],
        'capacidad'=>[
            'label'=>'capacidad',
            'rules'=> 'required'
        ],
        'disponible'=>[
            'label'=>'disponible',
            'rules'=> 'required'
        ],
    ];
    protected $validationMessages   = [
        'nombre' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'ubicacion' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'capacidad' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'disponible' => [
            'required'  => 'El campo {field} es requerido.'
        ]
    ];
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
