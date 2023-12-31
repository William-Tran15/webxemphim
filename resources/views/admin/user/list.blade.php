@extends('admin.master')
@section('title','Danh Sách Người Dùng - Movie')
@section('content')
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-center">QUẢN LÝ NGƯỜI DÙNG</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-0 font-weight-bold text-primary">
                    DANH SÁCH NGƯỜI DÙNG
                    <a href="{{ route('admin.user.create')}}" class="btn btn-success float-right">Thêm người dùng</a>
                </div>
            </div>
            @if (session('thongbao_level'))
            <div class="alert alert-{{session('thongbao_level')}}" style="border-radius:0px;">
                {!! - session('thongbao') !!}
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped text-center" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:3em;">STT</th>
                                <th>Họ tên</th>
                                <th>Tài khoản</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th style="width:3em;">Sửa</th>
                                <th style="width:3em;">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($user as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @if ($item->level==1)
                                    Quản trị viên
                                    @else
                                    Người dùng
                                    @endif
                                </td>
                                <td><a href="{{ route('admin.user.edit',$item->id) }}"><i
                                            class="far fa-edit fa-lg"></i></a></td>
                                <td><a href=" {{ route('admin.user.del',$item->id) }} " data-toggle="confirm"
                                        role="button"><i class="far fa-trash-alt fa-lg text-danger"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
