<?php
    $title = "Book Now - Juno Tech Laboratory";
    include 'header.php';
?>

<main>
    <section class="booking-form">
        <div class="form-container">
            <h2>Book Your Appointment</h2>
            <p>Please fill out the form below to schedule your appointment. All fields marked with * are required.</p>
            <form id="bookingForm" action="submit_booking.php" method="POST">
                <div class="form-group">
                    <label for="name">NAME *</label>
                    <input type="text" id="name" name="name" placeholder="Enter name here" required>
                </div>
                <div class="form-group">
                    <label for="address">ADDRESS *</label>
                    <input type="text" id="address" name="address" placeholder="Enter address here" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="city">CITY *</label>
                        <input type="text" id="city" name="city" placeholder="Enter city here" required>
                    </div>
                    <div class="form-group">
                        <label for="state">STATE</label>
                        <select id="state" name="state">
                            <option value="">Please select state</option>
                            <option value="CA">California</option>
                            <option value="NY">New York</option>
                            <option value="TX">Texas</option>
                            <option value="FL">Florida</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zip">ZIP CODE *</label>
                        <input type="text" id="zip" name="zip" placeholder="Enter zip code here" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>HOW DO YOU PREFER TO BE CONTACTED? *</label>
                    <div class="contact-options">
                        <label><input type="radio" name="contact" value="phone" required> Phone</label>
                        <label><input type="radio" name="contact" value="email"> Email</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL ADDRESS *</label>
                    <input type="email" id="email" name="email" placeholder="example@domain.com" required>
                </div>
                <div class="form-group">
                    <label for="phone">PHONE NUMBER *</label>
                    <input type="tel" id="phone" name="phone" placeholder="+1 (number)" required>
                </div>
                <div class="form-group">
                    <label for="call-time">BEST TIME TO CALL *</label>
                    <select id="call-time" name="call-time" required>
                        <option value="">- Please select -</option>
                        <option value="morning">Morning</option>
                        <option value="afternoon">Afternoon</option>
                        <option value="evening">Evening</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">PREFERRED DATE</label>
                    <input type="date" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="time">PREFERRED TIME</label>
                    <input type="time" id="time" name="time">
                </div>
                <div class="form-group">
                    <label for="comment">COMMENT</label>
                    <textarea id="comment" name="comment" placeholder="Enter comment here"></textarea>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" id="sms-agreement" name="sms-agreement" required>
                        I agree to receive SMS messages from Juno Tech Laboratory at the phone number provided above.
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
