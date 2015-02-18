<!-- errors on form itself -->
@if(Session::get('message'))
<div class="alert alert-success alert-dismissible alert-margin" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">x</span>
        <span class="sr-only">Close</span>
    </button>
    <ul class="list-unstyled">
        <li>{{ Session::get('message') }}</li>
    </ul>
</div>
@endif
@if(Session::get('warning'))
<div class="alert alert-warning alert-dismissible alert-margin" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">x</span>
        <span class="sr-only">Close</span>
    </button>
    <ul class="list-unstyled">       
        <li>{{ Session::get('warning') }}</li>       
    </ul>
</div>                
@endif


<!--no javascript   -->
<noscript>        
<div class="alert alert-danger alert-margin" role="alert">
<p>Please enable Javascript for full functionality!</p>   
</div>
</noscript>