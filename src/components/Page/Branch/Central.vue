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
							<div class="padding-25px">
								<a href="#" class="nile-bottom sm-block">ເບິ່ງລາຍລະອຽດ</a>
							</div>
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
import vangvieng from '@/assets/images/branchs/central/br_vangvieng.jpeg';
import phonhung from '@/assets/images/branchs/central/br_phonehong.jpeg';
import parksun from '@/assets/images/branchs/central/br_parksun.jpeg';

export default{
// name:'Vientiane'
data() {
	return {
		title:'ສາຂາ ພາກກາງ',
		description:'ປັດຈຸບັນນີ້ໃນພາກກາງ ພວກເຮົາມີຈຸດບໍລິການ 3 ສາຂາ ທ່ານສາມາດຝາກເຄື່ອງໄດ້ທຸກສາຂາທີ່ຢູ່ໃກ້ບ້ານທ່ານ! ແລະ ຮັບເຖິງທີ່ສົ່ງເຖິງບ່ອນສະເພາະເຂດບໍລິການທີ່ກຳນົດໃນລາຍລະອຽດຂອງແຕ່ລະສາຂາ',

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
		]
	}

}
}

</script>