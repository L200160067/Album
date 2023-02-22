{{-- <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </div> --}}

<div class="">
  <div class="card bg-dark text-white ">
    <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="card-img" alt="Stony Beach" style="min-height: 400px;object-fit: cover"/>
    <div class="card-img-overlay w-100 d-flex justify-content-center align-items-center flex-column" style="background-color: rgba(0, 0, 0, 0.3);">
      <h1 class="fw-light">Album example</h1>
      <p class="lead card-text">
        {{-- This is a wider card with supporting text below as a natural lead-in to additional
        content. This content is a little bit longer. --}}
      </p>
      <p class="card-text">Last updated 3 mins ago</p>
      <p>
        <a href="#" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Picture</a>
        {{-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> --}}
      </p>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3 just">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="mb-3">
          <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>

        <div class="mb-3">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  {{-- @if ($posts->count())
<div class="card mb-3">

    @if ($posts[0]->image)
              <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
              @endif   

    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }} </a>
        {{ $posts[0]->created_at->diffForHumans() }} 
    </small>
    </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p> 
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    
    </div>
  </div>

  @else
    <p class="text-center fs-4">No Post Found.</p>    
@endif --}}