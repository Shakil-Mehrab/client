
<div class="row">
    <div class="column col-lg-12">
    	<div class="properties-box">
    		<div class="inner-container">
    			<div class="property-submit-form">
                    <form method="post" action="{{route('property.updates',$property->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                    	<div class="title"><h3>Basic Info</h3></div>
                        @include("layouts.includes.message")
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Title</label>
                                <input type="text" name="title" placeholder="Property Title" required value="{{$property->title}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Type</label>
                                <select class="custom-select-box" name="property_type">
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="apartment">Apartments</option>
                                </select>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Status</label>
                                <select class="custom-select-box" name="status">
                                    <option value="rent">Rent</option>
                                    <option value="sale">Sale</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Area</label>
                                 	<input type="text" name="area" placeholder="SqFt" required value="{{$property->area}}">
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Kitchen</label>
                                 	<select class="custom-select-box" name="nong_of_kitchen">
                                        <option value="1">01 Kitchen</option>
                                        <option value="2">02 Kitchen</option>
                                        <option value="3">03 Kitchen</option>
                                        <option value="4">04 Kitchen</option>
                                        <option value="5">05 Kitchen</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Bed Room</label>
                                 	<select class="custom-select-box" name="nong_of_bedroom">
                                        <option value="1">01 Beadroom</option>
                                        <option value="2">02 Beadroom</option>
                                        <option value="3">03 Beadroom</option>
                                        <option value="4">04 Beadroom</option>
                                        <option value="5">05 Beadroom</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Bathroom</label>
                                 	<select class="custom-select-box" name="nong_of_bathroom">
                                        <option value="1">01 Bathroom</option>
                                        <option value="2">02 Bathroom</option>
                                        <option value="3">03 Bathroom</option>
                                        <option value="4">04 Bathroom</option>
                                        <option value="5">05 Bathroom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Gourage</label>
                                    <select class="custom-select-box" name="nong_of_gourage">
                                        <option value="1">01 Gourage</option>
                                        <option value="2">02 Gourage</option>
                                        <option value="3">03 Gourage</option>
                                        <option value="4">04 Gourage</option>
                                        <option value="5">05 Gourage</option>
                                    </select>
                                </div>
                            </div>
                           <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="price" class="control-label">Price</label>
                                <input type="text" class="form-control p-input" name="price" id="price" placeholder="Price" value="{{$property->price}}" required>
                                    @if ($errors->has('price'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="title"><h3>Address</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address" required value="{{$property->address}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>State</label>
                                <select class="custom-select-box" name="state">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="comilla">Comilla</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="gopalgonj">Gopalgonj</option>
                                    <option value="gazipur">Gazipur</option>
                                </select>
                            </div>                          
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Location</label>
                                <select class="custom-select-box" name="location">
                                    <option value="basundhara">Basubdhara</option>
                                    <option value="purbachal">Purbachal</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>country</label>
                                <select class="custom-select-box" name="country">
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="nepal">Nepal</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="australia">Australia</option>
                                    <option value="singapore">Singapore</option>
                                </select>
                            </div>
                        </div>

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
                            	<textarea name="detail" placeholder="Detailed Information">{{$property->detail}}</textarea>
                            </div>
                        </div>
                        <div class="title"><h3>Contact Info</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Name" required value="{{$property->name}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email" required value="{{$property->email}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="phone" class="control-label">Phone No</label>
                                <input type="text" class="form-control p-input" name="phone" id="phone" placeholder="phone" value="{{$property->phone}}" required>
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
