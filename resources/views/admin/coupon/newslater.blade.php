@extends('admin.layoutadmin.index')
@section('admin_login')


<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title">NewsLater
            </h6>

    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-15p">Id</th>
            <th class="wd-15p">Email</th>
            <th class="wd-20p">Waktu Sucribe</th>
            <th class="wd-15p">Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($sub as $item=>$row)
          <tr>
             
                  
            <td><input type="checkbox"> {{$item +1}}</td>
            <td>{{$row->email	}}</td>
            <td>{{ \Carbon\Carbon::parse($row->created_at)->diffForhumans()}}</td>

<td>
            <a href="{{ URL::to('delete/sub/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Hapus</a></td>
           
          </tr>
          @endforeach

        </tbody>
      </table>
    </div><!-- table-wrapper -->
  </div><!-- card -->

  </div><!-- card -->


@endsection