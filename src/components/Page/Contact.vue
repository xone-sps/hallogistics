<template>
	<div>
		<div class="section">
			<div class="container">
                <div class="margin-top-h">
                    <div class="section-title margin-bottom-40px">
                     <div class="columns justify-content-center has-text-centered">
                        <div class="column is-8">
                           <div class="h2">{{title}}</div>
                           <div class="des">{{description}}</div>
                       </div>
                   </div>
               </div>
               <div class="columns">
                <div class="column">
                    <div><h3>Phone: 20 55538210 / 2055538211</h3> </div>
                    <div><h3>Email: hal.lao.2008@hotmail.com</h3></div>
                    <div><h3>Adress: ບ້ານຮ່ອງຄ້າ, ເມືອງຈັນທະບູລີ, ນະຄອນຫຼວງວຽງຈັນ</h3></div>
                </div>
            </div>
            <h1>Google map</h1>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.9597462972524!2d102.60344451436116!3d17.98060969015831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312469f1c0fdb747%3A0xb2f554cf5b06d32c!2sHAL%20logistic!5e0!3m2!1sen!2sla!4v1569390800372!5m2!1sen!2sla" width="600" height="450" style="border:0;" allowfullscreen=""
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                ></iframe>
            </div>
        </div>
    </div>
</div>
</div>
</template>

<script>
export default{
  data (){
     return {
        title:'ຕິດຕໍ່ພວກເຮົາ',
        description: 'ຕິດຕໍ່ພວກເຮົາ'
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