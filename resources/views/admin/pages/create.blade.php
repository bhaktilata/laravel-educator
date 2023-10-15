@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новая страница</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                            <h3 class="card-title">Новая страница</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('page.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название">
                                </div>

                             <div class="form-group">
                                    <label for="title_seo">Название SEO</label>
                                    <input type="text" name="title_seo"
                                           class="form-control @error('title_seo') is-invalid @enderror" id="title_seo"
                                           placeholder="Название SEO">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Псевдоним</label>
                                    <input type="text" name="slug"
                                           class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           placeholder="Псевдоним">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Подзаголовок</label>
                                    <input type="text" name="subtitle"
                                           class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                                           placeholder="Псевдоним">
                                </div>
                                <div class="form-group">
                                    <label for="annotation">Аннотация</label>
                                    <textarea name="annotation" class="form-control @error('annotation') is-invalid @enderror" id="annotation" rows="3" placeholder="Аннотация..."></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <input type="text" name="description"
                                           class="form-control @error('description') is-invalid @enderror" id="description"
                                           placeholder="Описание">
                                </div>

                                <div class="form-group">
                                <label for="keywords">Ключевые слова</label>
                                    <input type="text" name="keywords"
                                           class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                           placeholder="Ключевык слова">
                             </div>

                                <div class="form-group">
                                    <label for="content">Контент</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7"
                                              placeholder="Контент ..."></textarea>
                                </div>


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
