@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование статьи!</h1>
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
                            <h3 class="card-title">Статья: <b>{{ $post->title }}</b></h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $post->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="title_seo">Название SEO</label>
                                    <input type="text" name="title_seo"
                                           class="form-control @error('title_seo') is-invalid @enderror" id="title_seo"
                                           value="{{ $post->title_seo }}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Псевдоним</label>
                                    <input type="text" name="slug"
                                           class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           value="{{ $post->slug }}">
                                </div>

                                <div class="form-group">
                                    <label for="annotation">Аннотация</label>
                                    <textarea name="annotation" class="form-control @error('annotation') is-invalid @enderror" id="annotation" rows="3">{{ $post->annotation }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="user_id">Автор статьи</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                        <option>Выбор автора</option>
                                        @foreach($users as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                            <option value="{{ $k }}" @if($k == $post->user_id) selected @endif>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <input type="text" name="description"
                                           class="form-control @error('description') is-invalid @enderror" id="description"
                                           value="{{ $post->description }}">
                                </div>
                               <div class="form-group">
                                    <label for="keywords">Ключевые слова</label>
                                    <input type="text" name="keywords"
                                           class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                           value="{{ $post->keywords }}">
                                </div>

                                <div class="form-group">
                                    <label for="content">Контент</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7">{{ $post->content }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                        @foreach($categories as $k => $v)
                                            <option value="{{ $k }}" @if($k == $post->category_id) selected @endif>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tags">Теги</label>
                                    <select name="tags[]" id="tags" class="select2" multiple="multiple"
                                            data-placeholder="Выбор тегов" style="width: 100%;">
                                        @foreach($tags as $k => $v)
                                            <option value="{{ $k }}" @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{ $v }}</option>
                                        @endforeach
                                    </select>
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
                                    <div><img src="{{ $post->getImage() }}" alt="{{ $post->title }}" class="img-thumbnail mt-2" width="200"></div>
                                </div>
                                <div class="form-group">
                                    <label for="visible">Видимая</label>
                                    <input type="text" name="visible"
                                           class="form-control @error('visible') is-invalid @enderror" id="visible"
                                           value="{{ $post->visible }}">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="is_featured">Рекомендуемая</label>
                                    <input type="text" name="is_featured"
                                           class="form-control @error('is_featured') is-invalid @enderror" id="is_featured"
                                           value="{{ $post->is_featured }}">

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
