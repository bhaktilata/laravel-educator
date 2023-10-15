@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование страницы!</h1>
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
                            <h3 class="card-title">Страница: <b>{{ $page->title }}</b></h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('page.update', ['page' => $page->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $page->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="title_seo">Название SEO</label>
                                    <input type="text" name="title_seo"
                                           class="form-control @error('title_seo') is-invalid @enderror" id="title_seo"
                                           value="{{ $page->title_seo }}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Псевдоним</label>
                                    <input type="text" name="slug"
                                           class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           value="{{ $page->slug }}">
                                </div>

                                <div class="form-group">
                                    <label for="user_id">Автор статьи</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                        <option>Выбор автора</option>
                                        @foreach($users as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                            <option value="{{ $k }}" @if($k == $page->user_id) selected @endif>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="annotation">Аннотация</label>
                                    <textarea name="annotation" class="form-control @error('annotation') is-invalid @enderror" id="annotation" rows="3">{{ $page->annotation }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <input type="text" name="description"
                                           class="form-control @error('description') is-invalid @enderror" id="description"
                                           value="{{ $page->description }}">
                                </div>
                               <div class="form-group">
                                    <label for="keywords">Ключевые слова</label>
                                    <input type="text" name="keywords"
                                           class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                           value="{{ $page->keywords }}">
                                </div>

                                <div class="form-group">
                                    <label for="content">Контент</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7">{{ $page->content }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="thumbnail"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                        </div>
                                    </div>
                                    <div><img src="{{ $page->getImage() }}" alt="{{ $page->title }}" class="img-thumbnail mt-2" width="200"></div>
                                </div>
                                <div class="form-group">
                                    <label for="visible">Видимая</label>
                                    <input type="text" name="visible"
                                           class="form-control @error('visible') is-invalid @enderror" id="visible"
                                           value="{{ $page->visible }}">
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
