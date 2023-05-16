<form action="https://formsubmit.co/d8e3ed99a4b8fc6f2a621262a68575e4" method="POST">
	<!-- Make form function and add a recapcha-->
	<div class="input-container">
		<div class="form-left">
			<label for="name">Name</label>
			<input type="text" id="name" name="name" placeholder="John Doe" required>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" placeholder="example@email.com" required>
			<label for="subject">Subject</label>
			<input type="text" id="subject" name="_subject" placeholder="Reason for contact" required>
		</div>
		<div class="form-right">
			<label for="message">Message</label>
			<textarea name="message" id="message" placeholder="Type message here..." rows="5" required></textarea>
		</div>
	</div>
	<input type="submit" value="Send" class="btn" title="Submit Form">
	<input type="hidden" name="_next" value="https://ashthe.dev/thank-you">
</form>