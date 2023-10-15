@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Пользователи</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Панель администратора</a></li>
                        <li class="breadcrumb-item active">Список</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Список пользователей</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Добавить пользователя</a>
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">#</th>
                                            <th>Имя</th>
                                            <th>E-mail</th>
                                            <th>Пароль</th>
                                            <th>Аннотация</th>
                                            <th>Аватар</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                               <td>{{$user->id}}</td>
                                               <td>{{$user->name}}</td>
                                               <td>{{$user->email}}</td>
                                               <td>{{$user->password}}</td>
                                               <td>{{$user->description}}</td>
                                               <td  align="center">
                                                    @if($user->avatar) 
                                                        <img src="/uploads/images/{{ $user->getImage() }}" alt="" class="img-resposive" width="60">
                                                    @else
                                                        <img src="/public/img/no-image.png" }}>
                                                    @endif
                                               </td>
                                               <td>
                                               <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                     <form
                                                        action="{{ route('user.destroy', ['user' => $user->id]) }}"
                                                        method="post" class="float-left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Подтвердите удаление')">
                                                            <i
                                                                class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                 </td>
                                               
                                                </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </section>
@endsection