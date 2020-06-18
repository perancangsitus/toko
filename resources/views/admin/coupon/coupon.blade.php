@extends('admin.layoutadmin.index')
@section('admin_login')


<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title">Coupon
    <a href="#" class="btn btn-sm btn-info" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Tambahkan</a>
            </h6>

    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-15p">Id</th>
            <th class="wd-15p">Coupon</th>
            <th class="wd-20p">Discount</th>
            <th class="wd-15p">Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($coupon as $item=>$row)
          <tr>
             
                  
            <td>{{$item +1}}</td>
            <td>{{$row->coupon	}}</td>
            <td>{{$row->discount	}}</td>


            <td> <a href="{{ URL::to('edit/coupon/'.$row->id) }}" class="btn btn-sm btn-info">Ubah</a>
            <a href="{{ URL::to('delete/coupon/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Hapus</a></td>
           
          </tr>
          @endforeach

        </tbody>
      </table>
    </div><!-- table-wrapper -->
  </div><!-- card -->

  </div><!-- card -->




   <!-- LARGE MODAL -->
   <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Buat Discount</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
          
        <form method="post" action="{{route('store.coupon')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Tambah Coupon</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tambah coupon" name="coupon">
                </div>


                <div class="form-group">
                    <label for="file">Tambah Discount %</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tambah discount" name="discount">

                    
                  </div>
        
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20">Kirim</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Kluar</button>
        
        </div>
    </form>

      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->

@endsection