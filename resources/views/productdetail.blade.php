@extends("main")

@section("import")
  <link rel="stylesheet" href="{{ asset("storage/css/productdetail.css") }}">
@endsection

@section("content")

  <section class="product">

    <div class="product-container">
      <div class="product-image">
        <img src="{{ github_fetch("/storage/picture/".$product->category."/".$product->image.".PNG") }}" class="img-fluid rounded-start" alt="Images">
      </div>

      <div class="line-break">
        
      </div>
      <div class="product-description">
        <h5 class="title">{{ $product->name }}</h5>
        <p class="description">{{ $product->description }}</p>
      </div>
      <div class="product-action">
        <a href="{{ route("productpage") }}">
          <button class="btn btn-primary">Go Back</button>
        </a>
      </div>
    </div>

  </section>


@endsection
