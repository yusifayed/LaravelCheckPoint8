@extends('index')
@section('ll')
<div class="col-lg-10 mb-4">
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Tambah Kontak</h1>
            <hr>
            <form action="{{ route('barang.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">code:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                
                @extends('index')
@section('ll')
<div class="col-lg-10 mb-4">
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Tambah Kontak</h1>
            <hr>
            <form action="{{ route('barang.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">code:</label>
                    <input type="text" class="form-control" id="kode" name="kode">
                </div>
                
                <div class="form-group">
                    <label for="nohp">nama:</label>
                    <input type="text" class="form-control" id="barang" name="barang">
                </div>
                <div class="form-group">
                    <label for="nohp">stok:</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <div class="form-group">
                    <label for="nohp">harga:</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div></div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div></div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection