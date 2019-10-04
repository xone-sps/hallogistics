<template>
	<div class="section branch">
		<section class="section">
			<div class="container">
				<!-- Title -->
				<div class="margin-top-h">
					<div class="section-title margin-bottom-40px">
<!--             <div class="columns">
            <div class="column has-text-centered">
               <div class="icon">
                <img src="@/assets/images/icons/service-dark-4.png" alt=""></div>

            </div>
        </div>
    -->            <div class="columns justify-content-center has-text-centered">
    	<div class="column is-8">
    		<div class="h2">{{title}}</div>
    		<div class="des">{{description}}</div>
    	</div>
    </div>
</div>
<!-- // End Title -->

<div class="columns is-multiline">
	<!-- item -->
	<div class="column is-4" v-for="item in items" :key="item.id">
		<div class="price-table branch">
			<img :src="item.image" alt="">
<!--                 <div class="title main-color branch">{{item.name}}</div>
            <div class="per-mile">ລາຍລະອຽດ</div>
            <ul class="elements">
                <li>
                    <strong>ຫຼວງພະບາງ</strong> (ບ້ານ ນາຊາງ, ນະຄອນຫຼວງພະບາງ)</li>
                <li><strong>ອຸດົມໄຊ</strong> (ບ້ານ ວັງໄຮ, ເມືອງ ໄຊ)</li>
                <li><strong>ຫຼວງນ້ຳທາ</strong> (ບ້ານ ໜອງບົວວຽງ, ເມືອງຫຼວງນ້ຳທາ)</li>
                 <li><strong>ບໍ່ແກ້ວ</strong> (ບ້ານ ປ່າອ້ອຍ, ເມືອງ ຫ້ວຍຊາຍ)</li>
                  <li><strong>ໄຊຍະບູລີ </strong> (ບ້ານ ສີມຸງຄຸນ, ເມືອງ ໄຊຍະບູລີ)</li>
                   <li><strong>ຊຽງຂວາງ</strong> (ບ້ານ ໂພນງານມໃຕ້, ເມືອງ ແປກ)</li>
                   <li><strong>ຫົວພັນ</strong> (ບ້ານ ທາດເມືອງ, ເມືອງ ຊຳເໜືອ)</li>
                   <li><strong>ຜົງສາລີ</strong> (ໄວໆນີ້)</li>
               </ul> -->
               <div class="padding-25px">
               	<a href="#" class="nile-bottom sm-block">ເບິ່ງລາຍລະອຽດ</a>
               </div>
           </div>
       </div>
       <!-- // end item -->
   </div>
<!-- <div class="culumns">
<div class="column">
	    <div v-if="selectedImage" max-width="85vw">
<img :src="selectedImage" alt="" width="1000px" @click.stop="selectedImage = null">
<hr>
</div>

<div v-for="url in items">
<img :src="url.image" width="100px" @click="zoom(url)">
</div>
</div>
</div>
-->

<div id="my-modal" class="modal fade">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Item Clicked!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		<!-- 		<p>Name: {{ name }}</p>
				<p>Description: {{ description }}</p> -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- codes ommited -->
<div>
<!-- 	<li v-for="item in items">
		<span>{{ item.itemName }}</span>
		<span>{{ item.itemPrice }}</span>
		<span><button @click="itemClicked(item)">ShowMore</button></span>
	</li> -->
</div>

</div>
</div>
</section>
</div>
</template>
<script>
import dongdork from '@/assets/images/branchs/vientiane/br_dongdork.jpeg';
import hongkha from '@/assets/images/branchs/vientiane/br_hongkha.jpeg';
import vattay from '@/assets/images/branchs/vientiane/br_vattay.jpeg';
import jinaymo from '@/assets/images/branchs/vientiane/br_jinaymo.jpeg';
import khuadin from '@/assets/images/branchs/vientiane/br_khuadin.jpeg';
import parkthang from '@/assets/images/branchs/vientiane/br_parkthang.jpeg';
import phonephanao from '@/assets/images/branchs/vientiane/br_phonephanao.jpeg';
import phonthun from '@/assets/images/branchs/vientiane/br_phonethun.jpeg';
import sikhai from '@/assets/images/branchs/vientiane/br_sikhai.jpeg';
import talatsao from '@/assets/images/branchs/vientiane/br_talatsao.jpeg';
import xungjieng from '@/assets/images/branchs/vientiane/br_xungjieng.jpeg';
import huakhua from '@/assets/images/branchs/vientiane/br_huakhua.jpeg';
export default{
// name:'Vientiane'
data() {
	return {
		title:'ສາຂາ ແລະ ໜ່ວຍບໍລິການ ນະຄອນຫຼວງວຽງຈັນ',
		description:'ປັດຈຸບັນນີ້ໃນນະຄອນຫຼວງວຽງຈັນ ພວກເຮົາມີຈຸດບໍລິການ 9 ສາຂາ ແລະ 3 ໜ່ວຍບໍລິການ ທ່ານສາມາດຝາກເຄື່ອງໄດ້ທຸກສາຂາທີ່ຢູ່ໃກ້ບ້ານທ່ານ! ແລະ ຮັບເຖິງທີ່ສົ່ງເຖິງບ່ອນສະເພາະເຂດບໍລິການທີ່ກຳນົດໃນລາຍລະອຽດຂອງແຕ່ລະສາຂາ',
		selectedImage:'',

		items: [
		{
			id: 1,
			name: 'ສາຂາຮ່ອງຄ້າ',
			phone: '0209334343',
			image: hongkha,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 2,
			name: 'ສາສາດົງໂດກ',
			phone: '0209334343',
			image: dongdork,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 3,
			name: 'ສາຂາວັດໄຕ',
			phone: '0209334343',
			image: vattay,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 4,
			name: 'ສາຂາຈີ່ນາຍໂມ້',
			phone: '0209334343',
			image: jinaymo,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 5,
			name: 'ສາຂາປາກທາງ',
			phone: '0209334343',
			image: parkthang,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 6,
			name: 'ສາຂາໂພນພະເນົາ',
			phone: '0209334343',
			image: phonephanao,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 7,
			name: 'ສາຂາຊັງຈຽງ',
			phone: '0209334343',
			image: xungjieng,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 8,
			name: 'ສາຂາໂພນທັນ',
			phone: '0209334343',
			image: phonthun,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 9,
			name: 'ສາຂາສີໄຄ',
			phone: '0209334343',
			image: sikhai,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 10,
			name: 'ໜ່ວຍບໍລິການຕະຫຼາດເຊົ້າ',
			phone: '0209334343',
			image: talatsao,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 11,
			name: 'ໜ່ວຍບໍລິການຕະຫຼາດຫົວ',
			phone: '0209334343',
			image: huakhua,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 12,
			name: 'ສາຂາຂົວດິນ',
			phone: '0209334343',
			image: khuadin,
			googlemap:'map',
			satus: 'default',
		},

		
		]
	}

},
methods: {
	zoom (url){
		this.selectedImage = url;
	}
}
}

</script>