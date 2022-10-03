<?php

/**
 * DashboardServiceInterface
 * @package App\Interfaces
 */

namespace App\Interfaces;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

interface DashboardServiceInterface
{
    public function index(): View;
    public function create(): View;
    public function store(Request $request): RedirectResponse;
    public function show($exam): View;
    public function edit($exam): View;
    public function update(Request $request, $exam): RedirectResponse;
    public function destroy($exam): RedirectResponse;
}
