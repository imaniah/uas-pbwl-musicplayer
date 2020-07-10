@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Artis</h3>
    <form action="{{ url('/artist/'.$row->artist_id) }}" method="POST" role="form">
        <input name="_method" type="hidden" value="PATCH">
        @csrf


            <div class="form-group">
                <label>Nama Artis</label>
                <input type="text" name="artist_name" class="form-control @error('artist_name')
                is-invalid @enderror" value="{{ $row->artist_name }}" autofocus>
                @error('artist_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Edit</button>
            
        </table>
    </form>
</div>
@endsection