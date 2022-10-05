<?php

namespace App\Repository;

/**
 * Dashboard Repository
 */

use App\Interfaces\HomeRepositoryInterface;
use App\Models\System;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class HomeRepository implements HomeRepositoryInterface
{
    private $userModel;
    private $systemModel;
    public function __construct(User $userModel, System $systemModel, Contact $contactModel)
    {
        $this->userModel = $userModel;
        $this->systemModel = $systemModel;
        $this->contactModel = $contactModel;
    }
    public function index(): View
    {
        $system = $this->systemModel->first();
        return view('home', compact('system'));
    }
    public function contact(): View
    {
        $system = $this->systemModel->first();
        return view('contact', compact('system'));
    }
    public function contact_store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'msg_subject' => 'nullable',
                'message' => 'required',
            ]);
            $this->contactModel->create([
                'name' => $request->name,
                'phone' => $request->phone_number,
                'email' => $request->email,
                'subject' => $request->msg_subject,
                'message' => $request->message,
            ]);
            // JSON Response
            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully',
            ]);
            // return redirect()->route('contact')->with('success', 'Message sent successfully');
        } catch (\Exception $e) {
            // JSON Response
            return response()->json([
                'success' => false,
                'message' => 'Message not sent',
            ]);
            // return redirect()->route('contact')->with('error', 'Error sending message');
        }
    }
    public function jobs(): View
    {
        $system = $this->systemModel->first();
        return view('jobs', compact('system'));
    }
}
