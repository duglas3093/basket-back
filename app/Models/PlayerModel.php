<?php

namespace App\Models;

use CodeIgniter\Model;

class PlayerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jugador';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'usuario_id',
        'equipo_campeonato_id',
        'equipo_usuario_id',
        'equipo_id',
        'estatura',
        'peso',
        'dorsal'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'usuario_id'=>[
            'label'=>'usuario_id',
            'rules'=> 'required'
        ],
        'equipo_campeonato_id'=>[
            'label'=>'equipo_campeonato_id',
            'rules'=> 'required'
        ],
        'equipo_usuario_id'=>[
            'label'=>'equipo_usuario_id',
            'rules'=> 'required'
        ],
        'equipo_id'=>[
            'label'=>'equipo_id',
            'rules'=> 'required'
        ],
        'estatura'=>[
            'label'=>'estatura',
            'rules'=> 'required'
        ],
        'peso'=>[
            'label'=>'peso',
            'rules'=> 'required'
        ],
        'dorsal'=>[
            'label'=>'dorsal',
            'rules'=> 'required'
        ],
    ];
    protected $validationMessages   = [
        'usuario_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'equipo_campeonato_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'equipo_usuario_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'equipo_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'estatura' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'peso' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'dorsal' => [
            'required'  => 'El campo {field} es requerido.'
        ],
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
