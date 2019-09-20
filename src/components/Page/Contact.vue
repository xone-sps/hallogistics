<template>
	<div>
		<div class="section">
			<div class="container">
		        <div class="section-title margin-bottom-40px">
       <div class="columns justify-content-center has-text-centered">
                <div class="column is-8">
                 <div class="h2">{{title}}</div>
                 <div class="des">{{description}}</div>
             </div>
         </div>
     </div>
     <div class="columns">
     	<div class="column is-6">
     		<div>Phone</div>
     		<div>Email:</div>
     		<div>Adress</div>
     	</div>
     	  	<div class="column is-6">
     		<ul>
     			<li>Contact</li>
     		</ul>
     	</div>
     </div>
		<h1>Contact us</h1>
		                <div class="map">
                    <iframe
                        src="https://maps.google.com/maps?width=100%&amp;height=900&amp;hl=en&amp;q=Laos%2C%20Dongdork+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                    ></iframe>
                </div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data (){
			return {
            title:'ກຽ່ວກັບພວກເຮົາ',
            description: 'ກຽ່ວກັບພວກເຮົາ'
			}
		}
	}
</script>
<style type="text/css" media="screen">
	.map >iframe {
    width: 100%;
    height: 400px;
}
</style>