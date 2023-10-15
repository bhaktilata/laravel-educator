@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование вечернего занятия</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Редактирование вечернего занятия</li>
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
                            <h3 class="card-title">Занятие "{{ $eveningclasses->title }}"</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('eveningclasses.update', ['eveningclass' => $eveningclasses->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $eveningclasses->title }}">

                                    <label for="title_menu">Название в меню</label>
                                    <input type="text" name="title_menu" class="form-control @error('title_menu') is-invalid @enderror" id="title_menu"
                                           value="{{ $eveningclasses->title_menu }}">

                                    <label for="slug">Псевдоним</label>
                                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           value="{{ $eveningclasses->slug }}">

                                    <label for="slug">Описание</label>
                                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                           value="{{ $eveningclasses->description }}">
                                           
                                    <label for="slug">Ключевые слова</label>
                                    <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                           value="{{ $eveningclasses->keywords }}">              
                                    
                                    <label for="author">Автор</label>
                                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author"
                                            value="{{ $eveningclasses->author }}">
                                    
                                           <label for="video">Видео</label>
                                    <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" id="video"
                                           placeholder="Youtube видео"  value="{{ $eveningclasses->video }}"> 

                                <div class="form-group">
                                    <label for="thumbnail">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="thumbnail"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                        </div>
                                    </div>
                                    <div><img src="{{ $eveningclasses->getImage() }}" alt="{{ $eveningclasses->title }}" class="img-thumbnail mt-2" width="200"></div>
                                </div>       

                                    <div class="form-group">
                                    <label for="content">Контент</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7">{{ $eveningclasses->content }}</textarea>
                                    </div>    

                                    <label for="visible">Опубликовано</label>
                                    <input type="text" name="visible" class="form-control @error('visible') is-invalid @enderror" id="visible"
                                           value="{{ $eveningclasses->visible }}">                                 
                                </div>       
                              
                            </div>
                            <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Сохранить</button>
                            <a type="button" href="{{ url('/admin/categories') }}" class="btn btn-primary">Отменить</a>
                               
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

