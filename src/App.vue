<template>
	<div id="app">
		<div class="nav-top">
			<Header class="top"/>
			<Navbar/>
		</div>
		<div class="margin-top:20px;">
			<router-view/>
		</div>
		<Footer/>
	</div>
</template>
<script>
import {mapState, mapGetters, mapActions, mapMutations} from 'vuex'
import Header from '@/components/Partial/Header.vue';
import Navbar from '@/components/Partial/Navbar.vue';
import Footer from '@/components/Partial/Footer.vue';

export default {
	name: 'App',
	data (){
		return {
			breakPoint: 0,
			windowHeight: 0,
			limitBreakPoint: 1023,
		}
	},
	components: {
		Header,
		Navbar,
		Footer,
	},
}
</script>
<style>
@import './assets/css/style.css';
</style>
