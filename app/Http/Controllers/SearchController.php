<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(){
        $contacts = Contact::query()->when(request()->search,function ($query){
            $query->where('user_id',Auth::id());
        })
            ->when(request()->search,function ($query){
                $searchKey = request()->search;
                $query->where('name','LIKE',"%{$searchKey}%")
                    ->orWhere('email','LIKE',"%{$searchKey}%")
                    ->orWhere('company','LIKE',"%{$searchKey}%")
                    ->orWhere('description','LIKE',"%{$searchKey}%");
            })
            ->get()->all();
        return $contacts;
    }
}
