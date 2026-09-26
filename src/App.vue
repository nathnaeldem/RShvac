<template>
  <div id="rs-app">
    <Navbar :currentPage="currentPage" @navigate="navigateTo" />
    <main>
      <transition name="page-fade" mode="out-in">
        <component :is="currentPageComponent" @navigate="navigateTo" :key="currentPage" />
      </transition>
    </main>
    <Footer @navigate="navigateTo" />
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
import Footer from './components/FooterSection.vue'
import HomePage from './components/HomePage.vue'
import AboutPage from './components/AboutPage.vue'
import ServicesPage from './components/ServicesPage.vue'
import ResidentialPage from './components/ResidentialPage.vue'
import CommercialPage from './components/CommercialPage.vue'
import AirQualityPage from './components/AirQualityPage.vue'
import FinancingPage from './components/FinancingPage.vue'
import ContactPage from './components/ContactPage.vue'

export default {
  name: 'App',
  components: {
    Navbar,
    Footer,
    HomePage,
    AboutPage,
    ServicesPage,
    ResidentialPage,
    CommercialPage,
    AirQualityPage,
    FinancingPage,
    ContactPage
  },
  data() {
    return {
      currentPage: 'home'
    }
  },
  computed: {
    currentPageComponent() {
      const map = {
        home: 'HomePage',
        about: 'AboutPage',
        services: 'ServicesPage',
        residential: 'ResidentialPage',
        commercial: 'CommercialPage',
        'air-quality': 'AirQualityPage',
        financing: 'FinancingPage',
        contact: 'ContactPage'
      }
      return map[this.currentPage] || 'HomePage'
    }
  },
  methods: {
    navigateTo(page) {
      this.currentPage = page
      window.scrollTo({ top: 0, behavior: 'smooth' })
    }
  }
}
</script>

<style>
#rs-app {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

#rs-app main {
  flex: 1;
}

.page-fade-enter-active,
.page-fade-leave-active {
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.page-fade-enter-from {
  opacity: 0;
  transform: translateY(10px);
}

.page-fade-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>
