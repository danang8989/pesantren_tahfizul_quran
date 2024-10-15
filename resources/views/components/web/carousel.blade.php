<div class="untree_co-hero owl-carousel">
    @foreach ($carousel as $item)
        <div class="" style="background-image: url({{ asset('img_assets/carousel/'. $item->image) }}); height: 100vh">
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh"> 
                <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">{{ $item->title }}</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Daftar Sekarang</a></p>
            </div>
        </div> <!-- /.container -->
    @endforeach
</div> <!-- /.untree_co-hero -->
