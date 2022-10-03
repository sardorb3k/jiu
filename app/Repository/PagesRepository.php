<?php

namespace App\Repository;

/**
 * Pages Repository
 */

use App\Interfaces\PagesRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Models\Pages;
use Auth;

class PagesRepository implements PagesRepositoryInterface
{
    private $pages;
    public function __construct(Pages $pages)
    {
        $this->pages = $pages;
    }

    public function index()
    {
        $pages = $this->pages->paginate(10);
        return view('dashboard.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('dashboard.pages.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'pagename' => 'required',
                'content_uz' => 'nullable',
                'content_ru' => 'nullable',
                'content_en' => 'nullable',
            ]);
            $this->pages->create([
                'title' => $request->pagename,
                'slug' => Str::slug($request->pagename, '-'),
                'status' => 'active',
                'content_en' => htmlspecialchars($request->content_en),
                'content_ru' => htmlspecialchars($request->content_ru),
                'content_uz' => htmlspecialchars($request->content_uz),
            ]);
            return redirect()->route('dashboard.pages.index')->with('success', 'Page created successfully');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.pages.index')->with('error', 'Error creating page');
        }
    }

    public function show($id)
    {
        $page = $this->pages->where('slug', $id)->first();
        return view('dashboard.pages.show', compact('page'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'pagename' => 'required',
                'pagestatus' => 'required',
                'content_uz' => 'nullable',
                'content_ru' => 'nullable',
                'content_en' => 'nullable',
            ]);
            $page = $this->pages->find($id);
            $page->update([
                'title' => $request->pagename,
                'status' => $request->pagestatus,
                'content_uz' => htmlspecialchars($request->content_uz, ENT_QUOTES),
                'content_ru' => htmlspecialchars($request->content_ru, ENT_QUOTES),
                'content_en' => htmlspecialchars($request->content_en, ENT_QUOTES),
            ]);

            return redirect()->route('dashboard.pages.index')->with('success', 'Page updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.pages.index')->with('error', 'Page not updated.');
        }
    }

    public function destroy($id)
    {
        $page = $this->pages->find($id);
        $page->delete();
        return redirect()->route('dashboard.pages.index')->with('success', 'Page deleted successfully.');
    }
}
