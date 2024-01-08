<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// model
use App\Models\Dokter;

// yajra
use Yajra\DataTables\DataTables;

// sweet alert
use RealRashid\SweetAlert\Facades\Alert;

// reques vaidation
use App\Http\Requests\Dokter\StoreDokterRequest;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (request()->ajax()) {
            $query = Dokter::query();

            return DataTables::of($query)
                ->addColumn('action', function ($dokter) {
                    return '
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a href="javascript:void(0)"  class="dropdown-item editProduct" data-id="'.$dokter->id.'" data-toggle="modal" data-target="#exampleModalEdit">
                            Edit
                          </a>
                            <a  href="javascript:void(0)" class="dropdown-item deleteProduct" data-id="'.$dokter->id.'">Delete</a>
                        </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.backsite.master-data.dokter.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDokterRequest $request)
    {
        //
        $data = $request->all();
        $dokter = Dokter::create($data);

        Alert::success('Success', 'data dokter berhasil ditambahkan');

        return redirect()->route('backsite.dokter.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $dokter = Dokter::findOrFail($id);
        return response()->json($dokter);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, Dokter $dokter)
    {
        //
        dd($dokter);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
