<div class="container my-5">
    <div class="text-center">
        <h4 class="">Blog</h4>
        <p>Apa saja kabar hari ini? kami akan beritahu anda</p>
    </div>

    <div class="row">

        @foreach ( $blog as $item )
            
        <div class="col-md-3 my-3">
            <div class="card shadow">
                <div class="wrapper-card-blog">
                    <img src="/{{ $item->cover }}" width="100%" alt="">
                </div>
                <div class="p-3">
                    <a href="/blog/show/{{ $item->id }}" class="text-decoration-none"><h5>{{ $item->title }}</h5></a>
                    {!! Illuminate\Support\Str::limit($item->body, 100) !!}
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="text-center mt-3">
            <a href="" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div> --}}
    </div>
</div>