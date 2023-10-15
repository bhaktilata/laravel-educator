@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Редактирование категорий</li>
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
                            <h3 class="card-title">Категория "{{ $category->title }}"</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('categories.update', ['category' => $category->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $category->title }}">

                                    <label for="title_menu">Название в меню</label>
                                    <input type="text" name="title_menu" class="form-control @error('title_menu') is-invalid @enderror" id="title_menu"
                                           value="{{ $category->title_menu }}">

                                    <label for="parent_id">Родительская категория</label>
                                    <input type="text" name="parent_id" class="form-control @error('parent_id') is-invalid @enderror" id="parent_id"
                                           value="{{ $category->parent_id }}">       
                                   
                                    <label for="slug">Псевдоним</label>
                                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           value="{{ $category->slug }}">

                                    <label for="slug">Описание</label>
                                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                           value="{{ $category->description }}">
                                           
                                    <label for="slug">Ключевые слова</label>
                                    <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                           value="{{ $category->keywords }}">              
                                           
                                   
                                    <label for="image">Изображение</label>
                                    <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" id="image"
                                           value="{{ $category->image }}">
                                    
                                    <div class="form-group">
                                    <label for="description">Аннотация</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ $category->description }}</textarea>
                                    </div>
              
                                    <label for="keywords">Ключевык слова</label>
                                    <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                           value="{{ $category->keywords }}">
                                    
                                    <div class="form-group">
                                    <label for="content">Контент</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7">{{ $category->content }}</textarea>
                                    </div>    

                                    <label for="published">Опубликовано</label>
                                    <input type="text" name="published" class="form-control @error('published') is-invalid @enderror" id="published"
                                           value="{{ $category->published }}">                                 
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

