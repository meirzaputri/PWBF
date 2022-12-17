@extends('topadmin')
@section('content')

    <body>
        <div class="text-center my-2">
            <h4><strong>Detail of Event</strong></h4>
        </div>
        <div class="mb-2 mx-3">
            <p>Name:{{ $kegiatan->nama_event }}</p>
            <p>Organization:{{ $kegiatan->organisasi->nama_organisasi}}</p>
            <p>Start Date:{{ $kegiatan->tglmulai_event }}</p>
            <p>End Date:{{ $kegiatan->tglberakhir_event }}</p>
            <p>Location:{{ $kegiatan->lokasi_event }}</p>
            <p>Status:{{ $kegiatan->status_event ? 'Active' : 'Done'}}</p>
            <p>Description:{{ $kegiatan->deskripsi_event }}</p>
        </div>
       
    </body>


@endsection
