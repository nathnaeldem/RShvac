<template>
  <div class="air-quality-page">
    <section class="page-hero">
      <div class="page-hero__bg">
        <img src="/images/air-quality.jpg" alt="Indoor Air Quality" class="page-hero__bg-img" />
        <div class="page-hero__overlay"></div>
      </div>
      <div class="container page-hero__content">
        <span class="hero__badge animate-fade-down" style="background: rgba(34, 197, 94, 0.2); border-color: rgba(34, 197, 94, 0.3);">
          <span class="hero__badge-dot"></span>
          Indoor Air Quality
        </span>
        <h1 class="page-hero__title animate-fade-up delay-1">Breathe <span class="text-accent">Cleaner</span> Air</h1>
        <p class="page-hero__subtitle animate-fade-up delay-2">We provide only the highest quality indoor air quality products and services to enhance your well-being. Clean, safe, and pure air for your home.</p>
        <div class="animate-fade-up delay-3" style="margin-top: 2rem;">
          <button class="btn btn--primary btn--lg" @click="$emit('navigate', 'contact')">
            Get an IAQ Assessment
          </button>
        </div>
      </div>
    </section>

    <!-- Why IAQ Matters -->
    <section class="section-padding">
      <div class="container">
        <div class="iaq-intro">
          <div class="iaq-intro__text">
            <h2 class="section-title" style="-webkit-text-fill-color:unset;background:none;color:var(--rs-dark);">Why Indoor Air Quality Matters</h2>
            <p>Indoor air quality is crucial for your health and can help prevent allergies and discomfort. Poor air quality can lead to headaches, fatigue, respiratory issues, and other health problems.</p>
            <p>At Red Sea Heating and Air Conditioning, we provide a comprehensive range of indoor air quality products and services, including air filters, humidifiers, dehumidifiers, and air treatments. Our skilled technicians are here to help you select the best solutions for your home and ensure proper installation.</p>
          </div>
          <div class="iaq-intro__benefits">
            <div class="iaq-benefit">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Reduce Related Health Issues
            </div>
            <div class="iaq-benefit">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Fewer Allergens & Pollutants
            </div>
            <div class="iaq-benefit">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Humidity Control Both Summer & Winter
            </div>
            <div class="iaq-benefit">
              <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Superior Home Comfort
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Solutions Grid -->
    <section class="section-padding" style="background: var(--rs-gray-50);">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our Air Quality Solutions</h2>
          <p class="section-subtitle">We offer a range of solutions designed to enhance your environment in various ways.</p>
        </div>

        <div class="solutions-grid">
          <div class="solution-card">
            <div class="solution-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path></svg></div>
            <h4>Fewer Allergens</h4>
            <p>Air filters, purifiers, and humidifiers significantly reduce allergens like pollen and pet dander, creating a safer environment for allergy sufferers.</p>
          </div>
          
          <div class="solution-card">
            <div class="solution-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div>
            <h4>Prevent Mold & Mildew</h4>
            <p>High humidity levels can lead to mold and mildew. Dehumidifiers effectively manage moisture levels, preventing growth and health risks.</p>
          </div>
          
          <div class="solution-card">
            <div class="solution-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg></div>
            <h4>Eliminate Pollutants</h4>
            <p>Eliminate harmful pollutants including VOCs and dust mites. Our purifiers use advanced technology like germicidal UV lamps to cleanse your air.</p>
          </div>
          
          <div class="solution-card">
            <div class="solution-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></div>
            <h4>Superior Comfort</h4>
            <p>Maintaining proper indoor air quality helps regulate temperature and humidity levels, enhancing your overall comfort at home.</p>
          </div>
          
          <div class="solution-card">
            <div class="solution-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18h6"></path><path d="M10 22h4"></path><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"></path></svg></div>
            <h4>Reduced Energy Use</h4>
            <p>Installing an energy recovery ventilator (ERV) helps balance temperature and humidity, lightening the load on your HVAC system and saving energy.</p>
          </div>
          
          <div class="solution-card">
            <div class="solution-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
            <h4>System Protection</h4>
            <p>IAQ products safeguard your furnace and AC by minimizing dirt and dust buildup on components, leading to improved efficiency and longevity.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'AirQualityPage',
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
  background: linear-gradient(135deg, #22c55e, #16a34a);
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

.iaq-intro {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: center;
}

.iaq-intro__text p {
  color: var(--rs-gray-600);
  line-height: 1.8;
  margin-bottom: var(--space-lg);
}

.iaq-intro__benefits {
  background: var(--rs-white);
  padding: var(--space-2xl);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}

.iaq-benefit {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  font-weight: 600;
  font-size: var(--fs-body-lg);
  color: var(--rs-dark);
}

.solutions-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
}

.solution-card {
  background: var(--rs-white);
  padding: var(--space-2xl);
  border-radius: var(--radius-xl);
  border: 1px solid var(--rs-gray-200);
  transition: transform var(--transition-smooth);
}

.solution-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-md);
}

.solution-card__icon {
  font-size: 2.5rem;
  margin-bottom: var(--space-lg);
}

.solution-card h4 {
  font-size: var(--fs-h4);
  color: var(--rs-dark);
  margin-bottom: var(--space-sm);
}

.solution-card p {
  color: var(--rs-gray-600);
  line-height: 1.6;
}

@media (max-width: 1024px) {
  .iaq-intro { grid-template-columns: 1fr; }
  .solutions-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
  .solutions-grid { grid-template-columns: 1fr; }
}
</style>
