{{-- Side Navigation --}}
    <div class="sidebar content-box">               
        <ul class="nav">
            <!-- Main menu -->
            
            <li class="current">  <a href="{{route('home')}}" class="list-group-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
       <br>
            <div class="content-wrap well">
           <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Properties<span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('property.index')}}">Property</a></li>
                    <li><a href="{{route('property.create')}}">Add Property</a></li>  
                </ul>
            </li>
         </div>
            
         <div class="content-wrap well">
            <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Category<span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{route('category.index')}}">Categories</a></li>  
                    </ul>
                </li>
            </div>
                <div class="content-wrap well">
                 <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Orderrs<span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{url('admin/orders')}}">Orders</a></li>
                        <li><a href="{{url('admin/orders/pending')}}">Orders Pending</a></li>
                        <li><a href="{{url('admin/orders/delivered')}}">Orders Delivered</a></li>  
                          
                    </ul>
                </li>
             </div>
        </ul>
    </div>

