<?php
require_once('models/Model.php');

class User extends Model{

    protected $table = 'users';

    protected $fillable = [

        'username',
        'password',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'phone',
        'date_of_birth'

    ];

}