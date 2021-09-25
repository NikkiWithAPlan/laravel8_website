<form action="">
    @csrf
    <div class="modal-body px-5">
        <div class="form-floating">
            <input type="text" class="form-control" id="username" placeholder="Your name"
                style="background-color:#cccccc; border: 0;">
            <label for="username">Username</label>
        </div>
        <div class="form-floating mt-3">
            <textarea class="form-control" placeholder="Please enter your message here..." id="message"
                style="height: 150px; background-color:#cccccc; border: 0;"></textarea>
            <label for="message">Please enter your message here...</label>
        </div>
    </div>
    <div class="modal-footer justify-content-center mb-2">
        <div class="col-md-5">
			<button type="submit" name="submit" class="btn btn-primary">Send Message</button>
		</div>
    </div>
</form>
