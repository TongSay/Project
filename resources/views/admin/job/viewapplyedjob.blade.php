@extends('admin.partails.master')

@section('content')

@if (Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
                
            @endif
            <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('applyed-job')}}">{{__('globle.Action.Back')}}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{__('globle.apply')}} {{__('sidebar.Job')}}</li>
					</ol>
			</nav>



            
				<div class="row">
					<div class="col-lg-8 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">{{__('globle.apply')}} {{__('sidebar.Job')}}</li>
                                </ol></h4>
								
								<form class="cmxform">
									
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    
                                                    <center>
                                                   
                                                    <br>
                                                        <img src="{{asset ('CV')}}/cv.jpg" alt="My Profile" id="output" style="width: 220px; height: 150px; object-fit: cover; border-radius: 15px;"/>
                                                    <br>

                                                    <a href="{{ asset('CV')}}/{{$viewapplyedjob->cv}}" download="{{$viewapplyedjob->cv}}">
                                                        <p>Download CV</p>
                                                    </a>

                                                    </center>

                                                    <center>
                                                   
                                                        <br>
                                                            <img src="{{asset ('NationalCard')}}/identification.jpg" alt="My Profile" id="output" style="width: 220px; height: 150px; object-fit: cover; border-radius: 15px;"/>
                                                        <br>
    
                                                        <a href="{{ asset('NationalCard')}}/{{$viewapplyedjob->national_card}}" download="{{$viewapplyedjob->national_card}}">
                                                            <p>Download Identify</p>
                                                        </a>
    
                                                        </center>

                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        {{-- ====== First Name ======= --}}
                                                        <div class="form-group">
                                                            <label for="name">{{__('globle.form.name')}}</label>
                                                            <input disabled class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{$viewapplyedjob->name}}" required="" type="text">
                
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div>
                                                        
                                                    </div>


                                                    
                                                   <div class="col-lg-6">
        
                                                      
                                                        <div class="form-group">
                                                            <label for="position">{{__('globle.form.gender')}}</label>
                                                            <input disabled class="form-control @error('position') is-invalid @enderror"
                                                            name="position" value="{{$viewapplyedjob->genderapplyedjob->name}}" required="" type="text">
                
                                                            @error('position')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div>
                                                        
                                                    </div> 
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        {{-- ====== Jobs ======= --}}
                                                        <div class="form-group">
                                                           <label for="job">{{__('globle.apply')}} {{__('globle.form.position')}}</label>
                                                           <input disabled class="form-control @error('job') is-invalid @enderror" name="job" value="{{ $viewapplyedjob->applyedjob->{'title_'.app()->getLocale()} }}"
                                                           name="job" type="text">
               
                                                           @error('job')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                       </div>
                                                   </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        {{-- ====== Other Jobs ======= --}}
                                                        <div class="form-group">
                                                           <label for="other_job">{{__('globle.form.position')}} {{__('globle.form.other')}}</label>
                                                           <input disabled class="form-control @error('other_job') is-invalid @enderror" value="{{$viewapplyedjob->other_job}}" 
                                                           name="other_job" type="other_job">
               
                                                           @error('other_job')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                       </div>
                                                   </div>
                                                </div>
                                                

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        {{-- ====== dob ======= --}}
                                                        <div class="form-group">
                                                            <label>{{__('globle.form.date')}}</label>
                                                            <input disabled class="form-control @error('dob') is-invalid @enderror" value="{{$viewapplyedjob->dob}}" 
                                                           name="dob" type="date">
                                                            @error('dob')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                       </div>
                                                   </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        {{-- ====== pob ======= --}}
                                                        <div class="form-group">
                                                           <label for="pob">{{__('globle.Address')}}</label>
                                                           <input disabled class="form-control @error('pob') is-invalid @enderror" value="{{$viewapplyedjob->pob}}" 
                                                           name="pob" type="text">
               
                                                           @error('pob')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                       </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        {{-- ====== Role ======= --}}
                                                        <div class="form-group">
                                                            <label>{{__('globle.form.email')}}</label>
                                                            <input disabled class="form-control @error('email') is-invalid @enderror" value="{{$viewapplyedjob->email}}"
                                                           name="email" type="text">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                       </div>
                                                   </div>
                                                </div>
                                                
                                                
    
                                                
                                            </div>
                                        </div>


                                        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    {{-- ====== E-mail ======= --}}
                                                    <div class="form-group">
                                                       <label for="designation">{{__('globle.form.message')}}</label>
                                                       <textarea disabled  class="form-control" name="message" cols="30" rows="10">
                                                        {{$viewapplyedjob->remark}}
                                                       </textarea>
           
                                                       @error('mesaage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                   </div>
                                               </div>
                                            </div>
                                            
                                        
										
									<fieldset>	
										
										<input class="btn btn-primary" type="submit" value="Print">
									</fieldset>

                                    <script>
                                        function print_this(elem) {
              document.body.classList.add('print-element')
              elem.classList.add('print')
              window.print()
              document.body.classList.remove('print-element')
              elem.classList.remove('print')
            }
            
            document.querySelectorAll('fieldset').forEach(elem => 
              elem.onclick = () => print_this(elem))
                                    </script>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 grid-margin stretch-card">
						
					</div>
				</div>




@endsection
