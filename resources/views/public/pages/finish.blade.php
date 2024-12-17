@extends('public.layouts.main')

@section('container')
    <main class="mt-3 w-full flex justify-center items-center bg-slate-100">
        <section class="quiz-start flex flex-col justify-center items-center h-fit w-1/2 gap-5 mb-5"> 
            <div class="flex flex-col w-full p-3">
                <div class="flex flex-col bg-white rounded-xl drop-shadow-xl">
                    <div class="font-semibold text-xl bg-gradient-to-tr from-[#007A43] to-[#08C644] text-white text-center rounded-t-xl p-5">
                        Congratulations 
                    </div>
                    <div class="px-2 py-5 mt-3 ml-3 font-poppins text-lg text-center font-light flex flex-col gap-2">
                        Selamat Anda telah menyelesaikan Brain Waves Assessment
                    </div>
                    <div class="p-2 text-lg font-normal mt-2 mb-3 flex flex-wrap items-center justify-center gap-2">
                        <a href="{{ route('home') }}" class="px-5 py-2 flex justify-center items-center bg-gradient-to-b from-[#03045E] to-[#03558b] text-white rounded-xl cursor-pointer">
                            Exit
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script>
        const counterHeader = document.getElementById('counter');
        counterHeader.classList.toggle('hidden');
    </script>
@endpush