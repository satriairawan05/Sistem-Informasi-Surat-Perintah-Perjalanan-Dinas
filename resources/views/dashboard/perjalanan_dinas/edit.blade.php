@extends('dashboard.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Edit Data</h2>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="portlet light bordered">
                    <div class="form-body">
                        <form action="/perjalanan/{{ $perjalanans[0]->id }}" method="post">
                        @method('put')
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="mb-3">
                            <label for="tempat_berangkat" class="form-label">Tempat Berangkat</label>
                            <input type="text" class="form-control @error('tempat_berangkat')
                                is-invalid
                            @enderror" id="tempat_berangkat" name="tempat_berangkat" placeholder="Masukan Tempat..." autofocus required value="{{ old('tempat_berangkat', $perjalanans[0]->tempat_berangkat) }}">
                            @error('tempat_berangkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tempat_tujuan" class="form-label">Tempat Tujuan</label>
                            <input type="text" class="form-control @error('tempat_tujuan')
                                is-invalid
                            @enderror" id="tempat_tujuan" name="tempat_tujuan" placeholder="Masukan Tempat..." autofocus required value="{{ old('tempat_tujuan', $perjalanans[0]->tempat_tujuan) }}">
                            @error('tempat_tujuan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat</label>
                            <input type="date" class="form-control @error('tanggal_berangkat')
                                is-invalid
                            @enderror" id="tanggal_berangkat" name="tanggal_berangkat" placeholder="Masukan Tempat..." autofocus required value="{{ old('tanggal_berangkat',$perjalanans[0]->tanggal_berangkat) }}">
                            @error('tanggal_berangkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('tanggal_kembali')
                                is-invalid
                            @enderror" id="tanggal_kembali" name="tanggal_kembali" placeholder="Masukan Tempat..." autofocus required value="{{ old('tanggal_kembali',$perjalanans[0]->tanggal_kembali) }}">
                            @error('tanggal_kembali')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input id="alamat" type="hidden" name="alamat" value="{{ old('alamat') }}">
                            <trix-editor input="alamat"></trix-editor>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <div class="d-flex justify-content-center">
                            <a href="{{ url()->previous() }}" class="btn btn-primary me-md-2">Kembali</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection