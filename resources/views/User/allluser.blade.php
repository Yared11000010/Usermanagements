@extends('admin_layouts.maindashboard')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper text-sm">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User Managements</a></li>
              <li class="breadcrumb-item active">All Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>All User</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link" href="{{ route('addusers') }}"><i class="fa fa-plus mr-2"></i>Add Users</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Num</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $k => $users )
                      {{ $k++ }}
                      <tr>
                       <td>{{ $k++ }}</td>
                       <td>{{ $users->name }}</td>
                       <td>{{ $users->email }}</td>
                       <td>{{ $users->created_at }} </td>
                      <td class="">
                        @if($users->usertype=='Admin')
                           <a href=""><span style="border-radius: 0.2rem" class=" bg-success text-white pl-2 pr-2   active-btn">{{ $users->usertype }}</span></a>
                            @elseif ($users->usertype=='Super Admin')
                           <a href=""><span style="border-radius: 0.2rem" class=" bg-warning text-white pl-2 pr-2   active-btn">{{ $users->usertype }}</span></a>
                            @elseif ($users->usertype=='Client')
                           <a href=""><span style="border-radius: 0.2rem" class=" bg-primary text-white pl-2 pr-2   active-btn">{{ $users->usertype }}</span></a>
                            @elseif ($users->usertype=='Customer')
                           <a href=""><span style="border-radius: 0.2rem" class=" bg-secondary text-white pl-2 pr-2  active-btn">{{ $users->usertype }}</span></a>
                        @endif
                      </td>
                      <td>     
                      @if($users->status==1)
                      <a href="{{ url('inactive/'.$users->id) }}" class="border bg-white  border-success pl-2 pr-2" style="border-radius: 0.2rem"> <span class="status text-bold  text-success text-success">•</span>Active</a>
                      @endif
                      @if($users->status==0)
                      <a href="{{ url('activeuser/'.$users->id) }}" class="border bg-white border-warning pl-2 pr-2" style="border-radius: 0.2rem"> <span class="status text-bold  text-warning text-warning">•</span>InActive</a>
                      @endif
                      </td>
                      <td style="display:flex" >
                          <button class="text-secondary ml-4  ">
                           <a href="{{ url('user/'.$users->id.'/edit') }}"> <i class="nav-icon fas fa-edit"></i></a>
                          </button>
                          <button class="text-danger">
                           <a href="{{ url('user/'.$users->id) }} " id="delete"> <i class="nav-icon fas fa-trash"></i></a> 
                          </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('style')
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('script')
<!-- DataTables -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('backend/dist/js/bootbox.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection