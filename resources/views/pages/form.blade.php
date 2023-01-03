@extends('layout.applogin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Pendaftaran Posyandu Balita') }}</div>

                <div class="card-body">
                    <div class="row">





                        <div class="col-md-8">
                            <form method="POST" action="{{ route('login')}}">
                                @csrf

                                <!-- Nama Anak -->

                                <div class="row mb-3">
                                    <x-input-label for="name" :value="__('Nama Anak') " />

                                    <div class="col-md-6">
                                        <x-text-input id="nama_anak" class="block mt-1 w-full" type="nama_anak" name="nama_anak" :value="old('nama_anak')" required autofocus />
                                        <x-input-error :messages="$errors->get('nama_anak')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <x-input-label for="name" :value="__('Nama Ayah') " />

                                    <div class="col-md-6">
                                        <x-text-input id="nama_ayah" class="block mt-1 w-full" type="nama_ayah" name="nama_ayah" :value="old('nama_ayah')" required autofocus />
                                        <x-input-error :messages="$errors->get('nama_ayah')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <x-input-label for="name" :value="__('Nama Ibu') " />

                                    <div class="col-md-6">
                                        <x-text-input id="nama_ibu" class="block mt-1 w-full" type="nama_ibu" name="nama_ibu" :value="old('nama_ibu')" required autofocus />
                                        <x-input-error :messages="$errors->get('nama_ibu')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <x-input-label for="name" :value="__('Jenis Kelamin') " />
                                    <div class="col-md-6">
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="pria" {{$}}>
                                        <label for="pria">Pria</label><br>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="wanita">
                                        <label for="wanita">Wanita</label><br>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endsection