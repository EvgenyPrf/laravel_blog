<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-regular fa-house-user"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.users.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-regular fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.categories.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-regular fa-bookmark"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tags.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-regular fa-tags"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.posts.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-regular fa-pen"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
