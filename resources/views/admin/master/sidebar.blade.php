
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
    </form>
                   <ul class="nav menu">
        <li @yield('admin')><a href="/admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Tổng quan</a></li>
        <li @yield('category')><a href="/admin/category"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg>Danh mục</a></li>
        <li @yield('product')><a href="/admin/product"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Sản phẩm</a></li>
        <li @yield('comment')><a href="/admin/comment"><svg class="glyph stroked empty-message "><use xlink:href="#stroked-empty-message"/></svg>Bình luận sản phẩm</a></li>
        <li @yield('client')><a href="/admin/client"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Khách hàng</a></li>
        <li @yield('contact')><a href="/admin/contact"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Báo cáo</a></li>
        <li @yield('order')><a href="/admin/order"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad" /></svg> Đơn hàng</a></li>
        <li @yield('user')><a href="/admin/user"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Thành viên</a></li>
        <li role="presentation" class="divider"></li>
        <li @yield('settig')><a href="setting.html"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> Cấu hình</a></li>
    
    </ul>

</div>