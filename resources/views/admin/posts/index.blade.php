@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Статьи</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Панель администратора</a></li>
                        <li class="breadcrumb-item active">Список</li>
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
                            <h3 class="card-title">Список статей</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Добавить статью</a>
                            @if (count($posts))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px"># Id</th>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            <!--th>Теги</th-->
                                            <th>Изображение</th>
                                            <th><i class="fa fa-calendar" aria-hidden="true"></i></i> Дата</th>
                                            <th><i class="fas fa-eye mr-2"></i></th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->category->title_menu }}</td>
                                                <!--td>{{ $post->tags->pluck('title')->join(', ') }}</td-->
                                                <td align="center">
                                                    @if($post->thumbnail)
                                                    <img src="/public/uploads/images/{{ $post->thumbnail }}">
                                                    @else
                                                    <img src="/public/img/no-image.png" }}>
                                                    @endif
                                                </td>
                                                <td>{{ $post->created_at }}</td>
                                                <td>{{ $post->visible }}</td>
                                                <td>
                                                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('posts.destroy', ['post' => $post->id]) }}"
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
                                <p>Статей пока нет...</p>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $posts->links() }}
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

