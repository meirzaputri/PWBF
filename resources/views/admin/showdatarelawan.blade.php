@extends('topadmin')
@section('content')

   <div>
        <div class="text-center my-2">
            <h4><strong>Detail of Volunteer</strong></h4>
        </div>
        <div class="mb-2 mx-3">
            <p>Name:{{ $relawan->nama_relawan }}</p>
            <p>Age:{{ $relawan->usia_relawan }}</p>
            <p>Date of Birth:{{ $relawan->tgllahir_relawan }}</p>
            <p>Gender:{{ $relawan->jk_relawan ? 'Female' : 'Male' }}</p>
            <p>Address:{{ $relawan->alamat_relawan }}</p>
            <p>Job:{{ $relawan->pekerjaan_relawan }}</p>
            <p>Phone Number:{{ $relawan->notelp_relawan }}</p>
            <p>Email:{{ $relawan->email_relawan }}</p>
            <p>Status:{{ $relawan->status_relawan ? 'Active' : 'Inactive'}}</p>
        </div>
    </div>
        {{-- <table style="float:left">
                    <tr>
                        <tr>Nama Relawan</tr>
                        <tr>{{ $relawan->nama_relawan }}</tr>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td>{{ $relawan->usia_relawan }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>{{ $relawan->tgllahir_relawan }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{ $relawan->jk_relawan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $relawan->alamat_relawan }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>{{ $relawan->pekerjaan_relawan }}</td>
                    </tr>
                    <tr>
                        <td>No.Telp</td>
                        <td>{{ $relawan->notelp_relawan }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $relawan->email_relawan }}</td>
                    </tr>
                    <tr>
                        <td>Status Relawan </td>
                        <td>{{ $relawan->status_relawan }}</td>
                    </tr>
            </table> --}}


    {{-- <div class="mb-2 mx-3">
            <p>Nama Relawan:{{ $relawan->nama_relawan }}</p>
            <p>Usia:{{ $relawan->usia_relawan }}</p>
            <p>Tanggal Lahir:{{ $relawan->tgllahir_relawan }}</p>
            <p>Jenis Kelamin:{{ $relawan->jk_relawan }}</p>
            <p>Alamat:{{ $relawan->alamat_relawan }}</p>
            <p>Pekerjaan:{{ $relawan->pekerjaan_relawan }}</p>
            <p>No. Telp:{{ $relawan->notelp_relawan }}</p>
            <p>Email:{{ $relawan->email_relawan }}</p>
            <p>Status Relawan:{{ $relawan->status_relawan }}</p>
        </div> --}}

    {{-- <table class="table table-striped table-hover">
                <tr>Nama Relawan</tr>
                <tr>Usia</tr>
                <tr>Tanggal Lahir</tr>
                <tr>Jenis Kelamin</tr>
                <tr>Alamat</tr>
                <tr>Pekerjaan</tr>
                <tr>No. Telp</tr>
                <tr>Email</tr>
                <tr>Status</tr>
        
            <tbody>
            <tr>
                <tr>{{ $relawan->nama_relawan }}</tr>
                <tr>{{ $relawan->usia_relawan }}</tr>
                <tr>{{ $relawan->tgllahir_relawan }}</th>
                <tr>{{ $relawan->jk_relawan }}</p>
                <tr>{{ $relawan->alamat_relawan }}</tr>
                <tr>{{ $relawan->pekerjaan_relawan }}</tr>
                <tr>{{ $relawan->notelp_relawan }}</tr>
                <tr>{{ $relawan->email_relawan }}</tr>
                <tr>{{ $relawan->status_relawan }}</tr>
        
            </tr>
        
        
        </table> --}}
@endsection
