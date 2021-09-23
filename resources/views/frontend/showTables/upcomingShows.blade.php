<div class="card card-bg shadow-sm col-md-8" style="margin:1rem; padding:0.5rem;">
    <div class="card-title">
        <h2 class="text-primary" style="text-align: center; margin-top:1rem; font-size: 32px;">
            UPCOMING SHOWS
        </h2>
    </div>
    <div class="card-body">
        @foreach ($upcomings as $upcoming)
            <!-- Button trigger modal -->
            <div class="d-grid gap-10 col-6 mx-auto" style="margin-bottom:1rem;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#upcomingModal-{{ $upcoming->id }}">
                    {{ $upcoming->title }}
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="upcomingModal-{{ $upcoming->id }}" tabindex="-1"
                aria-labelledby="upcomingModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title mx-auto" id="upcomingModalLabel">{{ $upcoming->title }}
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @include('frontend.showTables.upcomingTable')
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>