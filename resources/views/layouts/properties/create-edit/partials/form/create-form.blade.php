
<div class="row">
    <div class="column col-lg-12">
    	<div class="properties-box">
    		<div class="inner-container">
    			<div class="property-submit-form">
                    <form method="post" action="{{route('property.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                    	<div class="title"><h3>Basic Info</h3></div>
                        @include("layouts.includes.message")
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Title</label>
                                <input type="text" name="title" placeholder="Property Title" required value="{{Request::old('title')}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Type</label>
                                <select class="custom-select-box" name="category_id">
                                    @php 
                                    use App\Model\Category;
                                    $categories=Category::all();
                                    @endphp
                                    @forelse($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @empty
                                    <option value="residential">No Category</option>
                                    @endforelse
                                </select>
                            </div>

                           <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="price" class="control-label">Price</label>
                                <input type="text" class="form-control p-input" name="price" id="price" placeholder="Price" value="{{Request::old('price')}}" required>
                                    @if ($errors->has('price'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                            </div>
                      
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address" required value="{{Request::old('address')}}">
                            </div>
                            </div>
                            <!-- Form Group -->
                           

                        <div class="title"><h3>Property Gallery</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-12">
                                 <input type="file" class='form-control' class="form-control-file" name='image' id="exampleInputFile2" aria-describedby="fileHelp">
                            </div>
                        </div>

                        <div class="title"><h3>Detailed Information</h3></div>
                        <div class="row">
                           	<!-- Form Group -->
                            <div class="form-group col-lg-12">
                            	<textarea name="detail" placeholder="Detailed Information">{{Request::old('detail')}}</textarea>
                            </div>
                        </div>

                        <div class="title"><h3>Contact Info</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" class="form-control p-input" name="name" id="name" placeholder="Name" value="{{Request::old('name')}}" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <!-- Form Group -->
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control p-input" name="email" id="email" placeholder="Email" value="{{Request::old('email')}}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <!-- Form Group -->
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="phone" class="control-label">Phone No</label>
                                <input type="text" class="form-control p-input" name="phone" id="phone" placeholder="phone" value="{{Request::old('phone')}}" required>
                                    @if ($errors->has('phone'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                            	<button type="submit" class="theme-btn btn-style-one"> Submit Property</button>
                            </div>
                        </div>
                    </form>
                </div>
    		</div>
    	</div>
    </div>
</div>
