<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.index') }}">
                    <span data-feather="home"></span>
                    Управление
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <span data-feather="file"></span>
                    Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.news.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Новости
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Пользователи
                </a>
            </li>
        </ul>

    </div>
</nav>
