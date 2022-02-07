@extends('admin.partails.master')

@section('content')


@if (Session::has('message'))
<div class="alert alert-success">
	{{Session::get('message')}}
</div>

@endif
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('news.index')}}">{{__('globle.Action.Back')}}</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{__('globle.Action.Edit')}} {{__('globle.News')}}
		</li>
	</ol>
</nav>

<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">{{__('globle.Action.Edit')}} {{__('globle.News')}}</li>
					</ol>
				</h4>

				<form class="cmxform" action="{{route('news.update',[$news->id])}}" 
          method="POST" enctype="multipart/form-data">@csrf {{method_field('PATCH')}} 
                        <fieldset>
                            <div class="row">

                                <div class="col-md-6">

                                    @foreach (config('app.available_locales') as $locale)



                                        <div class="form-group">
                                            <label for="title_{{ $locale }}">Title
                                                ({{ strtoupper($locale) }})</label>
                                            <input class="form-control" type="text" name="title_{{ $locale }}"
                                                id="title_{{ $locale }}" value="{{ $news->{('title_'.$locale)}  }}"
                                                required autofocus />

                                        </div>



                                        <div class="form-group">


                                            <label for="content">{{ __('globle.Content') }}
                                                ({{ strtoupper($locale) }}) </label>

                                            <textarea cols="10" id="editor1_{{ $locale }}"
                                                name="content_{{ $locale }}" rows="4" data-sample-short
                                                class="form-control @error('content') is-invalid @enderror"
                                                required="">{{ $news->{('content_'.$locale)}  }}</textarea>
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <script>
                                                // Don't forget to add CSS for your custom styles.
                                                CKEDITOR.addCss(
                                                    'figure[class*=easyimage-gradient]::before { content: ""; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
                                                    'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
                                                    '.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
                                                    '.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }'
                                                );

                                                CKEDITOR.replace('editor1_{{ $locale }}', {
                                                    extraPlugins: 'easyimage',
                                                    removePlugins: 'image',
                                                    removeDialogTabs: 'link:advanced',
                                                    toolbar: [{
                                                            name: 'document',
                                                            items: ['Undo', 'Redo']
                                                        },
                                                        {
                                                            name: 'styles',
                                                            items: ['Format']
                                                        },
                                                        {
                                                            name: 'basicstyles',
                                                            items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
                                                        },
                                                        {
                                                            name: 'paragraph',
                                                            items: ['NumberedList', 'BulletedList']
                                                        },
                                                        {
                                                            name: 'links',
                                                            items: ['Link', 'Unlink']
                                                        },
                                                        {
                                                            name: 'insert',
                                                            items: ['EasyImageUpload']
                                                        }
                                                    ],
                                                    height: 300,
                                                    cloudServices_uploadUrl: 'https://33333.cke-cs.com/easyimage/upload/',
                                                    // Note: this is a token endpoint to be used for CKEditor 4 samples only. Images uploaded using this token may be deleted automatically at any moment.
                                                    // To create your own token URL please visit https://ckeditor.com/ckeditor-cloud-services/.
                                                    cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
                                                    easyimage_styles: {
                                                        gradient1: {
                                                            group: 'easyimage-gradients',
                                                            attributes: {
                                                                'class': 'easyimage-gradient-1'
                                                            },
                                                            label: 'Blue Gradient',
                                                            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/gradient1.png',
                                                            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/gradient1.png'
                                                        },
                                                        gradient2: {
                                                            group: 'easyimage-gradients',
                                                            attributes: {
                                                                'class': 'easyimage-gradient-2'
                                                            },
                                                            label: 'Pink Gradient',
                                                            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/gradient2.png',
                                                            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/gradient2.png'
                                                        },
                                                        noGradient: {
                                                            group: 'easyimage-gradients',
                                                            attributes: {
                                                                'class': 'easyimage-no-gradient'
                                                            },
                                                            label: 'No Gradient',
                                                            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/nogradient.png',
                                                            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/nogradient.png'
                                                        }
                                                    },
                                                    easyimage_toolbar: [
                                                        'EasyImageFull',
                                                        'EasyImageSide',
                                                        'EasyImageGradient1',
                                                        'EasyImageGradient2',
                                                        'EasyImageNoGradient',
                                                        'EasyImageAlt'
                                                    ],
                                                    removeButtons: 'PasteFromWord'
                                                });
                                            </script>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-6">


                                    <div class="form-group">
                                        <center>
                                            <label for="name">{{__('globle.Photo')}}</label>
                                            <br>
        
                                            
        
                                                <img src="{{asset ('NewsPicture')}}/{{$news->image}}" alt="My Profile" id="output" style="width: 100%; border-radius:5px;"/>
        
                                                <br>
        
                                            <input type="file" hidden accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                                    <label class="btn btn-primary mt-3" for="file" style="cursor: pointer;">Upload Image</label>
                                    <p><img id="output" width="200" /></p>
        
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
                            @if (@isset(auth()->user()->role->permission['name']['news']['can-edit']))

                            <input class="btn btn-warning" type="submit" value="{{__('globle.Action.Update')}}">
    
                            @endif
    
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
