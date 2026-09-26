<template>
  <div class="financing-page">
    <section class="page-hero">
      <div class="page-hero__bg">
        <img src="/images/residential-service.jpg" alt="HVAC Financing" class="page-hero__bg-img" />
        <div class="page-hero__overlay"></div>
      </div>
      <div class="container page-hero__content">
        <span class="hero__badge animate-fade-down">
          <span class="hero__badge-dot"></span>
          HVAC Financing
        </span>
        <h1 class="page-hero__title animate-fade-up delay-1">Flexible <span class="text-accent">Financing</span> Options</h1>
        <p class="page-hero__subtitle animate-fade-up delay-2">We offer tailored financing options to make upgrading or repairing your HVAC system smoother and more affordable.</p>
      </div>
    </section>

    <!-- Why Financing Matters -->
    <section class="section-padding">
      <div class="container">
        <div class="finance-intro">
          <div class="finance-intro__text">
            <h2 class="section-title" style="-webkit-text-fill-color:unset;background:none;color:var(--rs-dark);">Why HVAC Financing Matters</h2>
            <p>HVAC systems are essential to maintaining comfort in your home or business, especially during extreme weather conditions. However, purchasing a new HVAC system can be costly.</p>
            <p>Financing helps you spread out the cost over manageable monthly payments, so you don't have to compromise on comfort due to budget constraints. Here at Red Sea HVAC Services, we've developed a range of flexible financing options to suit different needs and financial situations.</p>
          </div>
          <div class="finance-intro__card">
            <h3>Benefits of Financing</h3>
            <ul>
              <li><strong>Affordability:</strong> Break down total cost into smaller, budget-friendly payments.</li>
              <li><strong>Flexible Plans:</strong> Options tailored to your unique financial situation.</li>
              <li><strong>No Compromises:</strong> Install the best system right away without settling.</li>
              <li><strong>Fast Approval:</strong> Quick and straightforward application process.</li>
              <li><strong>Energy Efficiency:</strong> Upgrade to modern systems that save you money on utility bills.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- How To Apply -->
    <section class="section-padding" style="background: var(--rs-gray-50);">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">How to Apply for HVAC Financing</h2>
          <p class="section-subtitle">Applying for HVAC financing with Red Sea HVAC Services is easy and straightforward.</p>
        </div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-num">1</div>
            <h4>Contact Us</h4>
            <p>Reach out to us to discuss your HVAC needs and financing options. You can call us directly or fill out a contact form.</p>
          </div>
          <div class="step-card">
            <div class="step-num">2</div>
            <h4>Choose Your Plan</h4>
            <p>After assessing your situation, we'll provide several financing plans. We'll explain the terms and help you select the best one.</p>
          </div>
          <div class="step-card">
            <div class="step-num">3</div>
            <h4>Quick Approval</h4>
            <p>Once you've chosen a plan, we'll assist with the application. Most are approved quickly, allowing your project to move forward.</p>
          </div>
          <div class="step-card">
            <div class="step-num">4</div>
            <h4>Install & Pay Monthly</h4>
            <p>We'll schedule the installation or repair. Enjoy your new system while making affordable monthly payments.</p>
          </div>
        </div>

        <div class="text-center" style="margin-top: 4rem;">
          <button class="btn btn--primary btn--lg" @click="$emit('navigate', 'contact')">
            Contact Us to Apply
          </button>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'FinancingPage',
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

.finance-intro {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: center;
}

.finance-intro__text p {
  color: var(--rs-gray-600);
  line-height: 1.8;
  margin-bottom: var(--space-lg);
}

.finance-intro__card {
  background: var(--rs-white);
  padding: var(--space-3xl);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  border-top: 4px solid var(--rs-blue);
}

.finance-intro__card h3 {
  font-size: var(--fs-h3);
  margin-bottom: var(--space-lg);
  color: var(--rs-dark);
}

.finance-intro__card ul {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}

.finance-intro__card li {
  color: var(--rs-gray-600);
  line-height: 1.6;
}

.finance-intro__card li strong {
  color: var(--rs-dark);
}

.steps-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}

.step-card {
  background: var(--rs-white);
  padding: var(--space-2xl);
  border-radius: var(--radius-xl);
  border: 1px solid var(--rs-gray-200);
  text-align: center;
  position: relative;
}

.step-num {
  width: 48px;
  height: 48px;
  background: var(--rs-blue);
  color: var(--rs-white);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  font-weight: 800;
  margin: 0 auto var(--space-lg);
}

.step-card h4 {
  font-size: var(--fs-h4);
  color: var(--rs-dark);
  margin-bottom: var(--space-sm);
}

.step-card p {
  color: var(--rs-gray-600);
  font-size: var(--fs-small);
  line-height: 1.6;
}

@media (max-width: 1024px) {
  .finance-intro { grid-template-columns: 1fr; }
  .steps-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 640px) {
  .steps-grid { grid-template-columns: 1fr; }
}
</style>
