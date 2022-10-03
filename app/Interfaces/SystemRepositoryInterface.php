<?php
/**
 * System Repository Interface
 * @package App\Interfaces
 */
namespace App\Interfaces;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Pages;

interface SystemRepositoryInterface
{
    public function index();
    public function update(Request $request);
}
