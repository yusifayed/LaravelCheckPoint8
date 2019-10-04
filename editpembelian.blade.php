


@extends('index')
@section('Cont')
    <!-- Main Section --><div class="col-lg-10 mb-4">
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Edit Kontak</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('pembelian.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">kode:</label>
                    <input type="text" class="form-control" id="usr" name="kode" value="{{ $datas->kode }}">
                </div>
                <div class="form-group">
                    <label for="email">stok:</label>
                    <input type="text" class="form-control" id="jumblah" name="jumblah" value="{{ $datas->jumblah}}">
                </div>
                <div class="form-group">
                    <label for="nohp">harga:</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $datas->harga }}">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div></div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection