<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Http\Request;

/**
 * Class DocumentController
 * @package App\Http\Controllers
 */
class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:document-create')->only(['create', 'store']);
        $this->middleware('permission:document-update')->only(['edit', 'update']);
        $this->middleware('permission:document-delete')->only('destroy');
        $this->middleware('permission:document-show')->only(['show', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Document::query();
        if(auth()->user()->is_admin == 0) {
            $query->where('assigned_user_id', auth()->user()->id)
                  ->orWhere('created_by_id', auth()->user()->id);
        }
        $documents = $query->paginate(25);

        return view('Admin.document.index', compact('documents'))
            ->with('i', (request()->input('page', 1) - 1) * $documents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document_types = DocumentType::pluck('name', 'id');
        $document = new Document();
        return view('Admin.document.create', compact('document', 'document_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentRequest $request)
    {
        
        $document = Document::create($request->validated());

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::findOrFail($id);

        return view('Admin.document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document_types = DocumentType::pluck('name', 'id');

        $document = Document::findOrFail($id);

        return view('Admin.document.edit', compact('document', 'document_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Document $document
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequest $request, Document $document)
    {

        $document->update($request->validated());

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $document = Document::findOrFail($id)->delete();

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document deleted successfully');
    }


    
}
