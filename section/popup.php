<section class="popup-section">
    <div class="container popup-holder flex">
        <div class="popup-wrapper flex">
            <div class="popup-left"></div>

            <div class="popup-right flex">
                <h2>Strengthen <span class="imp-text brown">With </span> Physiotherapy</h2>

                <p>
                    "Whether it’s an injury, chronic pain, or post-surgery recovery, our physiotherapy sessions help you
                    regain strength, mobility, and a healthier lifestyle."
                </p>

                <form action="./utils/popup-mail.php" method="POST" >

                    <input type="tel" name="mobile" placeholder="Mobile Number*" class="input-footer"
                        pattern="[0-9]{10,15}" required>

                    <input type="email" name="email" placeholder="E-Mail Address*" class="input-footer" required>

                    <select name="location" class="input-footer" required>
                        <option value="" disabled selected hidden>Select Location *</option>
                        <option value="Hadapsar">Hadapsar</option>
                        <option value="Mandhwa">Mandhwa</option>
                        <option value="Manjri BK">Manjri BK</option>
                        <option value="Gurudatta Nagar">Gurudatta Nagar</option>
                        <option value="Bhekrai Nagar">Bhekrai Nagar</option>
                        <option value="Autadwadi Handewadi">Autadwadi Handewadi</option>
                        <option value="Fatima Nagar">Fatima Nagar</option>
                        <option value="Wanwadi">Wanwadi</option>
                    </select>

                    <input type="submit" value="Submit" class="submit-btn">
                </form>

                <div class="close-icon-holder">
                    <img src="./assets/images/close-icon.svg" alt="close">
                </div>
            </div>
        </div>
    </div>
</section>