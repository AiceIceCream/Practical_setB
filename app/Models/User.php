<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tblteacher';

        protected $fillable = [

            'teacherid','lastname','firstname', 'middlename', 'bday', 'age'
        ];

        public $timestamps = false;
        
        protected $primaryKey = 'teacherid';
    }

