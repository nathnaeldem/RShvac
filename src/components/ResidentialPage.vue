<template>
  <div class="residential-page">
    <section class="page-hero">
      <div class="page-hero__bg">
        <img src="/images/residential-service.jpg" alt="Residential HVAC Services" class="page-hero__bg-img" />
        <div class="page-hero__overlay"></div>
      </div>
      <div class="container page-hero__content">
        <span class="hero__badge animate-fade-down">
          <span class="hero__badge-dot"></span>
          Residential Services
        </span>
        <h1 class="page-hero__title animate-fade-up delay-1">Home Comfort <span class="text-accent">Specialists</span></h1>
        <p class="page-hero__subtitle animate-fade-up delay-2">High-quality residential HVAC services designed to meet the specific needs of homeowners. Reliable, efficient, and affordable solutions.</p>
        <div class="animate-fade-up delay-3" style="margin-top: 2rem;">
          <button class="btn btn--primary btn--lg" @click="$emit('navigate', 'contact')">
            Schedule Home Service
          </button>
        </div>
      </div>
    </section>

    <!-- Comprehensive Services -->
    <section class="section-padding">
      <div class="container">
        <div class="section-header">
          <span class="section-badge">Comprehensive Care</span>
          <h2 class="section-title">Residential AC and Heating Services</h2>
          <p class="section-subtitle">Our team of certified technicians is equipped to tackle any HVAC challenge, whether large or small, ensuring your home remains comfortable in every season.</p>
        </div>

        <div class="residential-grid">
          <div class="res-card">
            <div class="res-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg></div>
            <h3 class="res-card__title">Residential HVAC Repairs</h3>
            <p class="res-card__text">Experiencing an unexpected HVAC breakdown? Red Sea offers fast and professional repair services. Whether it's a malfunctioning AC in the peak of summer or a heater struggling during the winter cold, our experts are just a phone call away to restore comfort in your home.</p>
          </div>
          
          <div class="res-card">
            <div class="res-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></div>
            <h3 class="res-card__title">Residential HVAC Maintenance</h3>
            <p class="res-card__text">Regular maintenance is key to extending the life of your HVAC system and maintaining its efficiency. Our comprehensive maintenance services include detailed inspections and tune-ups to prevent costly repairs and ensure your system operates at its best year-round.</p>
          </div>
          
          <div class="res-card">
            <div class="res-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div>
            <h3 class="res-card__title">Residential HVAC Installation</h3>
            <p class="res-card__text">Looking for a new HVAC system? We provide expert installation services for a wide variety of high-quality heating and air conditioning systems. From helping you select the perfect unit to handling the entire setup, our technicians ensure a smooth and hassle-free process.</p>
          </div>
          
          <div class="res-card">
            <div class="res-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path></svg></div>
            <h3 class="res-card__title">Air Purification Solutions</h3>
            <p class="res-card__text">Maintaining indoor air quality is essential for your family's health and comfort. Red Sea offers advanced residential air purification solutions to remove pollutants such as dust, pollen, and allergens, ensuring the air in your home is as clean as it is comfortable.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us - Residential -->
    <section class="section-padding" style="background: var(--rs-gray-50);">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Why Choose Red Sea for Your Home</h2>
        </div>
        <div class="why-res-grid">
          <div class="why-res-item">
            <div class="why-res-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
            <div>
              <h4>Exceptional Service Quality</h4>
              <p>Our certified technicians are trained in the latest HVAC technologies. We go above and beyond to ensure your home's comfort is restored quickly and efficiently.</p>
            </div>
          </div>
          <div class="why-res-item">
            <div class="why-res-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18h6"></path><path d="M10 22h4"></path><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"></path></svg></div>
            <div>
              <h4>Comprehensive Expertise</h4>
              <p>With years of industry experience, we have the skills and expertise to service all makes and models, from modern energy-efficient setups to older units.</p>
            </div>
          </div>
          <div class="why-res-item">
            <div class="why-res-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
            <div>
              <h4>Customer-Centric Approach</h4>
              <p>Every home is unique. We tailor our services to meet your specific needs, whether it's budget-friendly solutions or energy-efficient options.</p>
            </div>
          </div>
          <div class="why-res-item">
            <div class="why-res-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
            <div>
              <h4>Reliable and Timely Support</h4>
              <p>Our local presence means we're always available when you need us. Count on us for fast, reliable support for urgent repairs or regular maintenance.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'ResidentialPage',
  emits: ['navigate']
}
</script>

<style scoped>
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

.residential-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-xl);
}

.res-card {
  background: var(--rs-white);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  border: 1px solid var(--rs-gray-200);
  box-shadow: var(--shadow-sm);
}

.res-card__icon {
  font-size: 2.5rem;
  margin-bottom: var(--space-lg);
}

.res-card__title {
  font-size: var(--fs-h4);
  font-weight: 800;
  color: var(--rs-dark);
  margin-bottom: var(--space-sm);
}

.res-card__text {
  font-size: var(--fs-body);
  color: var(--rs-gray-600);
  line-height: 1.7;
}

.why-res-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-xl);
}

.why-res-item {
  display: flex;
  gap: var(--space-lg);
  background: var(--rs-white);
  padding: var(--space-xl);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
}

.why-res-icon {
  font-size: 2rem;
  flex-shrink: 0;
}

.why-res-item h4 {
  font-size: var(--fs-body-lg);
  font-weight: 700;
  margin-bottom: 8px;
  color: var(--rs-dark);
}

.why-res-item p {
  font-size: var(--fs-small);
  color: var(--rs-gray-600);
  line-height: 1.6;
}

@media (max-width: 768px) {
  .residential-grid, .why-res-grid {
    grid-template-columns: 1fr;
  }
}
</style>
