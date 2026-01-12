<section class="book-appointment">
    <div class="container">
        <div class="appointment-form-holder">
            <div class="appointment-left flex">
                <span class="subtitle-section">
                    <div class="subtitle-icon-holder flex">
                        <span class="horizontal-line">
                            <span class="line-dot"></span>
                        </span>
                    </div>
                    <span class="subtitle-text">Schedule With Ease</span>
                </span>

                <h3 class="title-appointment">
                    Register <span class="imp-text">Appointment</span>
                </h3>

                <div class="happy-clients-holder">
                    HAPPY CLIENTS
                    <div class="happy-clients-demo">
                        <img src="./assets/images/reviewers.webp" alt="" width="170" height="72">
                    </div>
                </div>
            </div>

            <div class="appointment-right flex">
                <form action="./utils/appointment-mail.php" method="POST">

                    <span class="booking-xl-text">Hey, my name is</span>
                    <input type="text" name="cli_name" placeholder="Your Name*" required>

                    <span class="booking-xl-text">and I'm looking for</span>
                    <select name="services" required>
                        <option value="" disabled selected hidden>Type of Services *</option>
                        <option value="Frozen Shoulder">Frozen Shoulder</option>
                        <option value="Knee Replacement">Knee Replacement</option>
                        <option value="Sports Injury">Sports Injury</option>
                        <option value="Arthritis">Arthritis</option>
                        <option value="Paralysis">Paralysis</option>
                        <option value="Balance Training">Balance Training</option>
                        <option value="Sciatic Pain">Sciatic Pain</option>
                        <option value="Neck Physiotherapy">Neck Physiotherapy</option>
                        <option value="Elbow Pain Physiotherapy">Elbow Pain Physiotherapy</option>
                        <option value="Ankle Sprain">Ankle Sprain</option>
                        <option value="Trigger Point Relief">Trigger Point Relief</option>
                        <option value="Ortho Physiotherapy">Ortho Physiotherapy</option>
                    </select>

                    <span class="booking-xl-text">connect with me at</span>
                    <input type="email" name="cli_email" placeholder="E-Mail Address*" required>

                    <span class="booking-xl-text">my mobile number is</span>
                    <input type="tel" name="cli_mobile" placeholder="Mobile Number*" required>

                    <span class="booking-xl-text">My Preferred Date is</span>
                    <input type="date" name="date" required>

                    <span class="booking-xl-text">& Location Is</span>
                    <select name="location" required>
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

                    <span class="booking-xl-text">to begin healing!</span>

                    <button type="submit" class="slide-main-button">
                        <p class="text">Schedule Your Visit</p>
                        <span class="hero-slide-button-icon-holder flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 11">
                                <path d="M15.1,4.9v1.3h-0.6c-1.1,0-2.1,0.5-2.9,1.2c-0.8,0.8-1.2,1.8-1.2,2.9v0.6H9.1v-0.6c0-1.4,0.6-2.7,1.6-3.7H0.5V4.9h10.6C10,4.8,9.8,4.7,9.7,4.5c-1-1-1.6-2.3-1.6-3.7V0.2h1.3v0.6c0,1.1,0.5,2.1,1.2,2.9c0.8,0.8,1.8,1.2,2.9,1.2z"/>
                            </svg>
                        </span>
                    </button>

                </form>
            </div>
        </div>
    </div>
</section>
