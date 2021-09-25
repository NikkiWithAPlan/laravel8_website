<!-- Button trigger modal -->
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="tooltip" data-bs-placement="left"
        title="Add new - Új üzenet">
        <span data-bs-toggle="modal" data-bs-target="#signatureModal">
            <i class="bi bi-plus-lg"></i>
        </span>
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="signatureModal" tabindex="-1" aria-labelledby="signatureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color:#b4b4b4;">
            <div class="modal-header">
                <h4 class="modal-title mx-auto" id="signatureModalLabel">
                    <i class="bi bi-lightning m-2" style="font-size: 1.5rem;"></i>
                    Sign the Guest Book
                    <i class="bi bi-lightning m-2" style="font-size: 1.5rem;"></i>
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @include('frontend.signs.newSignForm')
        </div>
    </div>
</div>
