<template>
  <footer class="footer">
    <div class="footer__top">
      <div class="container footer__grid">
        <!-- Brand Info -->
        <div class="footer__brand">
          <a href="#" class="footer__logo" @click.prevent="$emit('navigate', 'home')">
            <img src="/images/Logo_2-01.png" alt="Red Sea HVAC Services" style="height: 90px; width: auto;" />
            <div class="footer__logo-text">
              <span class="footer__logo-name">RED SEA</span>
              <span class="footer__logo-tagline">HVAC SERVICES</span>
            </div>
          </a>
          <p class="footer__desc">
            The most trusted heating, ventilation, and air conditioning services in Northern Virginia. Fast, reliable, and affordable solutions for your home or business.
          </p>
          <div class="footer__socials">
            <a href="#" class="footer__social" aria-label="Facebook">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
            </a>
            <a href="#" class="footer__social" aria-label="Twitter">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
            </a>
            <a href="#" class="footer__social" aria-label="Instagram">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer__links-col">
          <h4 class="footer__title">Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#" @click.prevent="$emit('navigate', 'home')">Home</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'about')">About Us</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'services')">Our Services</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'financing')">Financing</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'contact')">Contact Us</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div class="footer__links-col">
          <h4 class="footer__title">Our Services</h4>
          <ul class="footer__links">
            <li><a href="#" @click.prevent="$emit('navigate', 'residential')">Residential HVAC</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'commercial')">Commercial HVAC</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'air-quality')">Indoor Air Quality</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'contact')">Emergency Repairs</a></li>
            <li><a href="#" @click.prevent="$emit('navigate', 'contact')">System Installation</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer__links-col">
          <h4 class="footer__title">Contact Us</h4>
          <ul class="footer__contact">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <a href="tel:5712245831">(571) 224-5831</a>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <a href="mailto:info@rshvacservices.com">info@rshvacservices.com</a>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <span>Serving Northern Virginia & DMV Area</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              <span>24/7 Emergency Service Available</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="footer__bottom">
      <div class="container footer__bottom-inner">
        <p>&copy; {{ new Date().getFullYear() }} Red Sea HVAC Services. All rights reserved.</p>
        <div class="footer__legal">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterSection',
  emits: ['navigate']
}
</script>

<style scoped>
.footer {
  background: var(--rs-dark);
  color: var(--rs-gray-300);
  margin-top: auto;
}

.footer__top {
  padding: var(--space-4xl) 0 var(--space-3xl);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.footer__grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.5fr;
  gap: var(--space-3xl);
}

/* Brand */
.footer__logo {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  margin-bottom: var(--space-lg);
}

.footer__logo-text {
  display: flex;
  flex-direction: column;
}

.footer__logo-name {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 800;
  letter-spacing: 1px;
  color: var(--rs-white);
}

.footer__logo-tagline {
  font-size: 0.65rem;
  font-weight: 600;
  letter-spacing: 2px;
  color: var(--rs-blue);
  text-transform: uppercase;
}

.footer__desc {
  font-size: var(--fs-small);
  line-height: 1.8;
  margin-bottom: var(--space-lg);
  max-width: 300px;
}

.footer__socials {
  display: flex;
  gap: var(--space-md);
}

.footer__social {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.05);
  color: var(--rs-white);
  transition: all var(--transition-base);
}

.footer__social:hover {
  background: var(--rs-blue);
  transform: translateY(-3px);
}

/* Links & Columns */
.footer__title {
  color: var(--rs-white);
  font-size: var(--fs-body);
  font-weight: 700;
  margin-bottom: var(--space-lg);
}

.footer__links,
.footer__contact {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}

.footer__links a {
  font-size: var(--fs-small);
  color: var(--rs-gray-400);
  transition: color var(--transition-base);
}

.footer__links a:hover {
  color: var(--rs-blue);
  padding-left: 5px;
}

.footer__contact li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm);
  font-size: var(--fs-small);
  color: var(--rs-gray-400);
  line-height: 1.6;
}

.footer__contact svg {
  color: var(--rs-blue);
  flex-shrink: 0;
  margin-top: 2px;
}

.footer__contact a {
  color: var(--rs-gray-400);
  transition: color var(--transition-base);
}

.footer__contact a:hover {
  color: var(--rs-blue);
}

/* Bottom */
.footer__bottom {
  padding: var(--space-lg) 0;
  font-size: var(--fs-xs);
  color: var(--rs-gray-500);
}

.footer__bottom-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.footer__legal {
  display: flex;
  gap: var(--space-lg);
}

.footer__legal a {
  transition: color var(--transition-base);
}

.footer__legal a:hover {
  color: var(--rs-white);
}

@media (max-width: 1024px) {
  .footer__grid {
    grid-template-columns: 1fr 1fr;
    gap: var(--space-2xl);
  }
}

@media (max-width: 640px) {
  .footer__grid {
    grid-template-columns: 1fr;
  }
  
  .footer__bottom-inner {
    flex-direction: column;
    gap: var(--space-md);
    text-align: center;
  }
}
</style>
