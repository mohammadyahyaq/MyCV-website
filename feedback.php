	<?php
		include "header.php";
	?>
	<div class = "Heading">
		<h1> Feedback </h1>
		<hr/>
    </div>
		<div class="feedbackPage">
	<p><span>*</span> indicates required information</p>

	<form>
		<!--#######################################(Contact Information fieldset)#######################################-->
		<fieldset id="contactFields">
		<legend>Contact Information</legend>
		<label class="blocklabel">
			First Name<span>*</span>
			<input type="text" id="fname"  name="fname" />
		</label>

		<br/> <!-- NEW LINE -->
		<label class="blocklabel">
			Last Name<span>*</span>
			<input type="text" id="lname"  name="lname" />
		</label>

		<br/> <!-- NEW LINE -->
		<label class="blocklabel">
			Email<span>*</span>
			<input type="text" id="email" name='email'/>
		</label>

		<br/> <!-- NEW LINE -->
		<label class="blocklabel">
			Phone<span>*</span>
			<input type="text" id="phone" name='phone' maxlength="10" />
		</label>

		<br/> <!-- NEW LINE -->
		<label class="blocklabel">
			Country<span>*</span>
			<input type="text" id="country" name="country" value="Saudi Arabia" />
		</label>

		<br/> <!-- NEW LINE -->
		<label class="blocklabel">
			City
			<input type="text" id="city" name="city" />
		</label>
		</fieldset>
		<!--#######################################(END of Contact Information)#######################################-->
		<!--#######################################(Information about Website fieldset)#######################################-->
		<fieldset id="InfoFields">
			<legend id="legendInfo">Information about Website</legend>
			<label id="Info">
			How did you hear about MyCv website?
			<br/> <!-- NEW LINE -->
			<select name="infoSource" id="infoSource">
				<option value="talk">Word of Mouth</option>
				<option value="tweet">Twitter</option>
				<option value="post">Instagram</option>
				< value="internet">The Internet</option>
				<option value="schools">College/High School</option>
			</select>
			</label>
			<br/> <!-- NEW LINE -->
			<br/> <!-- NEW LINE -->
			<fieldset id="websiteRate">
				<legend>The website easy to use?</legend>
					<label id="prevYes">
						Yes
						<input type="radio" id="prevYes" name="prevYes" value="yes"/>
					</label>
					<label id="prevNo">
						No
						<input type="radio" id="prevNO" name="prevNO" value="no"/>
					</label>
			</fieldset>
			<fieldset id="easyWebRate">
				<legend>Rate how easy is it</legend>
					<label class="prevexp">
						1
						<input type="radio" id="radioEasy1" name="radioEasy" value="one"/>
					</label>
					<label class="prevExp">
						2
						<input type="radio" id="radioEasy2" name="radioEasy" value="two"/>
					</label>
					<label class="prevExp">
						3
						<input type="radio" id="radioEasy3" name="radioEasy" value="three"/>
					</label>
					<label class="prevExp">
						4
						<input type="radio" id="radioEasy4" name="radioEasy" value="four"/>
					</label>
					<label class="prevExp">
						5
						<input type="radio" id="radioEasy5" name="radioEasy" value="five"/>
					</label>
			</fieldset>
			<fieldset id="designWebRate">
				<legend>Rate the design in the website</legend>
				<label class="prevexp">
						1
						<input type="radio" id="radioEasy1" name="radioEasy" value="one"/>
					</label>
					<label class="prevExp">
						2
						<input type="radio" id="radioEasy2" name="radioEasy" value="two"/>
					</label>
					<label class="prevExp">
						3
						<input type="radio" id="radioEasy3" name="radioEasy" value="three"/>
					</label>
					<label class="prevExp">
						4
						<input type="radio" id="radioEasy4" name="radioEasy" value="four"/>
					</label>
					<label class="prevExp">
						5
						<input type="radio" id="radioEasy5" name="radioEasy" value="five"/>
					</label>
			</fieldset>
			<fieldset id="recommend">
						<label>
						<input type="checkbox" id="recommendweb" name="recommendweb"/>
						I will recommend my friend & colleagues to visit this website
						</label>
			</fieldset>
			<fieldset id="problem">
						<label>
						<input type="checkbox" id="browse" name="browse"/>
						I haven't face any problem in browsing this website
						</label>
			</fieldset>
			<fieldset id="commentPart">
					<legend>Suggestion</legend>
					<label class="blocklabel">
						Subject<span>*</span>
						<input type="text" id="subject" name="subject"/>
					</label>
					<br/> <!--New line-->
					<textarea id="suggestion" name="suggestion" rows="7" cols="60"></textarea>
				</fieldset>
				<button type="submit">SUBMIT</button>
				<button type="reset">RESET</button>
		</fieldset>
		<!--#######################################(END of Information about Website)#######################################-->
	</form>
	</div>
	<?php
		include "footer.php";
	?>
