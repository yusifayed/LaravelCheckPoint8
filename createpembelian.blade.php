@extends('index')
@section('n')
<div class="col-lg-10 mb-4">
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Tambah </h1>
            <hr>
            <form action="{{ route('pembelian.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">kode:</label>
                    <input type="text" class="form-control" id="usr" name="kode">
                </div>
                
                <div class="form-group">
                    <label for="nohp">jumblah:</label>
                    <input type="text" class="form-control" id="jumblah" name="jumblah">
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