 <?php $cate=App\Cate::all();?> 
 <ul class="sidebar-menu">
              <li class="has-sub @if (Request::segments()[1]=='general') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-home"></i></span> Thông Tin 
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/general/add">Chỉnh sửa</a></li>

                  </ul>
              </li>

               <li class="has-sub @if (Request::segments()[1]=='cate') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-leaf"></i></span> Quản lý Menu
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/cate/show">Danh sách</a></li>
                  </ul>
              </li>


              <li class="has-sub @if (Request::segments()[1]=='catechild') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-picture"></i></span> Quản lý Danh mục
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/catechild/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/catechild/show">Danh sách</a></li>
                      @foreach($cate as $c)
                          <li><a class="" href="/admin/catechild/cate/{{$c->id}}">{{$c->name}}</a></li>
                      @endforeach

                  </ul>
              </li>


              <li class="has-sub @if (Request::segments()[1]=='product' ) active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class=" icon-bar-chart"></i></span> Sản phẩm
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/product/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/product/show">Danh sách</a></li>
                      @foreach($cate as $c)
                          <li><a class="" href="/admin/product/cate/{{$c->id}}">{{$c->name}}</a>
                            
                          </li>
                      @endforeach

                  </ul>
              </li>


               <li class="has-sub @if (Request::segments()[1]=='order') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-gift"></i></span> Gửi FILE Ảnh
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/order/show">Gửi FILE Ảnh</a></li>
                  </ul>
              </li>


              
            <li class="has-sub @if (Request::segments()[1]=='blog') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> Quản lý Blog
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/blog/add">Thêm mới blog</a></li>
                      <li><a class="" href="/admin/blog/show">Danh sách</a></li>

                  </ul>
              </li>

               <li class="has-sub @if (Request::segments()[1]=='banner' ) active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class=" icon-bar-chart"></i></span> Quản lý Banner
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/admin/banner/add">Thêm mới</a></li>
                      <li><a class="" href="/admin/banner/show">Danh sách</a></li>

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
              <li class="has-sub @if (Request::segments()[1]=='page') active @endif">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-bullhorn"></i></span> Trang
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="/admin/page/add/1">Giới thiệu</a></li>
                      <li><a class="" href="/admin/page/add/2">Dạy và học</a></li>
                  </ul>
              </li>
              <li><a class="" href="/admin/user/logout"><span class="icon-box"><i class="icon-user"></i></span> Đăng nhập lại</a></li>
          </ul>