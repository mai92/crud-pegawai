@extends('layouts.admin')

@section('title')
    Edit Data Pegawai
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pegawai Baru
                </div>
                <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @endif" id="nama" placeholder="Nama Pegawai" value="{{ old('nama') ?? $pegawai->nama }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">NIP</label>
                            <input type="text" name="nip" class="form-control @error('nip') is-invalid @endif" id="nip" placeholder="NIP Pegawai" value="{{ old('nip') ?? $pegawai->nip }}">
                            @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="email">Golongan</label>
                            <select name="golongan_id" id="" class="form-control @error('goplongan_id') is-invalid @endif">
                                @foreach($golongan as $item)
                                    <option
                                        @if($pegawai->golongan_id === $item->id) selected="selected" @endif
                                        value="{{ $item->id }}"
                                    >
                                        {{ $item->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('goplongan_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @endif" id="email" placeholder="Email Pegawai" value="{{ old('email') ?? $pegawai->email }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @endif">
                                <option value="">Pilih Salah Satu</option>
                                <option value="pria" @if($pegawai->jenis_kelamin === "pria") selected="selected" @endif>Pria</option>
                                <option value="wanita" @if($pegawai->jenis_kelamin === "wanita") selected="selected"@endif>Wanita</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tempat-lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @endif" id="tempat-lahir"
                                   placeholder="Tempat Lahir" value="{{ old('tempat_lahir') ?? $pegawai->tempat_lahir }}">
                            @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal-lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @endif" id="tanggal-lahir"
                                   placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') ?? $pegawai->tanggal_lahir->toDateString() }}">
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @endif" id="alamat" placeholder="Alamat" value="{{ old('alamat') ?? $pegawai->alamat }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @endif" id="no_telp"
                                   placeholder="No Telepon" value="{{ old('no_telp') ?? $pegawai->no_telp }}">
                            @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Perbarui" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
