@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Artis</h3>
    <form action="{{ route('artist.store') }}" method="POST" role="form">
        @csrf


            <div class="form-group">
                <label>Nama Artis</label>
                <input type="text" name="artist_name" class="form-control @error('artist_name')
                is-invalid @enderror" value="{{ old('artsit_name') }}" autofocus>
                @error('artist_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            
        </table>
    </form>
</div>
@endsection