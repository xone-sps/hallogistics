<template>
	<div id="app">
		<div class="is-hidden-mobile"><Header/></div>
		<Navbar/>
		<div>
					<router-view/>
		</div>
		<Footer/>
		       <Sidebar/>
	</div>
</template>
<script>
	import {mapState, mapGetters, mapActions, mapMutations} from 'vuex'
	import Header from '@/components/Partial/Header.vue';
	import Navbar from '@/components/Partial/Navbar.vue';
	import Footer from '@/components/Partial/Footer.vue';
	import Sidebar from '@/components/Partial/Sidebar.vue';

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
				Sidebar
			},
			computed: {
				...mapState(['isMobile']),
			},
		}
	</script>
	<style>
	@import './assets/css/style.css';
</style>
