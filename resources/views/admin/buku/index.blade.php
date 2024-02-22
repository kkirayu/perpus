@extends('admin.layouts.master')
@section('main')
{{-- <div class="page-wrapper"> --}}
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
    </div>
    <!--end breadcrumb-->
    <div class="ms-auto d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase">Buku</h6>
        <div class="btn-group">
            <button type="button" class="btn btn-success"><i class="bx bx-plus"></i>
                <span>Tambah Buku</span>
            </button>
        </div>
    </div>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $book => $i)
                        <tr>
                            <td>{{ $i->judul }}</td>
                            <td>{{ $i->penulis }}</td>
                            <td>{{ $i->Penerbit }}</td>
                            <td>{{ $i->TahunTerbit }}</td>
                            <td>
                                <a href="{{route ('guru.edit', $i->id)}}">
                                    <button type="button" class="btn btn-success ">Edit</button>
                                </a>
                                <form action="{{ route('guru.destroy', $i->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}
@endsection
