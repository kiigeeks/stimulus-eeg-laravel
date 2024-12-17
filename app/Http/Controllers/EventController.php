<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Event::latest()->get();
        return view('admin.pages.events.index', [
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

        $result = Event::create($validateData);

        if ($result) {
            Alert::success('Congrats', 'Successfully created');
            return to_route('events.index');
        } else {
            Alert::error('Failed', 'Failed to created');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required',
            'is_active' => ''
        ]);


        $result = Event::where('id', $event->id)
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
    public function destroy(Event $event)
    {
        //
    }


    public function active(Request $request)
    {
        $event = Event::findOrFail($request->activeId);

        $data['is_active'] = true;

        $result = Event::where('id', $event->id)->update($data);

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
        $event = Event::findOrFail($request->inactiveId);

        $data['is_active'] = false;

        $result = Event::where('id', $event->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil dinonaktifkan');
            return back();
        } else {
            Alert::error('Failed', 'Data gagal diaktifkan');
            return back();
        }
    }
}
