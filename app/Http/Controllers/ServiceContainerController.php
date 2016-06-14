<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repository\ServiceRepository;

class ServiceContainerController extends Controller
{
    public function serviceContainer(ServiceRepository $serviceRepository)
    {
        return $serviceRepository->get();
    }
}
