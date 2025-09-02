{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/wruth-logo.png') }}" alt="" class="mb-0">
            </a>
           
            
        </div>
</nav> --}}



<nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="{{ asset('images/wruth-logo.png') }}" alt="" class="mb-0"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- Profile section -->
        <div class="navbar-profile">
          <img src="{{ asset('images/profile-icon.svg') }}" alt="Sofia Emilia" class="profile-avatar mb-0" />
          <div class="profile-info">
            <p class="profile-name">Sofia Emilia</p>
            <p class="profile-designation">Admin</p>
          </div>
        </div>
      </div>
    </div>
  </nav>