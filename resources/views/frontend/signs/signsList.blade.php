<ul class="list-group list-group-flush mt-1">
    @foreach ($signatures as $signature)
        <li class="list-group-item p-4" style="background:#cacaca;">
            <div class="row justify-content-center">
                <div class="col-md-8 d-flex justify-content-center">
                    <h5 style="color: #3d3d3d;">{{ $signature->name }}</h5>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <small style="color: #3d3d3d;">{{ $signature->created_at->diffForHumans() }}</small>
                </div>
            </div>
            <p class="mx-4 my-2" style="color: #414141;">{{ $signature->body }}</p>
        </li>
        <i class="bi bi-lightning d-flex justify-content-center my-3" style="font-size: 1.5rem;"></i>
    @endforeach
</ul>
