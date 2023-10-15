@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование комментария</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Редактирование</li>
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
                            <h3 class="card-title">Комментарий: <b>{{ $comment->title }}</b></h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('comments.update', ['comment' => $comment->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Статья</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $comment->post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="content">Комментарий</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7">{{ $comment->text }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Статус</label>
                                    <textarea name="status" class="form-control @error('status') is-invalid @enderror" id="status" rows="7">{{ $comment->status }}</textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

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

