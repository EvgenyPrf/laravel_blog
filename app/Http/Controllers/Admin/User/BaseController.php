<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Controllers\Controller;
use App\Service\UserService;

class BaseController extends Controller
{
public $service;

    /**
     * @param $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


}
