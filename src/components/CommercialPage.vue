<template>
  <div class="commercial-page">
    <section class="page-hero">
      <div class="page-hero__bg">
        <img src="/images/commercial-service.jpg" alt="Commercial HVAC Services" class="page-hero__bg-img" />
        <div class="page-hero__overlay"></div>
      </div>
      <div class="container page-hero__content">
        <span class="hero__badge animate-fade-down">
          <span class="hero__badge-dot"></span>
          Commercial Services
        </span>
        <h1 class="page-hero__title animate-fade-up delay-1">Business <span class="text-accent">Comfort</span> Solutions</h1>
        <p class="page-hero__subtitle animate-fade-up delay-2">Dependable commercial HVAC services to keep your employees and customers comfortable while optimizing energy efficiency.</p>
        <div class="animate-fade-up delay-3" style="margin-top: 2rem;">
          <button class="btn btn--primary btn--lg" @click="$emit('navigate', 'contact')">
            Get Commercial Quote
          </button>
        </div>
      </div>
    </section>

    <!-- Commercial Overview -->
    <section class="section-padding">
      <div class="container">
        <div class="commercial-overview">
          <div class="commercial-overview__text">
            <span class="section-badge">Expert Care</span>
            <h2 class="section-title" style="-webkit-text-fill-color:unset;background:none;color:var(--rs-dark);">Light Commercial HVAC Services</h2>
            <p>For over 15 years, Red Sea HVAC Services has been a trusted provider of Light commercial HVAC services in Northern Virginia. We understand the unique challenges businesses face in our region, from the sweltering summer heat and humidity to the unpredictable winter chills.</p>
            <p>Unlike residential systems, commercial HVAC systems often handle a heavier load. Our highly trained and certified technicians possess the specialized knowledge to tackle any challenge, keeping your business environment comfortable and productive all year long.</p>
            <ul class="commercial-checklist">
              <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Heating & AC Installation, Repair & Maintenance</li>
              <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> 24/7 Emergency Service Available</li>
              <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Serving The DMV Area</li>
            </ul>
          </div>
          <div class="commercial-overview__image">
            <img src="/images/hero-hvac.jpg" alt="Commercial HVAC Unit" style="border-radius: var(--radius-xl); box-shadow: var(--shadow-lg);" />
          </div>
        </div>
      </div>
    </section>

    <!-- Common Problems -->
    <section class="section-padding" style="background: var(--rs-gray-50);">
      <div class="container">
        <div class="section-header">
          <span class="section-badge section-badge--red">Troubleshooting</span>
          <h2 class="section-title">Common Commercial HVAC Problems</h2>
          <p class="section-subtitle">Keeping your business comfortable relies on a dependable HVAC system. Here are common issues we help businesses solve:</p>
        </div>

        <div class="problems-grid">
          <div class="problem-card">
            <div class="problem-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path></svg></div>
            <h4>Reduced Airflow</h4>
            <p>Clogged air filters or dirty condenser coils can restrict airflow. This makes your system work harder, leading to higher bills and potential breakdowns.</p>
          </div>
          <div class="problem-card">
            <div class="problem-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path></svg></div>
            <h4>Uneven Temperatures</h4>
            <p>Problems like faulty thermostats or clogged drains can cause areas to be too hot or cold, making it uncomfortable for employees and customers.</p>
          </div>
          <div class="problem-card">
            <div class="problem-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg></div>
            <h4>Strange Noises</h4>
            <p>Unusual sounds like clanging or rattling may signal loose parts or failing components. Ignoring these can lead to bigger issues later.</p>
          </div>
          <div class="problem-card">
            <div class="problem-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></div>
            <h4>Short Cycling</h4>
            <p>If your AC turns on and off quickly, it could be due to a dirty filter or low refrigerant. This reduces efficiency and shortens equipment lifespan.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Maintenance Benefits -->
    <section class="section-padding">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Benefits of Regular Maintenance</h2>
        </div>
        <div class="benefits-grid">
          <div class="benefit-item">
            <h5>Improved Energy Efficiency</h5>
            <p>Well-maintained systems consume less energy, leading to lower utility bills.</p>
          </div>
          <div class="benefit-item">
            <h5>Extended Equipment Lifespan</h5>
            <p>Routine inspections catch minor issues before they become major problems, extending the life of your system.</p>
          </div>
          <div class="benefit-item">
            <h5>Consistent Comfort</h5>
            <p>Proper maintenance ensures even temperature control, creating a comfortable environment for everyone.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'CommercialPage',
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

.commercial-overview {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: center;
}

.commercial-overview__text p {
  margin-bottom: var(--space-lg);
  color: var(--rs-gray-600);
  line-height: 1.8;
}

.commercial-checklist {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  margin-top: var(--space-xl);
}

.commercial-checklist li {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  font-weight: 600;
  color: var(--rs-dark);
}

.problems-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}

.problem-card {
  background: var(--rs-white);
  padding: var(--space-xl);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  border: 1px solid var(--rs-gray-200);
}

.problem-card__icon {
  font-size: 2rem;
  margin-bottom: var(--space-md);
}

.problem-card h4 {
  font-size: var(--fs-body-lg);
  margin-bottom: 8px;
  color: var(--rs-dark);
}

.problem-card p {
  font-size: var(--fs-small);
  color: var(--rs-gray-600);
  line-height: 1.6;
}

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
}

.benefit-item {
  background: var(--rs-blue);
  color: var(--rs-white);
  padding: var(--space-2xl);
  border-radius: var(--radius-xl);
  text-align: center;
}

.benefit-item h5 {
  font-size: var(--fs-h4);
  margin-bottom: var(--space-md);
  color: var(--rs-white);
}

.benefit-item p {
  color: rgba(255,255,255,0.85);
  line-height: 1.6;
}

@media (max-width: 1024px) {
  .commercial-overview { grid-template-columns: 1fr; }
  .problems-grid { grid-template-columns: repeat(2, 1fr); }
  .benefits-grid { grid-template-columns: 1fr; }
}

@media (max-width: 640px) {
  .problems-grid { grid-template-columns: 1fr; }
}
</style>
