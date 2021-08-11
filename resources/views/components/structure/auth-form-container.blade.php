@props(['text'])
<section class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <small>{{$text}}</small>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
