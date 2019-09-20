<template>
		  <div class="section branch">
     <div class="container">
        <!-- Title -->
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
        <div class="column is-4" v-for="(item, indx) in items" :key="indx">
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

<div class="has-text-centered">
    <a href="#" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
</div>
</div>
</div>
</template>


<script>
import dongdork from '@/assets/images/branchs/vientiane/br_dongdork.jpeg';
import hongkha from '@/assets/images/branchs/vientiane/br_hongkha.jpeg';
import vattay from '@/assets/images/branchs/vientiane/br_vattay.jpeg';
import jinaymo from '@/assets/images/branchs/vientiane/br_jinaymo.jpeg';
import khuadin from '@/assets/images/branchs/vientiane/br_jinaymo.jpeg';
import parkthang from '@/assets/images/branchs/vientiane/br_parkthang.jpeg';
import phonephanao from '@/assets/images/branchs/vientiane/br_phonephanao.jpeg';
import phonthun from '@/assets/images/branchs/vientiane/br_phonethun.jpeg';
import sikhai from '@/assets/images/branchs/vientiane/br_sikhai.jpeg';
import talatsao from '@/assets/images/branchs/vientiane/br_talatsao.jpeg';
import xungjieng from '@/assets/images/branchs/vientiane/br_xungjieng.jpeg';


	export default{
// name:'Vientiane'
			data() {
return {
title:'ສາຂາ ແລະ ໜ່ວຍບໍລິການ ນະຄອນຫຼວງວຽງຈັນ',
description:'In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue, eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur bibendum.',

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
				name: 'ສາຂາຂົວດິນ',
				phone: '0209334343',
				image: khuadin,
				 googlemap:'map',
				satus: 'default',
			},
									 {
              	id: 6,
				name: 'ສາຂາປາກທາງ',
				phone: '0209334343',
				image: parkthang,
				 googlemap:'map',
				satus: 'default',
			},
									 {
              	id: 7,
				name: 'ສາຂາໂພນພະເນົາ',
				phone: '0209334343',
				image: phonephanao,
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
				name: 'ສາຂາຕະຫຼາດເຊົ້າ',
				phone: '0209334343',
				image: talatsao,
				 googlemap:'map',
				satus: 'default',
			},
			 {
              	id: 11,
				name: 'ສາຂາຊັງຈຽງ',
				phone: '0209334343',
				image: xungjieng,
				 googlemap:'map',
				satus: 'default',
			},

			
				]
}

			}
	}

</script>