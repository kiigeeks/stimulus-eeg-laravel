<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManagementRequest;
use App\Http\Requests\UpdateManagementRequest;
use App\Models\Management;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Management::latest()->get();
        return view('admin.pages.managements.index', [
            "datas" => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'is_active' => ''
        ];

        $validateData = $request->validate($rules);

        $result = Management::create($validateData);

        if ($result) {
            Alert::success('Congrats', 'Successfully created');
            return to_route('managements.index');
        } else {
            Alert::error('Failed', 'Failed to created');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Management $management)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Management $management)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Management $management)
    {
        $validated = $request->validate([
            'name' => 'required',
            'is_active' => ''
        ]);

        $result = Management::where('id', $management->id)
                    ->update($validated);

        if ($result) {
            Alert::success('Success', 'Data berhasil dirubah');
            return back();
        } else {
            Alert::error('Failed', 'Gagal diproses! Coba beberapa saat lagi.');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Management $management)
    {
        //
    }

    public function active(Request $request)
    {
        $management = Management::findOrFail($request->activeId);

        $data['is_active'] = true;

        $result = Management::where('id', $management->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil diaktifkan');
            return back();
        } else {
            Alert::error('Failed', 'Data gagal diaktifkan');
            return back();
        }
    }

    public function inactive(Request $request)
    {
        $management = Management::findOrFail($request->inactiveId);

        $data['is_active'] = false;

        $result = Management::where('id', $management->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil dinonaktifkan');
            return back();
        } else {
            Alert::error('Failed', 'Data gagal diaktifkan');
            return back();
        }
    }
}
