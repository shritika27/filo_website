	<form id="contact" method="post" class="get_in_touch_form">
		<div class="contact-form">                       
					<div class="section-field iq-mt-10">
						<input id="contact_name" type="text" placeholder="Name*" name="name">
						<span class="error">This field is required</span>
					</div>
					<div class="section-field iq-mt-10">
						<input id="contact_email" type="email" placeholder="Email*" name="email">
						<span class="error">A valid email address is required</span>
					</div>
					<div class="section-field iq-mt-10">
						<input id="contact_phone" type="text" placeholder="Phone*" name="phone">
						<span class="error">A valid phone is required</span>
					</div>
				
					<div class="section-field textarea iq-mt-10">
						<textarea id="contact_message" class="input-message" placeholder="Comment*" rows="5" name="message"></textarea>
						<span class="error">This field is required</span>
					</div>
				<p role="alert"></p>
			
		</div>
	</form>
	<button class="btn btn-default get_in_touch" onClick="callingAjax();"> Send</button>
