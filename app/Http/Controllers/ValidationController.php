<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Models\Participant;
use App\Models\Validation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\error;

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, $userCode)
    {
        $validationData = $request->validate([
            'validation_test' => 'required|array',
            'validation_test.*.code' => 'required|string',
            'validation_test.*.statement' => 'required|string',
            'validation_test.*.answer' => 'required|integer|min:1|max:5',
        ]);

        $participant = Participant::where('code', $userCode)->first();

        if (!$participant) {
            return response()->json(['message' => 'Participant not found.'], 404);
        }

        Validation::where('participant_id', $participant->id)->delete();

        foreach ($validationData['validation_test'] as $answer) {
            Validation::create([
                'participant_id' => $participant->id,
                'code' => $answer['code'],
                'statement' => $answer['statement'],
                'answer' => $answer['answer'],
            ]);
        }

        return response()->json(['message' => 'Answers saved successfully.'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Validation $validation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Validation $validation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateValidationRequest $request, Validation $validation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Validation $validation)
    {
        //
    }
}
