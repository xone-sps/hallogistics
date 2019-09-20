<template>
	<div>
		<h2 v-bind:class="{active: isActive}">Blog</h2>
	</div>
</template>


<script>
	export default{
		data() {
			return{
				isActive: true,
			hasError: false,
			}
		}
	}
</script>

