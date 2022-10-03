<?php
/**
 * System Service Interface
 * @package App\Interfaces
 */
namespace App\Interfaces;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Pages;

interface SystemServiceInterface
{
    public function UpdateService(Request $request);
}
