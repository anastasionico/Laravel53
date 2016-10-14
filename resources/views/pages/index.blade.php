@extends('main')

@section('title','Home')
@section('content')
    <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Hello, Welcome to my Laravel blog</h1>
                    <p class="lead">Check it out!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
                </div>        
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a href="#" class="btn btn-primary   ">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a href="#" class="btn btn-primary   ">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a href="#" class="btn btn-primary   ">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a href="#" class="btn btn-primary   ">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a href="#" class="btn btn-primary   ">Read More</a>
                </div>
                <hr>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>    

    }
@endsection


@section('scripts')
    <script type="text/javascript">
        confirm('This is a confirmation message');
    </script>
@endsection