@extends('layouts.base')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1>{{ $post->title }}</h1>

        <p class="blog-post-meta">
            {{ $post->user->name }} on
            {{ $post->created_at->toFormattedDateString() }}
        </p>

        <p>{{ $post->body }}</p>

        <hr />

        @if (count($post->tags))
            <div>
                @foreach ($post->tags as $tag)
                    <a href="{{ url('/') }}/posts/tags/{{ $tag->name }}" class="badge badge-primary">{{ $tag->name }}</a>
                @endforeach
            </div>
        @endif

        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>{{ $comment->created_at->diffForHumans() }}: </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr />

        <div class="card" style="margin-bottom: 2rem">
            <div class="card-block" style="padding: 1rem">
                <form class="" method="POST" action="{{ url('/') }}/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea id="body" name="body" placeholder="Your comment here..." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>

                </form>
            </div>
        </div>

        @include('layouts.errors')

    </div>
@endsection
