<div class="container">
    <div class="row clearfix">
        <div class="col-md-6 col-md-offset-3">
        <!-- errors on form itself -->
        @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible alert-margin" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">x</span>
                <span class="sr-only">Close</span>
            </button>
            <ul class="list-unstyled">
                <li>{{ Session::get('success') }}</li>
            </ul>
        </div>
        @endif
        @if(Session::get('info'))
        <div class="alert alert-info alert-dismissible alert-margin" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">x</span>
                <span class="sr-only">Close</span>
            </button>
            <ul class="list-unstyled">
                <li>{{ Session::get('info') }}</li>
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
        @if(Session::get('danger'))
        <div class="alert alert-danger alert-dismissible alert-margin" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">x</span>
                <span class="sr-only">Close</span>
            </button>
            <ul class="list-unstyled">
                <li>{{ Session::get('danger') }}</li>
            </ul>
        </div>
        @endif
        <!--no javascript   -->
        <noscript>        
            <div class="alert alert-danger alert-margin" role="alert">
                <p>Please enable Javascript for full functionality!</p>   
            </div>
        </noscript>
        </div>
    </div>
</div>