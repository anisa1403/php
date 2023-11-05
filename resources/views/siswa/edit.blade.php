@extends('template')
@section('judul_halaman','')
@section('konten')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('siswa.update', $siswa->id) }}"
method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                            <label  class="font-weight-bold">NIS SISWA</label>
                            <input type="text" class="form-control @error('NIS') is invalid @enderror" name="NIS" value="{{ old('NIS', $siswa->NIS) }}" placeholder="Masukkan NIS">
                                @error('NIS')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA SISWA</label>
                                <input type="text" class="form-control @error('nama') is invalid @enderror" name="nama" value="{{ old('nama', $siswa->nama) }}" placeholder="Masukkan nama siswa">
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">KELAS SISWA</label>
                                <input type="text" class="form-control @error('kelas') is invalid @enderror" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" placeholder="Masukkan kelas siswa">
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">JURUSAN SISWA</label>
                                <input type="text" class="form-control @error('jurusan') is invalid @enderror" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}" placeholder="Masukkan jurusan siswa">
                                @error('jurusan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">ALAMAT SISWA</label>
                                <input type="text" class="form-control @error('alamat') is invalid @enderror" name="alamat" value="{{ old('alamat', $siswa->alamat) }}" placeholder="Masukkan alamat siswa">
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">JENIS KELAMIN SISWA</label>
                                <input type="text" class="form-control @error('jeniskelamin') is invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin', $siswa->jeniskelamin) }}" placeholder="Masukkan jenis kelamin siswa">
                                @error('jeniskelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection