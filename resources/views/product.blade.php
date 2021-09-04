@extends("main")

@section("import")
  <link rel="stylesheet" href="{{ asset("storage/css/product.css") }}">
@endsection

@section("content")

  <section class="search">
    <form action="{{ url()->current() }}" method="POST">
      @csrf
      <input type="text" name="search" id="" class="form-control" placeholder="Search by name">
      <button type="submit" class="btn btn-success">Search</button>

    </form>
  </section>


  <section class="product">
    @if (isset($search))
      <h2 style="">Search result for : {{ $search }}</h2>
    @endif
    <h6 style="margin-bottom: 1.2em; color: rgb(190, 190, 190); font-style: italic; font-size: 11px;">Displaying {{ sizeof($product) }} item(s)</h6>


    @if(sizeof($product) > 0)

      @foreach($product as $i)
        <a href="{{ url("/product/".$i->image) }}" class="product-card row g-0">
          <div class="product-image col-md-4">
            <img src="{{ asset("storage/picture/".$i->category."/".$i->ProductImage.".PNG") }}" class="img-fluid rounded-start" alt="Images">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $i->name }}</h5>
              <p class="card-text">{{ $i->description }}</p>
            </div>
          </div>
        </a>
        
      @endforeach

    @else
      <h1>Product Not Found</h1>
    @endif

  </section>


@endsection
