  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('public/assets/admin/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">На сайт</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/assets/admin/img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Махадев</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Поиск" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Главная страница
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-archive"></i>
              <p>
                Категории
                <i class="fas fa-angle-left right"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Список категорий</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новая категория</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Тэги
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tags.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Список тэгов</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tags.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новый тэг</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Статьи
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Список статей</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('posts.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новая статья</p>
                </a>
              </li>
             </ul>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Страницы
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('page.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Список страниц</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('page.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новая страница</p>
                </a>
              </li>
             </ul>
          </li>


          <li class="nav-item">
            <a href="/admin/comments" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Комментарии
                <i class="fas fa-angle-left right"></i>
                <!-- newCommentsCount находится в QppServiceProvider, итспользуя View Composer -->
                <span class="pull-right-container"> <small class="label pull-right bg-green">{{$newCommentsCount}}</small>
        </span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('comments.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Список комментарий</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('comments.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новый комментарий</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Вечерние занятия
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Список занятий</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новое занятие</p>
                </a>
              </li>

            </ul>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Пользователи
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Список пользователей</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новый пользователь</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Подписчики
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('subscribers.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Список подписчиков</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subscribers.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Новый подписчик</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
           <ul class="nav nav-treeview">
                     <li class="nav-item has-treeview">
                        <a href="{{ route('logout') }}" class="nav-link">
                            <i class="nav-icon fas fa-arrow-circle-down"></i>
                            <span> Выйти
                            </span>
                        </a>
                      </li>
                    </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
