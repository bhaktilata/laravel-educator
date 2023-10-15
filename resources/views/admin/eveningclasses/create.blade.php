@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Публикация вечерних занятий</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Новое занятие</li>
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
                            <h3 class="card-title">Создание занятия</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('eveningclasses.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                   
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название">

                                     <label for="title_menu">Название в меню</label>
                                    <input type="text" name="title_menu"
                                           class="form-control @error('title_menu') is-invalid @enderror" id="title_menu"
                                           placeholder="Название в меню">         
                                   
                                    <label for="slug">Псевдоним</label>
                                    <input type="text" name="slug"
                                           class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           placeholder="Псевдоним">
                                    
                                    <label for="author">Автор</label>
                                    <input type="text" name="author"
                                           class="form-control @error('author') is-invalid @enderror" id="author"
                                           placeholder="Автор">
                                           
                                      <div class="form-group">
                                        <label for="user_id">Автор статьи</label>
                                        <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                            <option>Выбор автора</option>
                                            @foreach($users as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="video">Видео</label>
                                    <input type="text" name="video"
                                           class="form-control @error('video') is-invalid @enderror" id="video"
                                           placeholder="Youtube видео"> 

                                    <div class="form-group">
                                        <label for="thumbnail">Добавить изображение</label>
                                            <div class="input-group">
                                               <div class="custom-file">
                                               <input type="file" name="thumbnail" id="thumbnail"
                                                   class="custom-file-input">
                                                <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                            </div>
                                        </div>
                                    </div>
                                             
                                    <label for="description">Описание</label>
                                    <input type="text" name="description"
                                           class="form-control @error('description') is-invalid @enderror" id="description"
                                           placeholder="Описание">
                                   
                                    <label for="keywords">Ключевые слова</label>
                                    <input type="text" name="keywords"
                                           class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                           placeholder="Ключевык слова">
                                    
                                    <label for="content">Содержание</label>
                                    <input type="text" name="content"
                                           class="form-control @error('content') is-invalid @enderror" id="content"
                                           placeholder="Содержание">                                    
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

