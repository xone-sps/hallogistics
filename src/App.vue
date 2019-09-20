<template>
  <div id="app">
<div class="is-hidden-mobile"><Header/></div>
<Navbar/>
    <router-view/>
    <Footer/>
  </div>
</template>
<script>
import Header from '@/components/Partial/Header.vue';
import Navbar from '@/components/Partial/Navbar.vue';
import Footer from '@/components/Partial/Footer.vue';

export default {
  name: 'App',

components: {
 Header,
 Navbar,
 Footer
}
}
</script>

  <style>
  @import './assets/css/style.css';
</style>
