	<!doctype html>

	<html>
		<footer>
 			<div id="footer">
	 			<div id="kontakt">
		 			<h2>Contact and address:</h2>
		 			<p>
		 			JU Book club</br>
		 			Slottsbron 1</br>
		 			12 345 JÖNKÖPING</p>

		 			<p>contact@jubookclub.se
		 			</p>
	 			</div>
 			<div class="form">
					<form method="GET">
						<div class="fadeout">

							<p>Name: *</p>
							<input id="firstName" class="bredd placeholder firstname" type="text" placeholder="Namn" name="firstname" required>
							<br>
                            <div id="firstNameValidationError" style="display:none">Only letters allowed</div>

							<p>E-mail: *</p>
							<input id="email" class="bredd placeholder email" type="email" placeholder="exempel@mail.com" name="e-mail" required>
							<br>
                            <div id="emailValidationError" style="display:none">Write a working email address</div>

							<p>Message: *</p>
							<textarea id="password" class="textruta password" type="text" placeholder="Skriv meddelande" name="password" required></textarea>
							<br>
                            <div id="pwdValidationError" style="display:none">The message should hold at least 6 letters</div>

						</div>
						<input id="signUp" onClick="logInCheck()" class="send" type="submit" value="Skicka meddelande!">
					</form>
				
				</div>


 			</div>



 			<div id="copy">
 				<p> Copyright 2015</p>
 			</div>
 		</footer>
	</div>
	<script type="text/javascript" src="main.js"></script>

</body>
</html>