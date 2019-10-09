<template>
	<div class="section branch">
<section class="section">
			<div class="container">
			<div class="margin-top-h">
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
							<!--
							<div class="padding-25px">
								<a href="#" class="nile-bottom sm-block">ເບິ່ງລາຍລະອຽດ</a>
							</div> -->
						</div>
					</div>
					<!-- // end item -->
				</div>
			</div>
		</div>
</section>
	</div>
</template>
<script>
import borkoe from '@/assets/images/branchs/north/br_borkeo.jpeg';
import huaphan from '@/assets/images/branchs/north/br_huaphanh.jpeg';
import luangnamtha from '@/assets/images/branchs/north/br_lungnamtha.jpeg';
import lungphabang from '@/assets/images/branchs/north/br_lungphabang.jpeg';
import oudomxay from '@/assets/images/branchs/north/br_oudomxay.jpeg';
import xayabuli from '@/assets/images/branchs/north/br_xayabuli.jpeg';
import xiengkhuang from '@/assets/images/branchs/north/br_xiengkhuang.jpeg';

export default{
// name:'Vientiane'
data() {
	return {
		title:'ສາຂາ ພາກເໜືອ',
		description:'ປັດຈຸບັນນີ້ໃນພາກເໜືອ ພວກເຮົາມີຈຸດບໍລິການ 7 ສາຂາ ທ່ານສາມາດຝາກເຄື່ອງໄດ້ທຸກສາຂາທີ່ຢູ່ໃກ້ບ້ານທ່ານ! ແລະ ຮັບເຖິງທີ່ສົ່ງເຖິງບ່ອນສະເພາະເຂດບໍລິການທີ່ກຳນົດໃນລາຍລະອຽດຂອງແຕ່ລະສາຂາ, ສາຂາຜົງສາລີເປີດບໍລິການໃນໄວໆນີ້',

		items: [
		{
			id: 1,
			name: 'ສາຂາບໍ່ແກ້ວ',
			phone: '0209334343',
			image: borkoe,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 2,
			name: 'ສາສາຫົນພັນ',
			phone: '0209334343',
			image: huaphan,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 3,
			name: 'ສາຂາຫຼວງນ້ຳທາ',
			phone: '0209334343',
			image: luangnamtha,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 4,
			name: 'ສາຂາຫຼວງພະບາງ',
			phone: '0209334343',
			image: lungphabang,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 5,
			name: 'ສາຂາອຸດົມໄຊ',
			phone: '0209334343',
			image: oudomxay,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 6,
			name: 'ສາຂາໄຊຍະບູລີ',
			phone: '0209334343',
			image: xayabuli,
			googlemap:'map',
			satus: 'default',
		},
		{
			id: 7,
			name: 'ສາຂາຊຽງຂວາງ',
			phone: '0209334343',
			image: xiengkhuang,
			googlemap:'map',
			satus: 'default',
		},
		]
	}

}
}

</script>