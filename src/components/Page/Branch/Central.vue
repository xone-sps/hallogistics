<template>
		  <div class="section branch">
     <div class="container">
        <!-- Title -->
        <div class="section-title margin-bottom-40px">
       <div class="columns justify-content-center has-text-centered">
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
</div>
</div>
</template>


<script>
import vangvieng from '@/assets/images/branchs/central/br_vangvieng.jpeg';
import phonhung from '@/assets/images/branchs/central/br_phonehong.jpeg';
import parksun from '@/assets/images/branchs/central/br_parksun.jpeg';
import savannaket from '@/assets/images/branchs/central/br_svk.jpeg';
import khammuan from '@/assets/images/branchs/central/br_khm.jpeg';

	export default{
// name:'Vientiane'
			data() {
return {
title:'ສາຂາ ພາກກາງ',
description:'In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue, eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur bibendum.',

					items: [
              {
              	  id: 1,
				name: 'ສາຂາວັງວຽງ',
				phone: '0209334343',
				image: vangvieng,
			    googlemap:'map',
				satus: 'default',
			},
			 {
              	id: 2,
				name: 'ສາສາໂພນໂຮງ - ໂພນໝີ',
				phone: '0209334343',
				image: phonhung,
				 googlemap:'map',
				satus: 'default',
			},
			 {
              	id: 3,
				name: 'ສາຂາປາກຊັນ',
				phone: '0209334343',
				image: parksun,
				 googlemap:'map',
				satus: 'default',
			},
						 {
              	id: 4,
				name: 'ສາຂາຄຳມ່ວນ',
				phone: '0209334343',
				image: khammuan,
				 googlemap:'map',
				satus: 'default',
			},
						 {
              	id: 5,
				name: 'ສາຂາສະຫວັນນະເຂດ',
				phone: '0209334343',
				image: savannaket,
				 googlemap:'map',
				satus: 'default',
			},
				]
}

			}
	}

</script>