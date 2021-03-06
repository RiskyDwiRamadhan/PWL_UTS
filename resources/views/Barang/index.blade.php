@extends('barang.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            
            <!-- Form Search -->
            <div class="float-left my-2">
                <form action="{{ route('barang.index') }}" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->

            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered"> 
        <tr>
            <th>Id Barang</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Harga</th>
            <th>QTY</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->kode_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->kategori_barang }}</td>
                    <td>Rp.{{ $barang->harga }}</td>
                    <td>{{ $barang->qty }}</td>
                    <td>
                    <form action="{{ route('barang.destroy',$barang->id_barang) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('barang.show',$barang->id_barang) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id_barang) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin meghapus data ini ?')">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
    </table> 
    <div class="d-flex justify-content-center">
        {{$barangs->links()}}
    </div>   
@endsection