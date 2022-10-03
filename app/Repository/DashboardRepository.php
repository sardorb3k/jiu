<?php

namespace App\Repository;

/**
 * Dashboard Repository
 */

use App\Interfaces\DashboardRepositoryInterface;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class DashboardRepository implements DashboardRepositoryInterface
{
    private $dashboardRepository;
    public function __construct(User $dashboardRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
    }
    // Dashboard
    public function index(): View
    {
        return view('dashboard.index');
    }
    public function create(): View
    {
        return view('dashboard.create');
    }
    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('dashboard');
    }
    public function show($exam): View
    {
        return view('dashboard.show');
    }
    public function edit($exam): View
    {
        return view('dashboard.edit');
    }
    public function update(Request $request, $exam): RedirectResponse
    {
        return redirect()->route('dashboard');
    }
    public function destroy($exam): RedirectResponse
    {
        return redirect()->route('dashboard');
    }
}
