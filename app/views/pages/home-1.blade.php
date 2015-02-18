@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col-md-9">  
        <div id="eq-col" class="well eq-col">   
            <h3 class="text-info">Main</h3>
            <p>
             There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.
            </p>
            <p>
             You know, being a test pilot isn't always the healthiest business in the world.
            </p>
            <p>
             That's one small step for [a] man, one giant leap for mankind.
            </p>
            <p>
             We choose to go to the moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone, and one which we intend to win.
            </p>
            <p>
             What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.
            </p>                  
            <hr>
            <div class="row clearfix">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" src="http://lorempixel.com/600/200/people" />
                        <div class="caption">
                            <h3>
                                Thumbnail label
                            </h3>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" src="http://lorempixel.com/600/200/city" />
                        <div class="caption">
                            <h3>
                                Thumbnail label
                            </h3>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" src="http://lorempixel.com/600/200/sports" />
                        <div class="caption">
                            <h3>
                                Thumbnail label
                            </h3>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.sidebar')
</div>

@stop

@section('footer')
<script>
$( document ).ready(function() {
    var heights = $(".eq-col").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".eq-col").height(maxHeight);
});
</script>
@stop