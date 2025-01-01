<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
        <a href="{{route('admin')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">{{__('words.home')}}</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{route('about.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Analytics">{{__('words.about')}}</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{route('category.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-list-check"></i>
            <div data-i18n="Analytics">{{__('words.category')}}</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{route('projects.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-diamond"></i>
            <div data-i18n="Analytics">{{__('words.projects')}}</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{route('contact.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-envelope"></i>
            <div data-i18n="Analytics">{{__('words.contact')}}</div>
        </a>
    </li>
</ul>
