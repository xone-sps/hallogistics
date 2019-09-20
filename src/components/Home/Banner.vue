<template>
	<div>
		<div>
			<img :src="image" alt="">
		</div>
	</div>
</template>

<script>
import image1 from '@/assets/images/slider/slider1.jpg';
	

	export default{

        data(){
        	return {
        		image:image1
        	}
        }

	}
</script>