@extends('main')

@section('title', '| Blog')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($posts as $post)

                <div class="post">
                    <h2>{{$post->title}}</h2>
                    <h5>{{ date('M j, Y', strtotime($post->created_at)) }}</h5>
                    <p>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</p>
                    <a href="{{route('blog.single', $post->slug)}}">Read More</a>
                </div>

            @endforeach
        </div>

        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>

@endsection