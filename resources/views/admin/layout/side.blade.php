 <ul class="sidebar-menu">
              <li class="has-sub @if (Request::segments()[1]=='general') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-dashboard"></i></span> Thông tin 
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/general/add">Chỉnh sửa</a></li>

                  </ul>
              </li>
              <li class="has-sub @if (Request::segments()[1]=='product') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> Thiết kế in ấn
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/product/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/product/show">Danh sách</a></li>

                  </ul>
              </li>
                <li class="has-sub @if (Request::segments()[1]=='product') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> Thiết kế Website
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/product/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/product/show">Danh sách</a></li>

                  </ul>
              </li>
                <li class="has-sub @if (Request::segments()[1]=='product') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> Thiết kế hình ảnh
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/product/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/product/show">Danh sách</a></li>

                  </ul>
              </li>
                <li class="has-sub @if (Request::segments()[1]=='product') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> Chụp ảnh
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/product/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/product/show">Danh sách</a></li>

                  </ul>
              </li>
           <li class="has-sub @if (Request::segments()[1]=='product') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> Quản lý blog
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/product/add">Thêm mới blog</a></li>
                      <li><a class="" href="/admin/product/show">Danh sách</a></li>

                  </ul>
              </li>



              <li class="has-sub @if (Request::segments()[1]=='contact') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class=" icon-question-sign"></i></span> Liên hệ
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/contact/show">Danh sách</a></li>
                  </ul>
              </li>

         



              <li class="has-sub @if (Request::segments()[1]=='slideshow') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-tasks"></i></span> Slideshow
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                    <li><a class="" href="/admin/slideshow/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/slideshow/show">Danh sách</a></li>
                  </ul>
              </li>
              <li class="has-sub @if (Request::segments()[1]=='banner') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-bullhorn"></i></span> Trang
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="/admin/banner/add">Giới thiệu</a></li>
                      <li><a class="" href="/admin/banner/show">Dạy và học</a></li>
                  </ul>
              </li>
              <li><a class="" href="/admin/user/logout"><span class="icon-box"><i class="icon-user"></i></span> Đăng nhập lại</a></li>
          </ul>