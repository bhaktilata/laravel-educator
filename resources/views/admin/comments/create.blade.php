@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Создание категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Новый комментарий</li>
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
                            <h3 class="card-title">Создание комментария</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('categories.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                   
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название">
                                   
                                    <label for="image">Изображение</label>
                                     <input type="text" name="image"
                                           class="form-control @error('image') is-invalid @enderror" id="image"
                                           placeholder="Изображение"> 
                   
                                    <label for="content">Содержание</label>
                                    <input type="text" name="content"
                                           class="form-control @error('content') is-invalid @enderror" id="content"
                                           placeholder="Содержание">                                    
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{ route('comments.index') }}"><button type="button" class="btn btn-info">Отмена</button></a>
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

