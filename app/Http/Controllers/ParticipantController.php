<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Participant::latest()->get();
        $events = Event::latest()->get();
        return view('admin.pages.participants.index', [
            "datas" => $datas,
            "events" => $events
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
            'fullname' => 'required',
            'nickname' => 'required',
            'birthday' => 'required',
            'hometown' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'junior_highschool' => 'required',
            'senior_highschool' => 'required',
            'gender' => 'required',
            'color' => 'required',
            'event_id' => 'required',
        ];

        $validateData = $request->validate($rules);

        $result = Participant::create($validateData);

        if ($result) {
            Alert::success('Congrats', 'Successfully created');
            return to_route('resting-state');
        } else {
            Alert::error('Failed', 'Failed to created');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        $validated = $request->validate([
            'fullname' => 'required',
            'nickname' => 'required',
            'birthday' => 'required',
            'hometown' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'junior_highschool' => 'required',
            'senior_highschool' => 'required',
            'gender' => 'required',
            'color' => 'required',
            'event_id' => 'required',
        ]);


        $result = Participant::where('id', $participant->id)
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
    public function destroy(Participant $participant)
    {
        $result = Participant::destroy($participant->id);
        if ($result) {
            Alert::success('Congrats', 'Data berhasil dihapus');
            return back();
        } else {
            Alert::error('Failed', 'Gagal diproses! Coba beberapa saat lagi.');
            return back();
        }
    }
}
