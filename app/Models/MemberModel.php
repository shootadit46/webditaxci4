<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table      = 'member';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nama', 'email', 'telepon', 'gender', 'pekerjaan', 'alamat', 'foto'];

    // // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
