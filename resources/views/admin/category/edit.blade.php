@extends('admin.layoutadmin.index')
@section('admin_login')

    <div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Daftar Katagori Produk</h6>

    <p class="mg-b-20 mg-sm-b-30">daftar katagori produk dari semua jenis barang di toko ema silakjan lakukan edit dan udate data.</p> 
    <a href="#" class="btn btn-sm btn-info" style="float:right;" data-toggle="modal" data-target="#modaldemo3">tambah katagori</a><br>

    <div class="table-wrapper">
    
        <form action="{{ url('update/category/'.$category->id) }}" method="POST">
    @csrf     

        <div class="modal-body pd-20">
        <input class="form-control" placeholder="masukan katagori" value="{{ $category->categtory_name}}" name="categtory_name">
        </div><!-- modal-body -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-info pd-x-20">update</button>
        
        </div>
    </form>
    </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
@endsection