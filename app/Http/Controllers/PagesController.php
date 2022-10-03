<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PagesRepositoryInterface;

class PagesController extends Controller
{
    private $pagesRepository;
    public function __construct(PagesRepositoryInterface $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        return $this->pagesRepository->index();
    }

    public function show($slug)
    {
        return $this->pagesRepository->show($slug);
    }

    public function create()
    {
        return $this->pagesRepository->create();
    }

    public function store(Request $request)
    {
        return $this->pagesRepository->store($request);
    }

    public function edit($id)
    {
        return $this->pagesRepository->edit($id);
    }

    public function update(Request $request, $id)
    {
        return $this->pagesRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->pagesRepository->destroy($id);
    }
}
