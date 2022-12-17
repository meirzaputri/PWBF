@extends('topadmin')
@section('content')

    <body>
        <div class="text-center my-2">
            <h4><strong>Detail of Organization</strong></h4>
        </div>
        <div class="mb-2 mx-3">
            <p>Name:{{ $organisasi->nama_organisasi }}</p>
            <p>Division:{{ $organisasi->divisi->nama_divisi }}</p>
            <p>Address:{{ $organisasi->alamat_organisasi }}</p>
            <p>Email:{{ $organisasi->email_organisasi }}</p>
            <p>Phone Number:{{ $organisasi->notelp_organisasi }}</p>
            <p>Status:{{ $organisasi->status_organisasi ? 'Active' : 'Inactive'}}</p>
            <p>Description:{{ $organisasi->deskripsi_organisasi }}</p>
        </div>

    </body>
@endsection
