<!-- contact us -->
<div class="contact-us text-center">
    <!-- container -->
    <div class="container">
        <h2 class="display-4 mb-4">@if(app()->getLocale() == 'ar') @lang('site.Contact Us') @else Contact Us @endif</h2>
        <div class="row">
            <div class="col-4">
                <iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3519.235698153429!2d30.750769985605636!3d28.10884751434106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b24fc9d4463b9%3A0xef66a916a18ee6bf!2z2LTYsdmD2Kkg2YXZitin2Ycg2KfZhNi02LHYqCDZiNin2YTYtdix2YEg2KfZhNi12K3Zig!5e0!3m2!1sar!2seg!4v1569350135768!5m2!1sar!2seg" id="location" name="address" style="width:100%; height:500px;">
                </iframe>
            </div>
            <div class="col-8">
                <!-- form-contact -->
                <div class="form-contact text-left">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    <form action="{{route('contact_us')}}" method="POST">
                        {{ csrf_field() }}
                        <div class = "form-group">
                            <label>@if(app()->getLocale()=='ar')@lang('site.Name') @else Name @endif</label>
                            <input type="text" name="name" class="form-control" required = "required">
                        </div>
                        <div class = "form-group">
                            <label>@if(app()->getLocale()=='ar')@lang('site.Email') @else Email @endif</label>
                            <input required = "required" type="email" name="email" class="form-control">
                        </div>
                        <div class = "form-group">
                            <label>@if(app()->getLocale()=='ar')@lang('site.Message') @else Message @endif</label>
                            <textarea required = "required" name="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <!-- form-contact -->
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- contact us -->
