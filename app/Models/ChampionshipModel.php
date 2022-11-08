<?php

namespace App\Models;

use CodeIgniter\Model;

class ChampionshipModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'campeonato';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nombre',
        'categoria',
        'fecha_ini',
        'fecha_fin'
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
        'categoria'=>[
            'label'=>'categoria',
            'rules'=> 'required'
        ],
        'fecha_ini'=>[
            'label'=>'fecha_ini',
            'rules'=> 'required'
        ],
        'fecha_fin'=>[
            'label'=>'fecha_fin',
            'rules'=> 'required'
        ],
    ];
    protected $validationMessages   = [
        'nombre' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'categoria' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'fecha_ini' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'fecha_fin' => [
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
