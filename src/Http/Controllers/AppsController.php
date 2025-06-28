<?php

namespace iProtek\Apps\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use iProtek\Core\Http\Controllers\_Common\_CommonController;

class Apps extends _CommonController
{ 
    public $guard = 'admin';

}