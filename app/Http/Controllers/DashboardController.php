<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\DashboardRepositoryInterface;

class DashboardController extends Controller
{
    // __construct
    private $dashboardRepository;
    public function __construct(DashboardRepositoryInterface $dashboardRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
        // middleware
        $this->middleware('auth');
    }
    public function index()
    {
        return $this->dashboardRepository->index();
    }
}
