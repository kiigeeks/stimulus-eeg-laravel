@extends('public.layouts.main')

@section('container')
    <main class="mt-3 w-full flex justify-center items-center bg-slate-100">
        <section id="text-content" class="hidden flex flex-col justify-center items-center h-fit w-1/2 gap-5 mb-5"> 
            <div class="flex flex-col w-full p-3">
                <div class="flex flex-col bg-white rounded-xl drop-shadow-xl">
                    <div id="bio-content" class="px-4 py-10 mt-3 font-poppins text-4xl text-center font-semibold tracking-wider flex flex-col gap-2">
                    </div>
                </div>
            </div>
        </section>
        <section id="video-content" class="hidden flex flex-col justify-center items-center gap-5 mb-5"> 
            <div class="flex flex-col w-full p-1 bg-white rounded-xl drop-shadow-xl">
                <iframe id="video-frame" class="video rounded-xl" width="915" height="512" allow="autoplay;"></iframe>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    @include('public.includes.biografi-datas')
    @include('public.includes.biografi-script')
@endpush