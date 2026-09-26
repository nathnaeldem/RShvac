<template>
  <div class="services-page">
    <section class="page-hero">
      <div class="page-hero__bg">
        <img src="/images/hero-hvac.jpg" alt="HVAC Services" class="page-hero__bg-img" />
        <div class="page-hero__overlay"></div>
      </div>
      <div class="container page-hero__content">
        <span class="hero__badge animate-fade-down">
          <span class="hero__badge-dot"></span>
          Our Services
        </span>
        <h1 class="page-hero__title animate-fade-up delay-1">Expert HVAC <span class="text-accent">Solutions</span></h1>
        <p class="page-hero__subtitle animate-fade-up delay-2">We provide fast, reliable heating and cooling solutions with a focus on energy efficiency and excellent customer care.</p>
      </div>
    </section>

    <!-- Services Grid -->
    <section class="section-padding" style="background: var(--rs-gray-50);">
      <div class="container">
        <div class="services-main-grid">
          
          <!-- Residential AC -->
          <div class="service-detail-card" @click="$emit('navigate', 'residential')">
            <div class="service-detail-card__icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            </div>
            <h3 class="service-detail-card__title">Residential Air Conditioning Service</h3>
            <p class="service-detail-card__text">For homeowners, we offer reliable and efficient Residential Air Conditioning Services to ensure your home stays cool during the hottest months. Quick repairs, routine maintenance, or complete AC installation.</p>
            <span class="service-detail-card__link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
          </div>

          <!-- Commercial AC -->
          <div class="service-detail-card" @click="$emit('navigate', 'commercial')">
            <div class="service-detail-card__icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="9" y1="22" x2="15" y2="22"></line><line x1="8" y1="6" x2="8.01" y2="6"></line><line x1="16" y1="6" x2="16.01" y2="6"></line><line x1="12" y1="6" x2="12.01" y2="6"></line><line x1="12" y1="10" x2="12.01" y2="10"></line><line x1="12" y1="14" x2="12.01" y2="14"></line><line x1="16" y1="10" x2="16.01" y2="10"></line><line x1="16" y1="14" x2="16.01" y2="14"></line><line x1="8" y1="10" x2="8.01" y2="10"></line><line x1="8" y1="14" x2="8.01" y2="14"></line></svg>
            </div>
            <h3 class="service-detail-card__title">Commercial Air Conditioning Service</h3>
            <p class="service-detail-card__text">Designed to meet the unique needs of businesses. Custom solutions to keep your workspace comfortable. Regular maintenance, emergency repairs, or new commercial AC installation with minimal disruption.</p>
            <span class="service-detail-card__link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
          </div>

          <!-- Residential Heating -->
          <div class="service-detail-card" @click="$emit('navigate', 'residential')">
            <div class="service-detail-card__icon" style="color: var(--rs-red); background: rgba(239, 41, 32, 0.1);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C12 2 12 12 19 12C19 12 12 22 12 22C12 22 12 12 5 12C5 12 12 2 12 2Z"></path><path d="M12 22v-6"></path></svg>
            </div>
            <h3 class="service-detail-card__title">Residential Heating Service</h3>
            <p class="service-detail-card__text">Ensure your home remains warm and cozy throughout the winter. From furnace repairs and tune-ups to complete system installations, we provide personalized service to meet your home's heating needs.</p>
            <span class="service-detail-card__link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
          </div>

          <!-- Commercial Heating -->
          <div class="service-detail-card" @click="$emit('navigate', 'commercial')">
            <div class="service-detail-card__icon" style="color: var(--rs-red); background: rgba(239, 41, 32, 0.1);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
            </div>
            <h3 class="service-detail-card__title">Commercial Heating Service</h3>
            <p class="service-detail-card__text">Maintain a comfortable work environment even during extreme cold. Prompt repairs, routine maintenance, or a full heating system installation to minimize downtime and keep operations running smoothly.</p>
            <span class="service-detail-card__link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
          </div>

          <!-- Indoor Air Quality -->
          <div class="service-detail-card" @click="$emit('navigate', 'air-quality')">
            <div class="service-detail-card__icon" style="color: #22c55e; background: rgba(34, 197, 94, 0.1);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path></svg>
            </div>
            <h3 class="service-detail-card__title">Indoor Air Quality Services</h3>
            <p class="service-detail-card__text">The quality of air inside is as important as the temperature. We conduct thorough assessments to identify pollutants, allergens, and humidity issues. We offer air purifiers, humidifiers, and ventilation systems.</p>
            <span class="service-detail-card__link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Section -->
    <section class="section-padding">
      <div class="container">
        <div class="section-header">
          <span class="section-badge">Why Choose Us</span>
          <h2 class="section-title">The Red Sea Advantage</h2>
        </div>
        <div class="why-us__grid">
          <div class="why-us__card">
            <div class="why-us__card-icon why-us__card-icon--blue"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg></span></div>
            <h3 class="why-us__card-title">Professional Standards</h3>
            <p class="why-us__card-text">We hire only skilled heating and air conditioning technicians. All our team members are professional and go through background checks to ensure your safety.</p>
          </div>
          <div class="why-us__card">
            <div class="why-us__card-icon why-us__card-icon--red"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></span></div>
            <h3 class="why-us__card-title">Satisfaction Guaranteed</h3>
            <p class="why-us__card-text">When it comes to customer satisfaction, Red Sea HVAC guarantees you will be happy with our work. Whether you need a major AC repair or a completely new furnace, we've got you covered!</p>
          </div>
          <div class="why-us__card">
            <div class="why-us__card-icon why-us__card-icon--blue"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span></div>
            <h3 class="why-us__card-title">Every Job is Personal</h3>
            <p class="why-us__card-text">We aim to be the top HVAC company in Northern Virginia by upholding our reputation for excellence. Expect exceptional service from a trusted, family-owned business.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'ServicesPage',
  emits: ['navigate']
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

.services-main-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-xl);
}

.service-detail-card {
  background: var(--rs-white);
  border-radius: var(--radius-xl);
  padding: var(--space-3xl);
  border: 1px solid var(--rs-gray-200);
  transition: all var(--transition-smooth);
  cursor: pointer;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.service-detail-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-xl);
  border-color: rgba(27, 121, 191, 0.3);
}

.service-detail-card__icon {
  width: 64px;
  height: 64px;
  border-radius: var(--radius-lg);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(27, 121, 191, 0.1);
  color: var(--rs-blue);
  margin-bottom: var(--space-lg);
}

.service-detail-card__title {
  font-size: var(--fs-h3);
  font-weight: 800;
  margin-bottom: var(--space-md);
  color: var(--rs-dark);
}

.service-detail-card__text {
  font-size: var(--fs-body);
  line-height: 1.7;
  color: var(--rs-gray-600);
  margin-bottom: var(--space-xl);
  flex-grow: 1;
}

.service-detail-card__link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-weight: 600;
  color: var(--rs-blue);
  font-size: var(--fs-body);
  transition: gap var(--transition-base);
}

.service-detail-card:hover .service-detail-card__link {
  gap: var(--space-md);
}

.why-us__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
}

.why-us__card {
  background: var(--rs-white);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  border: 1px solid var(--rs-gray-200);
  transition: all var(--transition-smooth);
}

.why-us__card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
  border-color: rgba(27, 121, 191, 0.15);
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

@media (max-width: 1024px) {
  .services-main-grid {
    grid-template-columns: 1fr;
  }
  .why-us__grid {
    grid-template-columns: 1fr;
  }
}
</style>
