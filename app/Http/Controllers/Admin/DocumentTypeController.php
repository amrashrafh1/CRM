<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function store(Request $request)
    {
        if($request->ajax()) {
            $validate = $request->validate([
                'name' => 'required|unique:document_type,name',
            ]);
            if($validate) {
                $document_type = DocumentType::create($validate);
                return response()->json(['id' => $document_type->id, 'name' => $document_type->name]);
            }
        }
        return response()->json(['error' => 'Error']);
    }
}
