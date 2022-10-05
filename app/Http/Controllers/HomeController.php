<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Models
use App\Models\System;
use App\Interfaces\HomeRepositoryInterface;

class HomeController extends Controller
{
    private $homeRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->homeRepository->index();
    }
    public function contact()
    {
        return $this->homeRepository->contact();
    }
    public function contact_store(Request $request)
    {
        return $this->homeRepository->contact_store($request);
    }
    public function jobs()
    {
        return $this->homeRepository->jobs();
    }
}
