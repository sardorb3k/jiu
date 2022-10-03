<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\SystemRepositoryInterface;

class SystemController extends Controller
{
    private $pagesRepository;
    public function __construct(SystemRepositoryInterface $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        return $this->pagesRepository->index();
    }

    public function update(Request $request)
    {
        return $this->pagesRepository->update($request);
    }
}
