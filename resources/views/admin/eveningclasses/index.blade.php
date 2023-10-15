@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Вечерние занятия</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Список занятий</li>
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
                                <h3 class="card-title">Список вечерних занятий</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('eveningclasses.create') }}" class="btn btn-primary mb-3">Добавить
                                    занятие</a>
                               @if (count($classes))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Название</th>
                                                <th>Название в меню</th>
                                                <th>Псевдоним</th>
                                                <th>Изображение</th>
                                                <th>Опубликовано</th>
                                                <th>Действие</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($classes as $classe)
                                                <tr>
                                                    <td>{{ $classe->id }}</td>
                                                    <td>{{ $classe->title }}</td>
                                                    <td>{{ $classe->title_menu }}</td>
                                                    <td>{{ $classe->slug }}</td>
                                                    <td align="center">
                                                        @if($classe->thumbnail) 
                                                            <img src="/public/uploads/images/{{ $classe->thumbnail }}">
                                                        @else
                                                           <img src="/public/img/no-image.png" }}>
                                                        @endif
                                                    </td>
                                                    <td>{{ $classe->visible }}</td>
                                                    <td>
                                                    <a href="{{ route('eveningclasses.edit', ['eveningclass' => $classe->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('eveningclasses.destroy', ['eveningclass' => $classe->id]) }}"
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
                                @else
                                    <p>Занятий пока нет...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="cpagination pagination-sm m-0 float-right clearfix">
                                {{ $classes->links() }}
                             {{--  <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </section>
        <!-- /.content -->
   
@endsection

