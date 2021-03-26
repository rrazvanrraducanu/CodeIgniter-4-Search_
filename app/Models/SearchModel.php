<?php

namespace App\Models;
use CodeIgniter\Model;

class SearchModel extends Model {
 
    protected $table= 'flori';
    protected $primaryKey ='id';
    protected $allowedFields=['id','nume','culoare','marime','pret'];
}