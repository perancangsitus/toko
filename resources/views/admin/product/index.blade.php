@extends('admin.layoutadmin.index')
@section('admin_login')


<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title">NewsLater
            </h6>

    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-15p">Kode Produk</th>
            <th class="wd-15p">Nama Produk</th>
            <th class="wd-15p">Gambar</th>
            <th class="wd-15p">Kategori</th>
            <th class="wd-15p">Brand</th>
            <th class="wd-15p">Stok Barang</th>
            <th class="wd-15p">Status</th>
            <th class="wd-15p">Action</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach ($product as $row)
        <tr>
        <td>{{$row->product_code}}</td>
        <td>{{$row->product_name}}</td>

        <td> <img src="{{URL::to($row->image_one)}}" > </td>
        <td>{{$row->categtory_name}}</td>
        <td>{{$row->brand_name}}</td>
        <td>{{$row->product_quantity}}</td>
        <td>
            @if ($row->status==1)
            
            <span class="badge badge-success">aktiv</span>
            @else
            <span class="badge badge-danger">tidak aktiv</span
                @endif
        </td>
            

<td>
        <a href="#" class="btn btn-sm btn-info" title="edit"> <i class="fa fa-edit"></i></a>   
        <a href="#" class="btn btn-sm btn-danger" title="hapus"> <i class="fa fa-trash"></i></a>
        
        <a href="#" class="btn btn-sm btn-danger" title="inactiv"> <i class="fa fa-thumbs-down"></i></a> 
        <a href="#" class="btn btn-sm btn-info" title="activ"> <i class="fa fa-thumbs-up"></i></a> 

        </td>
        </tr>
        @endforeach 

        </tbody>
      </table>
    </div><!-- table-wrapper -->
  </div><!-- card -->

  </div><!-- card -->


@endsection
