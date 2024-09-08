@if(session('error'))
<p style="color:crimson;">{{session('error')}}</p>
@endif

@if(session('register'))
<p style="color:chartreuse;">{{session('register')}}</p>
@endif


@if($errors->any())
    @foreach($errors->all() as $error)
   <p style="color:crimson;">{{$error}}</p> <br>
    @endforeach
@endif

@if(session('enviado'))
<p style="color:chartreuse;">{{session('enviado')}}</p>
@endif
