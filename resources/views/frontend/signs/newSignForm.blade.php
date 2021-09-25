<form method="POST" action="{{ url('validate-g-recaptcha') }}">
    @csrf
    <div class="modal-body px-5">
        <div class="form-floating">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your name"
                style="background-color:#cccccc; border: 0;" required>
            <label for="name">Username</label>
        </div>
        <div class="form-floating mt-3">
            <textarea class="form-control" placeholder="Please enter your message here..." id="body" name="body"
                style="height: 150px; background-color:#cccccc; border: 0;" required></textarea>
            <label for="body">Please enter your message here...</label>
        </div>
    </div>
    <div class="modal-footer justify-content-center mb-2">
        <div class="form-group">
            <input type="hidden" name="g-recaptcha-response" id="recaptcha">
        </div>

        <div class="col-md-5">
            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
        </div>
    </div>
</form>


<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {
            action: 'contact'
        }).then(function(token) {
            if (token) {
                document.getElementById('recaptcha').value = token;
            }
        });
    });
</script>

<style>
    .grecaptcha-badge {
        visibility: hidden !important;
    }
</style>
