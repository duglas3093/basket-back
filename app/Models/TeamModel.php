<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'equipo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'usuario_id',
        'campeonato_id',
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
    protected $validationRules      = [
        'usuario_id'=>[
            'label'=>'usuario_id',
            'rules'=> 'required'
        ],
        'campeonato_id'=>[
            'label'=>'campeonato_id',
            'rules'=> 'required'
        ],
        'nro_jugadores'=>[
            'label'=>'nro_jugadores',
            'rules'=> 'required'
        ],
        'nombre'=>[
            'label'=>'nombre',
            'rules'=> 'required'
        ],
        'categoria'=>[
            'label'=>'categoria',
            'rules'=> 'required'
        ],
        'entrenador'=>[
            'label'=>'entrenador',
            'rules'=> 'required'
        ],
        'habilitado'=>[
            'label'=>'habilitado',
            'rules'=> 'required'
        ],
        'pais'=>[
            'label'=>'pais',
            'rules'=> 'required'
        ],
        'puntos_acum'=>[
            'label'=>'puntos_acum',
            'rules'=> 'required'
        ],
        'fyh_inscripcion'=>[
            'label'=>'fyh_inscripcion',
            'rules'=> 'required'
        ],
    ];
    protected $validationMessages   = [
        'usuario_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'campeonato_id' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'nro_jugadores' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'nombre' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'categoria' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'entrenador' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'habilitado' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'pais' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'puntos_acum' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'fyh_inscripcion' => [
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
