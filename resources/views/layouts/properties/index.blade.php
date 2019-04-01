@extends('layouts.app')
@section('link')
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/rickshaw/rickshaw.min.css')}}" />
	<link rel="stylesheet" href="{{asset('style/admin/table/bower_components/chartist/dist/chartist.min.css')}}" />
@endsection

@section('navigation')
	<h3><i class="fas fa-tachometer-alt"></i> Dashboard<small> View Your Dashboard</small></h3><hr>
	<ol class="breadcrumb">
	 <li><a class="active"><i class="fas fa-tachometer-alt"></i> dashboard</a></li>
	</ol>
@endsection
@section('content')
    <div class="content-wrapper">
            <h3 class="page-title text-center">Property Table</h3><hr>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        @include("layouts.includes.message")
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>image</th>  
                            <th>Price</th>   
                            <th>Pho No</th> 
                            <th>View</th>    
                            <th>Edit</th>    
                            <th>Delete</th>    
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($properties as $property)
                        <tr>
                            <td>{{$property->id}}</td>
                            <td>{{$property->title}}</td>
                            <td>{{$property->category->name}}</td>
                            <td><img src="{{URL::to($property->image)}}" style="max-height:40px;min-height: 40px;max-width: 40px;min-width: 40px"></td>
                            <td>{{$property->price}}</td>
                            <td>{{$property->phone}}</td>
                            <td> <a href="{{-- {{route('property.view',$property->id)}} --}}"><span style="color:green"><i class="far fa-eye"></i></span></a></td>
                            <td><a href="{{route('property.edit',$property->id)}}" ><span style=""><i class="fas fa-pencil-alt"></i></span></a></td>
                            <td><a href="{{route('property.delete',$property->id)}}" id="delete"><span style="color:#DD4F43"><i class="fas fa-trash-alt"></i></span></a></td>
                         </tr>
                        @empty
                        <tr>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4>No Property</h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>     
                            <td><h4></h4></td>   
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
@section('js')
<!-- table js-->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('style/admin/table/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('style/admin/table/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('style/admin/table/js/data-table.js')}}"></script>
<!-- end table js -->
@endsection
