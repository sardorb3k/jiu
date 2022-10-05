<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PageRepositoryInterface;
class PageController extends Controller
{
    private $pageRepository;
    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function index($slug)
    {
        return $this->pageRepository->index($slug);
    }
    public function example()
    {
        return view('example');
    }
}
