@extends('admin.layouts.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Подписки
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Главная </a></li> &nbsp; / &nbsp; <li class="active"> Список подписок</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Список рассылки</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('subscribers.create')}}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Имя подписчика</th>
                  <th>E-mail</th>
                  <th>Статус подписки</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subs as $subscriber)
                <tr>
                  <td>{{$subscriber->id}}</td>
                  <td>{{$subscriber->name}}</td>
                  <td>{{$subscriber->email}}</td>
                  @if ($subscriber->status == 0 )
                      <td><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                      </td>
                  @else
                      <td><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                      </td>
                  @endif
                  <td>
                  <a href="{{ route('subscribers.edit', ['subscriber' => $subscriber->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                  <form action="{{ route('subscribers.destroy', ['subscriber' => $subscriber->id, 'method'=>'delete']) }}"
                      method="post" class="float-left">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                      <i class="fas fa-trash-alt"></i>
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