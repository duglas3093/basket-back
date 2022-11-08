<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuario';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nombre', 
        'apellido_p',
        'apellido_m',
        'fecha_nac',
        'nacionalidad',
        'sexo',
        'email',
        'celular',
        'dni',
        'rol',
        'contraseña',
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
        'apellido_p'=>[
            'label'=>'apellido_p',
            'rules'=> 'required'
        ],
        'apellido_m'=>[
            'label'=>'apellido_m',
            'rules'=> 'required'
        ],
        'fecha_nac'=>[
            'label'=>'fecha_nac',
            'rules'=> 'required'
        ],
        'nacionalidad'=>[
            'label'=>'nacionalidad',
            'rules'=> 'required'
        ],
        'sexo'=>[
            'label'=>'sexo',
            'rules'=> 'required'
        ],
        'email'=>[
            'label'=>'email',
            'rules'=> 'required'
        ],
        'celular'=>[
            'label'=>'celular',
            'rules'=> 'required'
        ],
        'dni'=>[
            'label'=>'dni',
            'rules'=> 'required'
        ],
        'rol'=>[
            'label'=>'rol',
            'rules'=> 'required'
        ],
        'contraseña'=>[
            'label'=>'contraseña',
            'rules'=> 'required'
        ],
    ];
    protected $validationMessages   = [
        'nombre' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'apellido_p' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'apellido_m' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'fecha_nac' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'nacionalidad' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'sexo' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'email' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'celular' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'dni' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'rol' => [
            'required'  => 'El campo {field} es requerido.'
        ],
        'contraseña' => [
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
