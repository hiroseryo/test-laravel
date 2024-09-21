<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\AuthRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }
    public function confirm(ContactRequest $request)
    {
        $data = $request->all();
        $category = Category::find($data['category_id']);
        if ($category) {
            $data['content'] = $category->content;
        }
        return view('confirm', compact('data'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Contact::create($data);
        return view('thanks', compact('data'));
    }
    public function admin()
    {
        $contacts = Contact::with('category')->paginate(7);
        $categories = Category::all();

        return view('admin', compact('contacts', 'categories',));
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->KeywordSearch($request->keyword)->CategorySearch($request->category_id)->GenderSearch($request->gender)->DateSearch($request->date)->paginate(7)->appends($request->query());
        $categories = Category::all();

        return view('admin', compact('contacts', 'categories'));
    }
}
