<?php
namespace App\Controllers;
use TypeRocket\Controllers\Controller;

class EmployeesController extends Controller {
    public function list(){
        return do_shortcode('[employeesrandom]');
    }
}
