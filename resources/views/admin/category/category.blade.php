@extends('admin.layoutadmin.index')
@section('admin_login')

    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Sub Category List
        <a href="#" class="btn btn-sm btn-info" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Tambahkan</a>
                </h6>

      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">ID</th>
              <th class="wd-15p">KATAGORI</th>
              <th class="wd-20p">SLUG</th>
              <th class="wd-15p">ACTION</th>

            </tr>
          </thead>
          <tbody>


            @foreach ($category as $udin=>$row)
                
            

            <tr>
              <td>{{$udin +1}}</td>
              <td>{{$row->categtory_name}}</td>
              <td>S{{$row->slug}}</td>
              <td>
                  <a href="{{ URL::to('edit/category/'.$row->id)}}" class="btn btn-sm btn-info">ubah</a>
              <a href="{{ URL::to('dellet/category/'.$row->id)}}" class="btn btn-sm btn-danger">hapus</a>
                  
              </td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div><!-- card -->
  <!-- LARGE MODAL -->
  <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Katagori</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('store.category') }}" method="POST">
          @csrf     

        <div class="modal-body pd-20">
        <input class="form-control" placeholder="masukan katagori" type="text" name="categtory_name">
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20">Tambah</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Keluar</button>
        </div>
      </form>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
@endsection