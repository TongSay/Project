@extends('admin.partails.master')

@section('content')


@if (Session::has('message'))
<div class="alert alert-success">
	{{Session::get('message')}}
</div>

@endif
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('reports.index')}}">{{__('globle.Action.Back')}}</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{__('globle.Action.Create')}} {{__('sidebar.Report')}}
		</li>
	</ol>
</nav>

<div class="row">
	<div class="col-lg-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">{{__('globle.Action.Create')}} {{__('sidebar.Report')}}</li>
					</ol>
				</h4>

				<form class="cmxform" action="{{route('reports.store')}}" enctype='multipart/form-data' method="POST">@csrf
					<fieldset>
						<div class="row">
							<div class="col-lg-12">
                                @foreach(config('app.available_locales') as $locale)
                      
                        

                                <div class="form-group">
                                    <label for="title_{{ $locale }}">Title ({{ strtoupper($locale) }})</label>
                                    <input class="form-control" type="text" name="title_{{ $locale }}" id="title_{{ $locale }}"
                           value="{{ old('title_' . $locale) }}"
                            required autofocus />

                                </div>

                                
                                @endforeach
							</div>
							
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<center>
									<label for="name">{{__('globle.Cover')}} {{__('globle.File')}}</label>
									<br>

									

										<img src="{{asset ('Files')}}/Cover/pdf.png" alt="My Profile" id="output" style="width: 150px; "/>

										<br>

									<input type="file" hidden accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
							<label class="btn btn-danger mt-3" for="file" style="cursor: pointer;">Upload File</label>
							<p> <img id="output" width="200" /> </p>

									</center>
									

							<script>
							var loadFile = function(event) {
								var image = document.getElementById('output');
								image.src = URL.createObjectURL(event.target.files[0]);
							};
							</script>

								</div>
							</div>
							
						</div>

                        <div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label for="file">{{__('globle.File')}}</label>
									<input id="file" class="form-control @error('file') is-invalid @enderror" id="name"
										name="file" type="file" required="">

									@error('file')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							
						</div>



                        


						<input class="btn btn-primary" type="submit" value="{{__('globle.Action.Create')}}">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-6 grid-margin stretch-card">

	</div>
</div>



</main>


@endsection