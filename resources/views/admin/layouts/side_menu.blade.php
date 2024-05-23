<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="display: block;text-align: center;height: 100px">

        <a href="index.html" class="app-brand-link" style="margin-bottom: 10px">
        <span class="app-brand-logo demo" style="margin: auto">
          <img src="{{asset('assets/img/logo_white.png')}}">
        </span>
        </a>
        <p class="app-brand-text demo menu-text fw-bold">أكاديمية النجاح</p>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>

    </div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>الصفحة الرئيسية</div>
            </a>


        <!-- Apps & Pages -->
        <li class="menu-item">
            <a href="{{ route('articles.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div>المقالات</div>
            </a>
        </li>


        <!-- Academy menu start -->
        <li class="menu-item">
            <a href="{{ route('comments.index') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-book"></i>
                <div>التعليقات</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('comments.index') }}" class="menu-link">
                        <div>المدونة </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course.html" class="menu-link">
                        <div >المواد</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course-details.html" class="menu-link">
                        <div>تواصل معنا</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Academy menu end -->


            </ul>
        </li>

</aside>
