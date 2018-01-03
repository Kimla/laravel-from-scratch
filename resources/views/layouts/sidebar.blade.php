<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach ($archives as $archive)
                <li>
                    <a href="{{ url('/') }}/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                        {{ $archive['month'] }} {{ $archive['year'] }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Tags</h4>
        <ol class="list-unstyled">
            @foreach ($tags as $tag)
                <li>
                    <a href="{{ url('/') }}/posts/tags/{{ $tag }}">
                        {{ $tag }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
</aside>
