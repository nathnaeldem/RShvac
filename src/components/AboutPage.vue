<template>
  <div class="about-page">
    <!-- Page Hero -->
    <section class="page-hero">
      <div class="page-hero__bg">
        <img src="/images/about-team.jpg" alt="Red Sea HVAC Team" class="page-hero__bg-img" />
        <div class="page-hero__overlay"></div>
      </div>
      <div class="container page-hero__content">
        <span class="hero__badge animate-fade-down">
          <span class="hero__badge-dot"></span>
          About Us
        </span>
        <h1 class="page-hero__title animate-fade-up delay-1">About Red Sea<br><span class="text-accent">HVAC Service</span></h1>
        <p class="page-hero__subtitle animate-fade-up delay-2">Committed to providing top-tier HVAC services to homes and businesses across Northern Virginia since 2009.</p>
      </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission section-padding">
      <div class="container">
        <div class="mission__grid">
          <div class="mission__card mission__card--mission">
            <div class="mission__card-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></div>
            <h3 class="mission__card-label">Our Mission</h3>
            <p class="mission__card-text">To provide exceptional heating, ventilation, and air conditioning solutions that enhance the comfort and health of every indoor environment. We are dedicated to offering these premium services at affordable prices because we believe that everyone deserves reliable climate control without the burden of excessive costs.</p>
          </div>
          <div class="mission__card mission__card--vision">
            <div class="mission__card-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12a10 10 0 1 1-20 0 10 10 0 0 1 20 0z"></path></svg></div>
            <h3 class="mission__card-label">Our Vision</h3>
            <p class="mission__card-text">We envision a future where we are recognized as the premier provider of innovative, energy-efficient HVAC solutions that redefine industry standards. Our goal is to lead the way in sustainable heating and cooling technologies, ensuring our clients experience optimal comfort while minimizing energy consumption and environmental impact.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Company Story -->
    <section class="story section-padding" style="background: var(--rs-gray-50);">
      <div class="container">
        <div class="story__content">
          <div class="story__text">
            <span class="section-badge">Our Story</span>
            <h2 class="section-title" style="-webkit-text-fill-color:unset;background:none;color:var(--rs-dark);">Built on Trust, Driven by Excellence</h2>
            <p class="story__paragraph">At Red Sea HVAC Service, we are committed to providing top-tier heating, ventilation, and air conditioning services to homes and businesses across the region. With years of experience and a team of certified professionals, we ensure your comfort and indoor air quality is always our top priority.</p>
            <p class="story__paragraph">Whether it's routine maintenance, urgent repairs, or new installations, you can rely on Red Sea HVAC for prompt, reliable, and affordable service. By delivering energy-efficient and high-quality HVAC solutions, we ensure that our clients enjoy long-term comfort, improved air quality, and reduced utility expenses.</p>
            <div class="story__stats">
              <div class="story__stat">
                <span class="story__stat-value">5+</span>
                <span class="story__stat-label">Years of Service</span>
              </div>
              <div class="story__stat">
                <span class="story__stat-value">5K+</span>
                <span class="story__stat-label">Projects Completed</span>
              </div>
              <div class="story__stat">
                <span class="story__stat-value">100%</span>
                <span class="story__stat-label">Client Satisfaction</span>
              </div>
            </div>
          </div>
          <div class="story__image">
            <img src="/images/hero-hvac.jpg" alt="Red Sea HVAC at work" />
            <div class="story__image-badge glass">
              <span class="story__image-badge-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span>
              <span class="story__image-badge-text">Trusted Since 2009</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Values -->
    <section class="values section-padding">
      <div class="container">
        <div class="section-header">
          <span class="section-badge section-badge--red">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
            Our Values
          </span>
          <h2 class="section-title">Core Values That Guide Us</h2>
          <p class="section-subtitle">These principles are the foundation of our company's culture and reflect our commitment to delivering excellence.</p>
        </div>

        <div class="values__grid">
          <div v-for="(value, i) in coreValues" :key="value.title" class="values__card">
            <div class="values__card-top">
              <span class="values__card-icon" v-html="value.icon"></span>
              <span class="values__card-num">{{ String(i + 1).padStart(2, '0') }}</span>
            </div>
            <h3 class="values__card-title">{{ value.title }}</h3>
            <p class="values__card-text">{{ value.desc }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="about-cta">
      <div class="about-cta__bg"></div>
      <div class="container about-cta__content">
        <h2 class="about-cta__title">Ready to Experience the Red Sea Difference?</h2>
        <p class="about-cta__subtitle">Join thousands of satisfied customers who trust Red Sea HVAC for their comfort needs.</p>
        <div class="about-cta__actions">
          <button class="btn btn--primary btn--lg" @click="$emit('navigate', 'contact')">
            Get a Free Quote
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
          <button class="btn btn--outline btn--lg" @click="$emit('navigate', 'services')">
            View Our Services
          </button>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'AboutPage',
  emits: ['navigate'],
  data() {
    return {
      coreValues: [
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>', title: 'Customer Satisfaction', desc: 'Every client deserves personalized service, tailored solutions, and a positive experience from the moment they contact us.' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>', title: 'Integrity & Transparency', desc: 'We value open communication and transparency, ensuring clients fully understand services, pricing, and technical recommendations.' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>', title: 'Quality Workmanship', desc: 'Our skilled professionals are committed to delivering top-notch services, paying close attention to detail and utilizing the latest standards.' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>', title: 'Affordability', desc: 'Comfort and high-quality services should be accessible to everyone. We offer competitive, transparent pricing without compromising quality.' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>', title: 'Excellence', desc: 'We strive for excellence in every aspect, utilizing industry-leading practices and achieving outstanding results in every project.' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18h6"></path><path d="M10 22h4"></path><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"></path></svg>', title: 'Innovation', desc: 'We embrace innovation and continuously adapt to new technologies, providing energy-efficient, eco-friendly, and cost-saving solutions.' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path></svg>', title: 'Sustainability', desc: 'We help reduce environmental footprint by offering energy-efficient, eco-conscious HVAC solutions that conserve resources.' },
        { icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>', title: 'Professionalism', desc: 'We treat clients and their properties with utmost professionalism and respect, ensuring a seamless service experience.' }
      ]
    }
  }
}
</script>

<style scoped>
/* Page Hero (Reusable pattern) */
.page-hero {
  position: relative;
  min-height: 50vh;
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

/* Mission */
.mission__grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-xl);
}

.mission__card {
  padding: var(--space-3xl);
  border-radius: var(--radius-xl);
  position: relative;
  overflow: hidden;
}

.mission__card--mission {
  background: linear-gradient(135deg, #0d1b2a, #1b2a4a);
  color: var(--rs-white);
}

.mission__card--vision {
  background: linear-gradient(135deg, #7f1d1d, #991b1b);
  color: var(--rs-white);
}

.mission__card-icon {
  font-size: 2.5rem;
  margin-bottom: var(--space-lg);
}

.mission__card-label {
  font-size: var(--fs-h3);
  font-weight: 800;
  margin-bottom: var(--space-md);
  color: var(--rs-white);
}

.mission__card-text {
  font-size: var(--fs-body);
  line-height: 1.8;
  opacity: 0.85;
}

/* Story */
.story__content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: center;
}

.story__paragraph {
  color: var(--rs-gray-600);
  line-height: 1.8;
  margin-bottom: var(--space-lg);
}

.story__stats {
  display: flex;
  gap: var(--space-2xl);
  margin-top: var(--space-2xl);
  padding-top: var(--space-2xl);
  border-top: 1px solid var(--rs-gray-200);
}

.story__stat-value {
  display: block;
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 800;
  color: var(--rs-blue);
}

.story__stat-label {
  font-size: var(--fs-small);
  color: var(--rs-gray-500);
  font-weight: 500;
}

.story__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
}

.story__image img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  border-radius: var(--radius-xl);
}

.story__image-badge {
  position: absolute;
  bottom: var(--space-xl);
  left: var(--space-xl);
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  padding: var(--space-md) var(--space-lg);
  color: var(--rs-white);
  font-weight: 600;
  font-size: var(--fs-small);
}

.story__image-badge-icon {
  font-size: 1.25rem;
}

/* Values */
.values__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}

.values__card {
  background: var(--rs-white);
  border: 1px solid var(--rs-gray-200);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  transition: all var(--transition-smooth);
}

.values__card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
  border-color: rgba(27,121,191,0.2);
}

.values__card-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: var(--space-lg);
}

.values__card-icon {
  font-size: 2rem;
}

.values__card-num {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--rs-gray-200);
}

.values__card-title {
  font-size: var(--fs-body-lg);
  font-weight: 700;
  margin-bottom: var(--space-sm);
  color: var(--rs-dark);
}

.values__card-text {
  font-size: var(--fs-small);
  color: var(--rs-gray-500);
  line-height: 1.7;
}

/* About CTA */
.about-cta {
  position: relative;
  padding: var(--space-5xl) 0;
  background: var(--rs-gradient-hero);
  overflow: hidden;
  text-align: center;
}

.about-cta__title {
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--rs-white);
  margin-bottom: var(--space-md);
}

.about-cta__subtitle {
  font-size: var(--fs-body-lg);
  color: rgba(255,255,255,0.7);
  margin-bottom: var(--space-2xl);
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
}

.about-cta__actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

@media (max-width: 1024px) {
  .mission__grid { grid-template-columns: 1fr; }
  .story__content { grid-template-columns: 1fr; }
  .values__grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
  .values__grid { grid-template-columns: 1fr; }
  .story__stats { flex-direction: column; gap: var(--space-lg); }
}
</style>
