<!-- ======= Team Section ======= -->
<section id="Organizations" class="Organizations">
  <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Organizations</h2>
          <p>Check Our Organizations</p>
      </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach ($organisasi as $item)
              
          <div class="col">
            <div class="card h-100">
              <img src="{{ $item->path }}" class="card-img-top" alt="..." style="height: 150px ">
              <div class="card-body">
                <h5 class="card-title text-dark">{{ $item->nama_organisasi }}</h5>
                <p class="card-text text-dark">{{ $item->alamat_organisasi }}</p>
              </div>
              <div class="card-footer d-flex justify-content-center">
                <button class="btn btn-warning">Explore</button>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
      
</section><!-- End Team Section -->