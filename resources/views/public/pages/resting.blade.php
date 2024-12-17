@extends('public.layouts.main')

@section('container')
    <header class="w-full pt-10 flex flex-col gap-7 justify-center items-center font-poppins text-gray-800 relative">
        <p class="text-4xl text-center font-light" id="title">
            Silahkan tekan tombol <span class="font-semibold"> START </span> <br> untuk proses STIMULUS selanjutnya,<br> dengan kondisi <span class="font-semibold uppercase">membuka mata</span> Anda.
        </p>
    </header>
    <main class="mt-28 w-full flex justify-center items-center bg-slate-100">
        <section id="open-eyes" class="flex flex-col justify-center items-center h-fit w-1/2 gap-5 mb-5">    
            <div class="flex flex-col w-full items-center gap-28 p-3">
                <h2 class="counter font-bold text-9xl">60</h2>
                <div onclick="stimulusOpenEyes()" class="stimulus-start px-10 py-3 w-fit flex justify-center items-center bg-gradient-to-b from-[#03045E] to-[#03558b] text-white text-2xl uppercase tracking-wider rounded-xl cursor-pointer">
                    Start
                </div>
            </div>
        </section>
        <section id="closed-eyes" class="hidden flex flex-col justify-center items-center h-fit w-1/2 gap-5 mb-5">    
            <audio id="voice" class="hidden">
                <source src="/assets/audio/voice.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <div class="flex flex-col w-full items-center gap-28 p-3">
                <h2 class="counter font-bold text-9xl">60</h2>
                <div onclick="stimulusClosedEyes()" class="stimulus-start px-10 py-3 w-fit flex justify-center items-center bg-gradient-to-b from-[#03045E] to-[#03558b] text-white text-2xl uppercase tracking-wider rounded-xl cursor-pointer">
                    Start
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    @include('public.includes.resting-script')
@endpush