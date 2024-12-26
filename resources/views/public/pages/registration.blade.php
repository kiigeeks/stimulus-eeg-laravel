@extends('public.layouts.main')

@section('container')
    <main class="mt-3 w-full flex justify-center items-center0">
        <section id="register-container" class="flex flex-col justify-center items-center h-fit w-full gap-5 mb-5">    
            <div class="flex justify-center w-full p-3 gap-5 ">
                <div class="w-2/5 flex flex-col h-fit bg-white rounded-2xl shadow-md">
                    <div class="px-5 py-7 mt-3 font-poppins text-lg text-center font-light flex flex-col items-center justify-center gap-2">
                        <h1 class="text-3xl font-bold mb-3">Brain Waves Assessment</h1>
                        <p>
                            Brain Waves Assessment Akan Merekam Aktivitas Elektrofisiologis Sel Syaraf Anda.
                        </p>
                        <p>
                            Selama Assessment Usahakan Tidak Banyak Bergerak Untuk Mengurangi Artefacts.
                        </p>
                        <p>
                            Selamat Melakukan Brain Waves Assessment.
                        </p>
                    </div>
                </div>
                <div class="w-2/5 flex flex-col bg-white rounded-2xl shadow-md">
                    <form id="registrasi-form" class="px-7 py-7 mt-3 font-poppins text-lg font-light flex flex-col gap-2">
                        @csrf
                        <h5 class="text-xl text-center font-bold mb-7">Isi data diri Anda</h5>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Nama Lengkap
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama Lengkap" id="fullname" name="fullname" required>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Nama Panggilan
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama Panggilan" id="nickname" name="nickname" required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Tanggal Lahir
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="date" id="birthday" name="birthday" min="1979-12-31" max="2005-12-31" required>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Kota Kelahiran
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama Kota Kelahiran" id="hometown" name="hometown" required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Nama Ayah
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama Ayah" id="father" name="father" required>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Nama Ibu
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama Ibu" id="mother" name="mother" required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Nama SMP
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama SMP" id="junior_highschool" name="junior_highschool" required>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Nama SMA
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama SMA" id="senior_highschool" name="senior_highschool" required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Jenis Kelamin
                                </label>
                                <div class="relative">
                                    <select class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 mr-5 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="gender" name="gender" required
                                    >
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <span class="absolute bottom-2.5 right-1">
                                        <svg
                                            class="fill-current h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                            />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Warna Favorit
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Warna Favorit" id="color" name="color" required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Event
                                </label>
                                <div class="relative">
                                    <select class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 mr-5 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="event_id" name="event_id" required
                                    >
                                        <option value="">Pilih Event</option>
                                        @foreach ($events as $event)
                                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="absolute bottom-2.5 right-1">
                                        <svg
                                            class="fill-current h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                            />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Level
                                </label>
                                <div class="relative">
                                    <select class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 mr-5 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="management_id" name="management_id" required
                                    >
                                        <option value="">Pilih Level</option>
                                        @foreach ($managements as $management)
                                            <option value="{{ $management->id }}">{{ $management->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="absolute bottom-2.5 right-1">
                                        <svg
                                            class="fill-current h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                            />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 flex flex-row justify-center gap-5">
                            <button type="submit" id="submit-button" class="bg-green-700 tracking-wider text-white text-base hover:bg-green-800 hover:text-gray-200 ease-in-out delay-300 px-5 py-2 rounded-md">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection


@push('addon-script')
    @include('public.includes.registration-script')
@endpush