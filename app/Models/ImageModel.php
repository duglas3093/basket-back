<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'imagen';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Escenario_id',
        'Usuario_id',
        'etiqueta',
        'imagen'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'Escenario_id'=>[
            'label'=>'Escenario_id',
            'rules'=> 'required'
        ],
        'Usuario_id'=>[
            'label'=>'Usuario_id',
            'rules'=> 'required'
        ],
        'etiqueta'=>[
            'label'=>'etiqueta',
            'rules'=> 'required'
        ]
    ];
    protected $validationMessages   = [
        'Escenario_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'Usuario_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'etiqueta' => [
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
