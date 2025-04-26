<?php
include_once "header.php";
?>
 <!-- Contact Us Section -->
    <section class="contact-us-section py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <p class="section-subheading">We’d love to hear from you! Feel free to get in touch with us.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-md-6">
                    <div class="contact-info">
                        <h4 class="info-heading mb-4">Get in Touch</h4>
                        <p class="info-item"><i class="fas fa-map-marker-alt"></i> Virtual University of Pakistan</p>
                        <p class="info-item"><i class="fas fa-phone"></i> +92 300 7398981</p>
                        <p class="info-item"><i class="fas fa-envelope"></i> support@careersub.com</p>
                        <p class="info-item"><i class="fas fa-clock"></i> Mon - Fri: 9 AM - 6 PM</p>
                        <div class="social-icons mt-4">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-md-6">
                    <form action="#" method="POST" class="contact-form p-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" rows="5" class="form-control" placeholder="Write your message here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
include_once "footer.php";
?>