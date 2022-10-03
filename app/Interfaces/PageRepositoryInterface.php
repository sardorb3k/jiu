<?php
/**
 * Pages Repository Interface
 * @package App\Interfaces
 */
namespace App\Interfaces;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Pages;

interface PageRepositoryInterface
{
    public function index($slug);
}
