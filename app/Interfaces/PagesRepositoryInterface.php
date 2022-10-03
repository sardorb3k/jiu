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

interface PagesRepositoryInterface
{
    public function index();
    public function create();
    public function store(Request $request);
    public function show($id);
    public function update(Request $request, $id);
    public function destroy($id);
}
