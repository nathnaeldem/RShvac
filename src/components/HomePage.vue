<template>
  <div class="home">
    <!-- ===== HERO SECTION ===== -->
    <section class="hero">
      <div class="hero__bg">
        <img src="/images/hero-hvac.jpg" alt="Red Sea HVAC Technician" class="hero__bg-img" />
        <div class="hero__bg-overlay"></div>
        <div class="hero__bg-gradient"></div>
      </div>

      <!-- Floating particles -->
      <div class="hero__particles">
        <div class="hero__particle" v-for="n in 6" :key="n" :style="particleStyle(n)"></div>
      </div>

      <div class="container hero__content">
        <div class="hero__text">
          <div class="hero__badge animate-fade-down">
            <span class="hero__badge-dot"></span>
            Serving Northern Virginia & DMV Since 2009
          </div>
          <h1 class="hero__title animate-fade-up delay-1">
            Your Comfort Is Our
            <span class="hero__title-accent">Top Priority</span>
          </h1>
          <p class="hero__subtitle animate-fade-up delay-2">
            Expert heating, cooling, and indoor air quality solutions for homes and businesses. 
            Fast, reliable service with a focus on energy efficiency and customer care.
          </p>
          <div class="hero__actions animate-fade-up delay-3">
            <button class="btn btn--primary btn--lg" @click="$emit('navigate', 'contact')">
              Request Free Quote
              <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </button>
            <button class="btn btn--outline btn--lg" @click="$emit('navigate', 'services')">
              Our Services
            </button>
          </div>

          <!-- Trust signals -->
          <div class="hero__trust animate-fade-up delay-4">
            <div class="hero__trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5" stroke-linecap="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>15+ Years Experience</span>
            </div>
            <div class="hero__trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5" stroke-linecap="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>Licensed & Insured</span>
            </div>
            <div class="hero__trust-item">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5" stroke-linecap="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>24/7 Emergency</span>
            </div>
          </div>
        </div>

        <!-- Stats Card -->
        <div class="hero__stats glass animate-scale-in delay-3">
          <div class="hero__stat" v-for="stat in heroStats" :key="stat.label">
            <span class="hero__stat-value">{{ stat.value }}</span>
            <span class="hero__stat-label">{{ stat.label }}</span>
          </div>
        </div>
      </div>

      <!-- Scroll indicator -->
      <div class="hero__scroll">
        <div class="hero__scroll-line"></div>
      </div>
    </section>

    <!-- ===== SERVICES OVERVIEW ===== -->
    <section class="services-overview section-padding">
      <div class="container">
        <div class="section-header">
          <span class="section-badge">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
            What We Offer
          </span>
          <h2 class="section-title">Comprehensive HVAC Solutions</h2>
          <p class="section-subtitle">From installation and repair to maintenance and air quality — we've got every aspect of your comfort covered.</p>
        </div>

        <div class="services-grid">
          <div
            v-for="(service, i) in mainServices"
            :key="service.title"
            class="service-card"
            :style="{ animationDelay: (i * 0.1) + 's' }"
            @click="$emit('navigate', service.page)"
          >
            <div class="service-card__image">
              <img :src="service.image" :alt="service.title" />
              <div class="service-card__image-overlay"></div>
              <span class="service-card__tag">{{ service.tag }}</span>
            </div>
            <div class="service-card__body">
              <h3 class="service-card__title">{{ service.title }}</h3>
              <p class="service-card__text">{{ service.desc }}</p>
              <span class="service-card__link">
                Learn More
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="why-us">
      <div class="why-us__bg"></div>
      <div class="container section-padding">
        <div class="section-header">
          <span class="section-badge section-badge--red">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Why Choose Us
          </span>
          <h2 class="section-title">Trusted by Northern Virginia<br>Homes & Businesses</h2>
          <p class="section-subtitle">With over 15 years of dedicated service, we've earned the trust of thousands of families and businesses in the DMV area.</p>
        </div>

        <div class="why-us__grid">
          <div v-for="(item, i) in whyUsItems" :key="item.title" class="why-us__card" :style="{ animationDelay: (i * 0.1) + 's' }">
            <div class="why-us__card-number">{{ String(i + 1).padStart(2, '0') }}</div>
            <div class="why-us__card-icon" :class="'why-us__card-icon--' + item.color">
              <span v-html="item.icon"></span>
            </div>
            <h3 class="why-us__card-title">{{ item.title }}</h3>
            <p class="why-us__card-text">{{ item.desc }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="cta-banner">
      <div class="cta-banner__bg">
        <div class="cta-banner__orb cta-banner__orb--1"></div>
        <div class="cta-banner__orb cta-banner__orb--2"></div>
      </div>
      <div class="container cta-banner__content">
        <div class="cta-banner__text">
          <h2 class="cta-banner__title">Ready for a Comfort Upgrade?</h2>
          <p class="cta-banner__subtitle">Get a free consultation and discover the perfect HVAC solution for your space. Available 24/7 for emergencies.</p>
        </div>
        <div class="cta-banner__actions">
          <button class="btn btn--primary btn--lg" @click="$emit('navigate', 'contact')">
            Schedule Service
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </button>
          <a href="tel:5712245831" class="btn btn--outline btn--lg">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
            </svg>
            Call (571) 224-5831
          </a>
        </div>
      </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="testimonials section-padding" style="background: var(--rs-gray-50);">
      <div class="container">
        <div class="section-header">
          <span class="section-badge">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
            Client Reviews
          </span>
          <h2 class="section-title">What Our Customers Say</h2>
        </div>
        <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
          <div v-for="(review, index) in testimonials" :key="index" class="testimonial-card" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid var(--rs-gray-200);">
            <div style="display: flex; color: #fbbf24; margin-bottom: 1rem;">
              <svg v-for="star in 5" :key="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <p style="color: var(--rs-gray-600); font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem; font-style: italic;">"{{ review.text }}"</p>
            <div style="font-weight: 700; color: var(--rs-dark);">{{ review.name }}</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== QUICK QUOTE FORM ===== -->
    <section class="quick-quote section-padding">
      <div class="container">
        <div class="quick-quote__wrapper">
          <div class="quick-quote__info">
            <span class="section-badge">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              Free Estimate
            </span>
            <h2 class="section-title" style="-webkit-text-fill-color: unset; background: none; color: var(--rs-dark);">Request a Free Quote</h2>
            <p class="section-subtitle" style="margin:0; text-align:left;">Fill out the form and our team will get back to you within 24 hours with a personalized quote.</p>

            <div class="quick-quote__features">
              <div class="quick-quote__feature" v-for="feat in quoteFeatures" :key="feat">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--rs-blue)" stroke-width="2.5" stroke-linecap="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <span>{{ feat }}</span>
              </div>
            </div>
          </div>

          <form class="quick-quote__form" @submit.prevent="submitQuote">
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-input" placeholder="John Smith" v-model="quoteForm.name" required />
              </div>
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-input" placeholder="(571) 000-0000" v-model="quoteForm.phone" required />
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-input" placeholder="john@example.com" v-model="quoteForm.email" required />
            </div>
            <div class="form-group">
              <label class="form-label">Service Needed</label>
              <select class="form-input form-select" v-model="quoteForm.service" required>
                <option value="" disabled>Select a service</option>
                <option value="ac-repair">AC Repair</option>
                <option value="ac-install">AC Installation</option>
                <option value="heating-repair">Heating Repair</option>
                <option value="heating-install">Heating Installation</option>
                <option value="maintenance">Maintenance & Tune-Up</option>
                <option value="air-quality">Indoor Air Quality</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Message (Optional)</label>
              <textarea class="form-input form-textarea" placeholder="Tell us about your needs..." v-model="quoteForm.message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn--primary btn--lg" style="width:100%">
              Submit Quote Request
              <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'HomePage',
  emits: ['navigate'],
  data() {
    return {
      heroStats: [
        { value: '15+', label: 'Years Experience' },
        { value: '200+', label: 'Happy Customers' },
        { value: '24/7', label: 'Emergency Service' },
        { value: '100%', label: 'Satisfaction' }
      ],
      mainServices: [
        {
          title: 'Residential HVAC',
          tag: 'Homes',
          page: 'residential',
          image: '/images/residential-service.jpg',
          desc: 'Expert heating and cooling solutions tailored to your home\'s needs. Installation, repairs, and maintenance for year-round comfort.'
        },
        {
          title: 'Commercial HVAC',
          tag: 'Business',
          page: 'commercial',
          image: '/images/commercial-service.jpg',
          desc: 'Custom HVAC solutions for offices, retail, and commercial spaces. Keep your business productive with reliable climate control.'
        },
        {
          title: 'Indoor Air Quality',
          tag: 'Health',
          page: 'air-quality',
          image: '/images/air-quality.jpg',
          desc: 'Breathe cleaner, healthier air with our purification, humidity control, and ventilation solutions for homes and businesses.'
        }
      ],
      whyUsItems: [
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>', title: 'Professional Standards', desc: 'All team members are certified professionals who go through rigorous background checks for your safety and peace of mind.', color: 'blue' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>', title: 'Satisfaction Guaranteed', desc: 'We guarantee you\'ll be happy with our work. Whether it\'s a major repair or a complete system replacement, we\'ve got you covered.', color: 'red' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>', title: 'Every Job is Personal', desc: 'As a trusted family-owned business, we treat every job with personal care. Expect exceptional service every time.', color: 'blue' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>', title: 'Fast Response Time', desc: 'Using state-of-the-art equipment, we quickly diagnose issues and deliver long-lasting fixes to restore your comfort.', color: 'red' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>', title: 'Affordable Pricing', desc: 'We believe comfort should be accessible to everyone. Competitive pricing without compromising on quality.', color: 'blue' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>', title: 'Energy Efficient', desc: 'We prioritize solutions that optimize your system\'s efficiency, saving you money on utility bills all year round.', color: 'red' }
      ],
      quoteFeatures: [
        'No obligation, 100% free',
        'Response within 24 hours',
        'Transparent pricing',
        'Flexible scheduling'
      ],
      quoteForm: {
        name: '',
        phone: '',
        email: '',
        service: '',
        message: ''
      },
      testimonials: [
        {
          name: 'Achamyelesh Gebereegziabher',
          text: 'Excellent service from start to finish! The team was professional, friendly, and did a great job installing my new AC system. They worked efficiently, kept everything clean, and made sure everything was working perfectly. Highly recommend them!'
        },
        {
          name: 'Yohannese Hassen',
          text: 'Red Sea LLC is an extremely competent and professional service company. The technician identified and resolved all the issues. I am grateful for Red Sea\'s prompt response and turnaround time.'
        },
        {
          name: 'Mohammed Al-Junaibi',
          text: 'The air conditioning repair service was fantastic! They arrived promptly, diagnosed the issue quickly, and fixed it on the same day. My AC is working perfectly now. Highly recommend them for their reliability and efficiency!'
        }
      ]
    }
  },
  methods: {
    particleStyle(n) {
      const sizes = [4, 6, 3, 5, 4, 7]
      const positions = [
        { top: '20%', left: '10%' },
        { top: '60%', left: '85%' },
        { top: '30%', left: '70%' },
        { top: '75%', left: '20%' },
        { top: '15%', left: '50%' },
        { top: '50%', left: '40%' }
      ]
      const delays = [0, 2, 1, 3, 1.5, 0.5]
      return {
        width: sizes[n-1] + 'px',
        height: sizes[n-1] + 'px',
        ...positions[n-1],
        animationDelay: delays[n-1] + 's'
      }
    },
    async submitQuote() {
      try {
        const response = await fetch('http://localhost:8000/api/quote.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(this.quoteForm)
        });
        const result = await response.json();
        if (result.success) {
          alert('Thank you! Your quote request has been submitted. We\'ll get back to you within 24 hours.');
          this.quoteForm = { name: '', phone: '', email: '', service: '', message: '' };
        } else {
          alert('Error: ' + result.message);
        }
      } catch (error) {
        console.error('Error submitting quote:', error);
        alert('There was an error submitting your quote. Please try again later.');
      }
    }
  }
}
</script>

<style scoped>
/* ===== HERO ===== */
.hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}

.hero__bg-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero__bg-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(10, 15, 26, 0.92) 0%, rgba(13, 27, 42, 0.8) 40%, rgba(27, 42, 74, 0.7) 100%);
}

.hero__bg-gradient {
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 20% 80%, rgba(27, 121, 191, 0.2) 0%, transparent 60%),
              radial-gradient(ellipse at 80% 20%, rgba(239, 41, 32, 0.1) 0%, transparent 60%);
}

.hero__particles {
  position: absolute;
  inset: 0;
  z-index: 1;
  pointer-events: none;
}

.hero__particle {
  position: absolute;
  border-radius: 50%;
  background: rgba(27, 121, 191, 0.4);
  animation: float 6s ease-in-out infinite;
}

.hero__content {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr auto;
  align-items: center;
  gap: var(--space-4xl);
  padding-top: calc(var(--nav-height) + var(--space-3xl));
  padding-bottom: var(--space-4xl);
}

.hero__text {
  max-width: 680px;
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

.hero__title {
  font-size: var(--fs-hero);
  font-weight: 900;
  color: var(--rs-white);
  line-height: 1.1;
  margin-bottom: var(--space-xl);
  letter-spacing: -1px;
}

.hero__title-accent {
  display: block;
  background: linear-gradient(135deg, #1b79bf 0%, #2a8fd4 40%, #ef2920 100%);
  background-size: 200% 200%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: gradientShift 6s ease-in-out infinite;
}

.hero__subtitle {
  font-size: var(--fs-body-lg);
  color: rgba(255, 255, 255, 0.7);
  line-height: 1.8;
  margin-bottom: var(--space-2xl);
  max-width: 560px;
}

.hero__actions {
  display: flex;
  gap: var(--space-md);
  margin-bottom: var(--space-2xl);
  flex-wrap: wrap;
}

.hero__trust {
  display: flex;
  gap: var(--space-xl);
  flex-wrap: wrap;
}

.hero__trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-small);
  color: rgba(255, 255, 255, 0.7);
  font-weight: 500;
}

/* Stats */
.hero__stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1px;
  padding: 0;
  overflow: hidden;
  min-width: 280px;
}

.hero__stat {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: var(--space-xl) var(--space-lg);
  text-align: center;
  border: 0.5px solid rgba(255,255,255,0.08);
}

.hero__stat-value {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 800;
  color: var(--rs-white);
  line-height: 1;
  margin-bottom: 4px;
}

.hero__stat-label {
  font-size: var(--fs-xs);
  color: rgba(255, 255, 255, 0.6);
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Scroll indicator */
.hero__scroll {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 2;
}

.hero__scroll-line {
  width: 2px;
  height: 40px;
  border-radius: 2px;
  background: linear-gradient(180deg, var(--rs-blue), transparent);
  animation: pulse 2s ease-in-out infinite;
}

/* ===== SERVICES OVERVIEW ===== */
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
}

.service-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  background: var(--rs-white);
  border: 1px solid var(--rs-gray-200);
  transition: all var(--transition-smooth);
  cursor: pointer;
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: var(--shadow-xl);
  border-color: rgba(27, 121, 191, 0.2);
}

.service-card__image {
  position: relative;
  height: 240px;
  overflow: hidden;
}

.service-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-smooth);
}

.service-card:hover .service-card__image img {
  transform: scale(1.05);
}

.service-card__image-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 50%, rgba(0,0,0,0.4) 100%);
}

.service-card__tag {
  position: absolute;
  top: var(--space-md);
  left: var(--space-md);
  padding: 4px 14px;
  background: var(--rs-blue);
  color: var(--rs-white);
  border-radius: var(--radius-full);
  font-size: var(--fs-xs);
  font-weight: 600;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

.service-card__body {
  padding: var(--space-xl);
}

.service-card__title {
  font-size: var(--fs-h4);
  font-weight: 700;
  margin-bottom: var(--space-sm);
  color: var(--rs-dark);
}

.service-card__text {
  color: var(--rs-gray-500);
  line-height: 1.7;
  margin-bottom: var(--space-md);
  font-size: var(--fs-body);
}

.service-card__link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--rs-blue);
  font-weight: 600;
  font-size: var(--fs-small);
  transition: gap var(--transition-base);
}

.service-card:hover .service-card__link {
  gap: var(--space-md);
}

/* ===== WHY US ===== */
.why-us {
  position: relative;
  background: var(--rs-gray-50);
}

.why-us__bg {
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 0% 0%, rgba(27, 121, 191, 0.04) 0%, transparent 50%),
              radial-gradient(ellipse at 100% 100%, rgba(239, 41, 32, 0.03) 0%, transparent 50%);
}

.why-us__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
  position: relative;
}

.why-us__card {
  background: var(--rs-white);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  border: 1px solid var(--rs-gray-200);
  transition: all var(--transition-smooth);
  position: relative;
  overflow: hidden;
}

.why-us__card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
  border-color: rgba(27, 121, 191, 0.15);
}

.why-us__card-number {
  position: absolute;
  top: var(--space-lg);
  right: var(--space-lg);
  font-family: var(--font-heading);
  font-size: 3rem;
  font-weight: 800;
  color: var(--rs-gray-100);
  line-height: 1;
}

.why-us__card-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-lg);
  font-size: 1.5rem;
}

.why-us__card-icon--blue {
  background: linear-gradient(135deg, rgba(27,121,191,0.12) 0%, rgba(27,121,191,0.04) 100%);
}

.why-us__card-icon--red {
  background: linear-gradient(135deg, rgba(239,41,32,0.12) 0%, rgba(239,41,32,0.04) 100%);
}

.why-us__card-title {
  font-size: var(--fs-h4);
  font-weight: 700;
  margin-bottom: var(--space-sm);
  color: var(--rs-dark);
}

.why-us__card-text {
  color: var(--rs-gray-500);
  line-height: 1.7;
  font-size: var(--fs-body);
}

/* ===== CTA BANNER ===== */
.cta-banner {
  position: relative;
  overflow: hidden;
  background: var(--rs-gradient-hero);
  padding: var(--space-4xl) 0;
}

.cta-banner__bg {
  position: absolute;
  inset: 0;
}

.cta-banner__orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
}

.cta-banner__orb--1 {
  width: 400px;
  height: 400px;
  background: rgba(27, 121, 191, 0.3);
  top: -100px;
  right: -100px;
}

.cta-banner__orb--2 {
  width: 300px;
  height: 300px;
  background: rgba(239, 41, 32, 0.2);
  bottom: -100px;
  left: -50px;
}

.cta-banner__content {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-3xl);
}

.cta-banner__title {
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--rs-white);
  margin-bottom: var(--space-md);
}

.cta-banner__subtitle {
  font-size: var(--fs-body-lg);
  color: rgba(255, 255, 255, 0.7);
  max-width: 500px;
  line-height: 1.7;
}

.cta-banner__actions {
  display: flex;
  gap: var(--space-md);
  flex-shrink: 0;
}

/* ===== QUICK QUOTE ===== */
.quick-quote__wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: start;
}

.quick-quote__info {
  padding-top: var(--space-xl);
}

.quick-quote__features {
  margin-top: var(--space-2xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}

.quick-quote__feature {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  color: var(--rs-gray-600);
  font-weight: 500;
}

/* Form Styles */
.quick-quote__form {
  background: var(--rs-white);
  border: 1px solid var(--rs-gray-200);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-lg);
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.form-label {
  font-size: var(--fs-small);
  font-weight: 600;
  color: var(--rs-gray-700);
}

.form-input {
  padding: 12px 16px;
  border: 1.5px solid var(--rs-gray-300);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--fs-body);
  color: var(--rs-dark);
  background: var(--rs-gray-50);
  transition: all var(--transition-base);
  outline: none;
  width: 100%;
}

.form-input:focus {
  border-color: var(--rs-blue);
  box-shadow: 0 0 0 3px rgba(27, 121, 191, 0.1);
  background: var(--rs-white);
}

.form-input::placeholder {
  color: var(--rs-gray-400);
}

.form-select {
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%236b7280' d='M1 1l5 5 5-5'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 16px center;
  padding-right: 40px;
  cursor: pointer;
}

.form-textarea {
  resize: vertical;
  min-height: 80px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
  .hero__content {
    grid-template-columns: 1fr;
  }

  .hero__stats {
    min-width: 100%;
    grid-template-columns: repeat(4, 1fr);
  }

  .services-grid {
    grid-template-columns: 1fr;
    max-width: 600px;
    margin: 0 auto;
  }

  .why-us__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .cta-banner__content {
    flex-direction: column;
    text-align: center;
  }

  .cta-banner__subtitle {
    margin: 0 auto;
  }

  .cta-banner__actions {
    justify-content: center;
    flex-wrap: wrap;
  }

  .quick-quote__wrapper {
    grid-template-columns: 1fr;
    gap: var(--space-2xl);
  }
}

@media (max-width: 768px) {
  .hero__stats {
    grid-template-columns: repeat(2, 1fr);
  }

  .why-us__grid {
    grid-template-columns: 1fr;
  }

  .hero__trust {
    flex-direction: column;
    gap: var(--space-sm);
  }

  .form-row {
    grid-template-columns: 1fr;
  }

  .cta-banner__actions {
    flex-direction: column;
    width: 100%;
  }
}
</style>
