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
                        <li class="breadcrumb-item active">Новая категория</li>
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
                            <h3 class="card-title">Создание категории</h3>
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

                                     <label for="title_menu">Название в меню</label>
                                    <input type="text" name="title_menu"
                                           class="form-control @error('title_menu') is-invalid @enderror" id="title_menu"
                                           placeholder="Название в меню">         
                                   
                                    <label for="slug">Псевдоним</label>
                                    <input type="text" name="slug"
                                           class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           placeholder="Псевдоним">
                                    
                                    <div class="form-group">
                                    <label for="category_id">Родительская категория</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                       
                                       <option>Выбор категории</option>
                                        @foreach($categories as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                    <label for="image">Изображение</label>
                                     <input type="text" name="image"
                                           class="form-control @error('image') is-invalid @enderror" id="image"
                                           placeholder="Изображение"> 
                                           <div class="form-group">
                            
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

