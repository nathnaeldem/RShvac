<template>
  <div class="contact-page">
    <section class="page-hero">
      <div class="page-hero__bg">
        <img src="/images/hero-hvac.jpg" alt="Contact Red Sea HVAC" class="page-hero__bg-img" />
        <div class="page-hero__overlay"></div>
      </div>
      <div class="container page-hero__content">
        <span class="hero__badge animate-fade-down">
          <span class="hero__badge-dot"></span>
          Contact Us
        </span>
        <h1 class="page-hero__title animate-fade-up delay-1">Get <span class="text-accent">Comfortable</span> With Us</h1>
        <p class="page-hero__subtitle animate-fade-up delay-2">Our team of dedicated experts is here to serve you with a commitment to unmatched comfort and customer satisfaction.</p>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="contact-wrapper">
          <!-- Info Column -->
          <div class="contact-info">
            <h2 class="contact-info__title">Contact Red Sea HVAC Service Now</h2>
            <p class="contact-info__text">Whether you need heating, cooling, or indoor air quality solutions, we've got you covered. From installations and repairs to maintenance and upgrades, our skilled technicians are ready to tailor our services to your specific needs.</p>
            <p class="contact-info__text"><strong>Don't wait—get in touch with us now!</strong></p>

            <div class="contact-methods">
              <div class="contact-method">
                <div class="contact-method__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div>
                <div>
                  <h4>Call Us</h4>
                  <a href="tel:5712245831">571-224-5831</a>
                </div>
              </div>
              <div class="contact-method">
                <div class="contact-method__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                <div>
                  <h4>Location</h4>
                  <p>Red Sea Heating and Air Conditioning<br>Serving Northern Virginia & DMV</p>
                </div>
              </div>
              <div class="contact-method">
                <div class="contact-method__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div>
                <div>
                  <h4>24/7 Emergency Service</h4>
                  <p>We offer 24/7 emergency service to all of our customers.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Column -->
          <div class="contact-form-wrapper">
            <h3 class="form-title">Send Us a Message</h3>
            <form class="contact-form" @submit.prevent="submitContact">
              <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-input" v-model="form.name" required placeholder="Your full name" />
              </div>
              
              <div class="form-group">
                <label class="form-label">Phone</label>
                <input type="tel" class="form-input" v-model="form.phone" required placeholder="Your phone number" />
              </div>
              
              <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-input" v-model="form.email" required placeholder="Your email address" />
              </div>
              
              <div class="form-group">
                <label class="form-label">Service Needed</label>
                <select class="form-input" v-model="form.service" required style="appearance: auto;">
                  <option value="" disabled>Select a service</option>
                  <option value="residential">Residential HVAC</option>
                  <option value="commercial">Commercial HVAC</option>
                  <option value="air-quality">Indoor Air Quality</option>
                  <option value="other">Other / Not Sure</option>
                </select>
              </div>

              <div class="form-group">
                <label class="form-label">Message</label>
                <textarea class="form-input" v-model="form.message" rows="5" required placeholder="How can we help you?"></textarea>
              </div>

              <button type="submit" class="btn btn--primary btn--lg" style="width: 100%;">
                Submit Request
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'ContactPage',
  data() {
    return {
      form: {
        name: '',
        phone: '',
        email: '',
        service: '',
        message: ''
      }
    }
  },
  methods: {
    async submitContact() {
      try {
        const response = await fetch('http://localhost:8000/api/quote.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(this.form)
        });
        const result = await response.json();
        if (result.success) {
          alert('Thank you! Your message has been received. We will contact you shortly.');
          this.form = { name: '', phone: '', email: '', service: '', message: '' };
        } else {
          alert('Error: ' + result.message);
        }
      } catch (error) {
        console.error('Error submitting form:', error);
        alert('There was a network error submitting your form.');
      }
    }
  }
}
</script>

<style scoped>
.page-hero {
  position: relative;
  min-height: 40vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
}

.page-hero__bg {
  position: absolute;
  inset: 0;
}

.page-hero__bg-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.page-hero__overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(10, 15, 26, 0.9) 0%, rgba(27, 42, 74, 0.8) 100%);
}

.page-hero__content {
  position: relative;
  z-index: 2;
  padding: calc(var(--nav-height) + var(--space-3xl)) 0 var(--space-3xl);
}

.hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  padding: 8px 20px;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: var(--radius-full);
  color: rgba(255, 255, 255, 0.9);
  font-size: var(--fs-small);
  font-weight: 500;
  margin-bottom: var(--space-xl);
  backdrop-filter: blur(10px);
}

.hero__badge-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #22c55e;
  animation: pulse 2s ease-in-out infinite;
}

.page-hero__title {
  font-size: var(--fs-h1);
  font-weight: 900;
  color: var(--rs-white);
  margin-bottom: var(--space-lg);
}

.text-accent {
  background: linear-gradient(135deg, #1b79bf, #2a8fd4);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.page-hero__subtitle {
  font-size: var(--fs-body-lg);
  color: rgba(255, 255, 255, 0.7);
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.8;
}

.contact-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
}

.contact-info__title {
  font-size: var(--fs-h2);
  color: var(--rs-dark);
  margin-bottom: var(--space-lg);
}

.contact-info__text {
  color: var(--rs-gray-600);
  line-height: 1.8;
  margin-bottom: var(--space-md);
}

.contact-methods {
  margin-top: var(--space-2xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}

.contact-method {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  background: var(--rs-gray-50);
  padding: var(--space-lg);
  border-radius: var(--radius-lg);
  border: 1px solid var(--rs-gray-200);
}

.contact-method__icon {
  font-size: 2rem;
  background: var(--rs-white);
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  box-shadow: var(--shadow-sm);
}

.contact-method h4 {
  font-size: var(--fs-body);
  color: var(--rs-dark);
  margin-bottom: 4px;
}

.contact-method a, .contact-method p {
  color: var(--rs-gray-600);
  font-size: var(--fs-small);
  line-height: 1.6;
}

.contact-method a {
  font-weight: 600;
  color: var(--rs-blue);
}

.contact-form-wrapper {
  background: var(--rs-white);
  padding: var(--space-3xl);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  border-top: 4px solid var(--rs-red);
}

.form-title {
  font-size: var(--fs-h3);
  color: var(--rs-dark);
  margin-bottom: var(--space-xl);
  text-align: center;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.form-label {
  font-size: var(--fs-small);
  font-weight: 600;
  color: var(--rs-gray-700);
}

.form-input {
  padding: 12px 16px;
  border: 1px solid var(--rs-gray-300);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--fs-body);
  outline: none;
  transition: all var(--transition-base);
}

.form-input:focus {
  border-color: var(--rs-blue);
  box-shadow: 0 0 0 3px rgba(27, 121, 191, 0.1);
}

@media (max-width: 1024px) {
  .contact-wrapper {
    grid-template-columns: 1fr;
  }
}
</style>
