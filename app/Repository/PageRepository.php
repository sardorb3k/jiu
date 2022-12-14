<?php

namespace App\Repository;

/**
 * Pages Repository
 */

use App\Interfaces\PageRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Models\Pages;
use Auth;

class PageRepository implements PageRepositoryInterface
{
    private $pages;
    public function __construct(Pages $pages)
    {
        $this->pages = $pages;
    }

    public function index($slug)
    {
        try {
            // Get first page
            $page = $this->pages->where('slug', $slug)->first();
            if ($page) {
                return view('page', compact('page'));
            } else {
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }
}
