<?php

namespace App\Http\Controllers;

use App\Services\Default\DefaultService;

class DefaultController extends Controller
{
    public $default;
    public function __construct(DefaultService $default) {
        $this->default = $default;
    }

    function index() {
        $users = $this->default->index();
        return response()->json($users);
    }
}
