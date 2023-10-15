@extends('admin.layouts.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Комментарии
            <small>просмотр и редактирование</small>
      </h1>
     </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Список коменнтарий</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{ route('comments.create') }}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Статья</th>
                  <th>Комментарий</th>
                  <th>Автор</th>
                  <th>Создан</th>
                  <th>Статус</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
            <tr>
                  <td>{{$comment->id}}</td>
                  <td>{{ $comment->post->title }}</td>
                  <td>{!! $comment->text !!}</td>
                  <td>{{$comment->author->name}}</td>
                  <td>{{$comment->created_at}}</td>
                 </td>
                  <td>
                  @if($comment->status == 1)
					<i class="fa fa-thumbs-up"></i> 
                  @else
	                  <i class="fa fa-lock"></i> 
                  @endif
                  </td>  
                                                    <td><a href="{{ route('comments.edit', ['comment' => $comment->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                   <form
                                                        action="{{ route('comments.destroy', ['comment' => $comment->id]) }}"
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
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection