<template>
  <nav class="navbar" :class="{ 'navbar--scrolled': isScrolled, 'navbar--open': mobileOpen }">
    <div class="container navbar__inner">
      <!-- Logo -->
      <a href="#" class="navbar__logo" @click.prevent="$emit('navigate', 'home')">
        <div class="navbar__logo-icon">
          <img src="/images/Logo_2-01.png" alt="Red Sea HVAC Services" style="height: 50px; width: auto;" />
        </div>
        <div class="navbar__logo-text">
          <span class="navbar__logo-name"></span>
          <span class="navbar__logo-tagline"></span>
        </div>
      </a>

      <!-- Desktop Nav Links -->
      <ul class="navbar__links">
        <li v-for="link in navLinks" :key="link.id">
          <a
            href="#"
            class="navbar__link"
            :class="{ 'navbar__link--active': currentPage === link.id }"
            @click.prevent="handleNavClick(link)"
          >
            {{ link.label }}
            <svg v-if="link.children" class="navbar__chevron" width="10" height="6" viewBox="0 0 10 6">
              <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
          <!-- Dropdown -->
          <div v-if="link.children" class="navbar__dropdown">
            <a
              v-for="child in link.children"
              :key="child.id"
              href="#"
              class="navbar__dropdown-item"
              @click.prevent="$emit('navigate', child.id); closeDropdowns()"
            >
              <span class="navbar__dropdown-icon" v-html="child.icon"></span>
              <div>
                <span class="navbar__dropdown-label">{{ child.label }}</span>
                <span class="navbar__dropdown-desc">{{ child.desc }}</span>
              </div>
            </a>
          </div>
        </li>
      </ul>

      <!-- CTA + Phone -->
      <div class="navbar__actions">
        <a href="tel:5712245831" class="navbar__phone">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
          </svg>
          <span>(571) 224-5831</span>
        </a>
        <button class="btn btn--primary btn--sm" @click="$emit('navigate', 'contact')">
          Get a Quote
          <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </button>
      </div>

      <!-- Mobile Toggle -->
      <button class="navbar__toggle" @click="mobileOpen = !mobileOpen" :aria-label="mobileOpen ? 'Close menu' : 'Open menu'">
        <span class="navbar__toggle-bar"></span>
        <span class="navbar__toggle-bar"></span>
        <span class="navbar__toggle-bar"></span>
      </button>
    </div>

    <!-- Mobile Menu -->
    <transition name="mobile-menu">
      <div v-if="mobileOpen" class="navbar__mobile">
        <div class="navbar__mobile-inner">
          <a
            v-for="link in flatLinks"
            :key="link.id"
            href="#"
            class="navbar__mobile-link"
            :class="{ 'navbar__mobile-link--active': currentPage === link.id }"
            @click.prevent="$emit('navigate', link.id); mobileOpen = false"
          >
            <span class="navbar__mobile-icon" v-html="link.icon"></span>
            {{ link.label }}
          </a>
          <div class="navbar__mobile-cta">
            <a href="tel:5712245831" class="navbar__mobile-phone">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
              </svg>
              Call (571) 224-5831
            </a>
            <button class="btn btn--primary btn--lg" style="width:100%" @click="$emit('navigate', 'contact'); mobileOpen = false">
              Request a Quote
            </button>
          </div>
        </div>
      </div>
    </transition>
  </nav>
</template>

<script>
export default {
  name: 'Navbar',
  props: ['currentPage'],
  emits: ['navigate'],
  data() {
    return {
      isScrolled: false,
      mobileOpen: false,
      navLinks: [
        { id: 'home', label: 'Home', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>' },
        { id: 'about', label: 'About', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>' },
        {
          id: 'services',
          label: 'Services',
          icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>',
          children: [
            { id: 'services', label: 'All Services', desc: 'View our full service catalog', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>' },
            { id: 'residential', label: 'Residential HVAC', desc: 'Home heating & cooling solutions', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>' },
            { id: 'commercial', label: 'Commercial HVAC', desc: 'Business HVAC systems', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="9" y1="22" x2="15" y2="22"></line></svg>' },
            { id: 'air-quality', label: 'Indoor Air Quality', desc: 'Clean air solutions for health', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path></svg>' }
          ]
        },
        { id: 'financing', label: 'Financing', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>' },
        { id: 'contact', label: 'Contact', icon: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>' }
      ]
    }
  },
  computed: {
    flatLinks() {
      const flat = []
      for (const link of this.navLinks) {
        if (link.children) {
          for (const child of link.children) {
            flat.push(child)
          }
        } else {
          flat.push(link)
        }
      }
      return flat
    }
  },
  mounted() {
    window.addEventListener('scroll', this.onScroll)
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.onScroll)
  },
  methods: {
    onScroll() {
      this.isScrolled = window.scrollY > 20
    },
    handleNavClick(link) {
      if (!link.children) {
        this.$emit('navigate', link.id)
      }
    },
    closeDropdowns() {
      // Click away handled by CSS :hover
    }
  }
}
</script>

<style scoped>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  height: var(--nav-height);
  transition: all var(--transition-smooth);
  background: transparent;
}

.navbar--scrolled {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  box-shadow: 0 1px 20px rgba(0, 0, 0, 0.08);
  border-bottom: 1px solid rgba(27, 121, 191, 0.08);
}

.navbar__inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 100%;
  gap: var(--space-xl);
}

/* Logo */
.navbar__logo {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  z-index: 10;
}

.navbar__logo-icon {
  flex-shrink: 0;
}

.navbar__logo-text {
  display: flex;
  flex-direction: column;
}

.navbar__logo-name {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 800;
  letter-spacing: 1px;
  color: var(--rs-white);
  transition: color var(--transition-base);
}

.navbar--scrolled .navbar__logo-name {
  color: var(--rs-dark);
}

.navbar__logo-tagline {
  font-size: 0.65rem;
  font-weight: 600;
  letter-spacing: 2px;
  color: rgba(255, 255, 255, 0.7);
  text-transform: uppercase;
  transition: color var(--transition-base);
}

.navbar--scrolled .navbar__logo-tagline {
  color: var(--rs-blue);
}

/* Nav Links */
.navbar__links {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
}

.navbar__links > li {
  position: relative;
}

.navbar__link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  padding: 8px 16px;
  font-size: var(--fs-small);
  font-weight: 500;
  color: rgba(255, 255, 255, 0.85);
  border-radius: var(--radius-full);
  transition: all var(--transition-base);
  cursor: pointer;
}

.navbar--scrolled .navbar__link {
  color: var(--rs-gray-600);
}

.navbar__link:hover {
  color: var(--rs-white);
  background: rgba(255, 255, 255, 0.12);
}

.navbar--scrolled .navbar__link:hover {
  color: var(--rs-blue);
  background: rgba(27, 121, 191, 0.08);
}

.navbar__link--active {
  color: var(--rs-white) !important;
  background: rgba(255, 255, 255, 0.15);
}

.navbar--scrolled .navbar__link--active {
  color: var(--rs-blue) !important;
  background: rgba(27, 121, 191, 0.1);
}

.navbar__chevron {
  transition: transform var(--transition-base);
}

.navbar__links > li:hover .navbar__chevron {
  transform: rotate(180deg);
}

/* Dropdown */
.navbar__dropdown {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%) translateY(8px);
  min-width: 300px;
  background: var(--rs-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  border: 1px solid var(--rs-gray-200);
  padding: var(--space-sm);
  opacity: 0;
  visibility: hidden;
  transition: all var(--transition-base);
  pointer-events: none;
}

.navbar__links > li:hover .navbar__dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
  pointer-events: auto;
}

.navbar__dropdown-item {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  padding: var(--space-md) var(--space-lg);
  border-radius: var(--radius-md);
  transition: all var(--transition-base);
}

.navbar__dropdown-item:hover {
  background: rgba(27, 121, 191, 0.06);
}

.navbar__dropdown-icon {
  font-size: 1.5rem;
  flex-shrink: 0;
}

.navbar__dropdown-label {
  display: block;
  font-weight: 600;
  font-size: var(--fs-small);
  color: var(--rs-dark);
}

.navbar__dropdown-desc {
  display: block;
  font-size: var(--fs-xs);
  color: var(--rs-gray-500);
  margin-top: 2px;
}

/* Actions */
.navbar__actions {
  display: flex;
  align-items: center;
  gap: var(--space-md);
}

.navbar__phone {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-small);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.85);
  transition: color var(--transition-base);
}

.navbar--scrolled .navbar__phone {
  color: var(--rs-gray-600);
}

.navbar__phone:hover {
  color: var(--rs-red);
}

/* Mobile Toggle */
.navbar__toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  gap: 5px;
  width: 40px;
  height: 40px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 8px;
  z-index: 10;
}

.navbar__toggle-bar {
  display: block;
  width: 100%;
  height: 2px;
  background: var(--rs-white);
  border-radius: 2px;
  transition: all var(--transition-base);
}

.navbar--scrolled .navbar__toggle-bar {
  background: var(--rs-dark);
}

.navbar--open .navbar__toggle-bar:nth-child(1) {
  transform: rotate(45deg) translate(5px, 5px);
}

.navbar--open .navbar__toggle-bar:nth-child(2) {
  opacity: 0;
}

.navbar--open .navbar__toggle-bar:nth-child(3) {
  transform: rotate(-45deg) translate(5px, -5px);
}

/* Mobile Menu */
.navbar__mobile {
  position: absolute;
  top: var(--nav-height);
  left: 0;
  right: 0;
  height: calc(100vh - var(--nav-height));
  background: var(--rs-white);
  overflow-y: auto;
  z-index: 999;
}

.navbar__mobile-inner {
  padding: var(--space-xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
}

.navbar__mobile-link {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  padding: var(--space-md) var(--space-lg);
  border-radius: var(--radius-md);
  font-weight: 500;
  color: var(--rs-gray-600);
  transition: all var(--transition-base);
}

.navbar__mobile-link:hover,
.navbar__mobile-link--active {
  background: rgba(27, 121, 191, 0.08);
  color: var(--rs-blue);
}

.navbar__mobile-icon {
  font-size: 1.25rem;
}

.navbar__mobile-cta {
  margin-top: var(--space-xl);
  padding-top: var(--space-xl);
  border-top: 1px solid var(--rs-gray-200);
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}

.navbar__mobile-phone {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-sm);
  padding: var(--space-md);
  font-weight: 600;
  color: var(--rs-blue);
  border: 2px solid var(--rs-blue);
  border-radius: var(--radius-full);
}

/* Mobile transition */
.mobile-menu-enter-active,
.mobile-menu-leave-active {
  transition: all 0.3s ease;
}

.mobile-menu-enter-from,
.mobile-menu-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}

@media (max-width: 1024px) {
  .navbar__links,
  .navbar__actions {
    display: none;
  }

  .navbar__toggle {
    display: flex;
  }
}
</style>
