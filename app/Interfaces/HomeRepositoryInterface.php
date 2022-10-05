<?php

/**
 * Dashboard Repository Interface
 * @package App\Interfaces
 */

namespace App\Interfaces;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

interface HomeRepositoryInterface
{
    public function index(): View;
    public function contact(): View;
    public function contact_store(Request $request);
    public function jobs(): View;
}
