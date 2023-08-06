@extends('layouts.admin.panel')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kullanıcı Detay</h1>
    <p class="mb-4">{{$user->name}} isimli kullanıcının detayları</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kullanıcı Detayları</h6>
        </div>
        <div class="card-body">
            <form action="{{route('admin.users.updatepermissions', $user->id)}}" method="POST">
                @csrf
            @foreach ($roles as $role)
                    <h2>
                        <input type="checkbox" name="roles[]" value="{{$role->name}}" {{ in_array($role->name, $user_roles) ? 'checked' : ''}}>
                        {{ $role->title }}
                    </h2>
                    <ul>
                    @foreach ($role->permissions as $permission)
                        <li><input type="checkbox" name="permissions[]" value="{{$permission->name}}" {{ in_array($permission->name, $user_permissions) ? 'checked' : ''}}>{{$permission->title}}</li>
                    @endforeach
                    </ul>
            @endforeach
            <button type="submit" class="btn btn-success">Kaydet</button>
        </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection