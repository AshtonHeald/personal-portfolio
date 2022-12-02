<form action="https://formsubmit.co/d8e3ed99a4b8fc6f2a621262a68575e4" method="POST">
	<!-- Make form function and add a recapcha-->
	<div class="text-small input-container">
		<input type="text" id="name" name="name" required>
		<label for="name">Name</label>
	</div>
	<div class="text-small input-container">
		<input type="email" id="email" name="email" required>
		<label for="email">Email</label>
	</div>
	<div class="text-small input-container">
		<input type="text" id="subject" name="_subject" required>
		<label for="subject">Subject</label>
	</div>
	<div class="text-small input-container">
		<textarea name="message" id="message" rows="5" required></textarea>
		<label for="message">Message</label>
	</div>
	<div class="text-small button-container">
		<input class="btn" type="submit" value="Send" title="Submit Form">
		<input type="hidden" name="_next" value="https://ashthe.dev/thank-you">
	</div>
</form>