<template>
<div>
	<section class="section">
		<div class="container">
			    <div class="margin-top-h">
			    	<div class="section-title margin-bottom-40px">
                <div class="columns">
                    <div class="column has-text-centered">
                     <div class="icon text-main-color"><i class="fa fa-money"></i></div>
                 </div>
             </div>
             <div class="columns justify-content-center has-text-centered">
                <div class="column">
                   <div class="h2">ລາຄາຂົນສົ່ງຕ່າງແຂວງ</div>
                   <div class="des">ລາຄານີ້ແມ່ນໄລ່ຄ່າຂົນສົ່ງຕ່າງແຂວງພາຍໃນປະເທດ</div>
               </div>
           </div>
       </div>
			<div class="bui-u-mb--xlarge www-u-Overflow--hidden">
				<div class="www-Table-wrap PricingTable-wrap">
					<table class="www-Table PricingTable">
						<thead>
							<tr>
								<th>
									ປະເພດບໍລິການ
								</th>

								<th>
									ຄ່າຂົນສົ່ງຕ່າງແຂວງ/ກີບ
								</th>

								<th>
									ລາຄາກ່ອງ(ກີບ)
								</th>
								<th>ຄິດໄລ່ລາຄາ</th>
							</tr>
						</thead>

						<tbody>
							<tr v-for="price in prices">
								<td v-html="price.name">
									<!-- 										{{price.name}} -->
								</td>

								<td>
									<strong>{{price.price}}</strong>
								</td>

								<td v-html="price.packgage">
								</td>

								<td>
									<a @click="openModal()" type="button" class="button is-danger is-rounded">ຄິດໄລ່</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
					<modal name="calculate"
     :width="400"
     :height="450"
     :clickToClose="true"
     :scrollable="true"
	>
		<div class="modals-calculate">
			<div class="has-text-centered">
				<img style="max-height: 56px;" src="@/assets/logo.png">
								<h2>ຄິດໄລ່ລາຄາ</h2>
			</div>
			<div class="field">
				<label class="label">ລວງຍາວ</label>
				<div class="control">
					<input type="text" class="input is-rounded" placeholder="ລວງຍາວ">
				</div>
			</div>
			<div class="field">
				<label class="label">ລວງກ້ວາງ</label>
				<div class="control">
					<input type="text" class="input is-rounded" placeholder="ລວງກ້ວາງ">
				</div>
			</div>
			<div class="field">
				<label class="label">ລວງສູງ</label>
				<div class="control">
					<input type="text" class="input is-rounded" placeholder="ລວງສູງ">
				</div>
			</div>
			<div class="has-text-centered">
				<a @click="hideModal()" class="button is-danger is-rounded">ຍົກເລີກ</a>
				<a href="#" class="button is-info is-rounded">ຄິດໄລ່</a>
			</div>

		</div>
	</modal>

	<!-- Over zone -->
    <div class="section-title margin-bottom-40px">
			                 <div class="columns justify-content-center has-text-centered">
                <div class="column">
                   <div class="h2">ລາຄາຂົນສົ່ງ ພາກເໜືອ  &#8646; ພາກໃຕ້</div>
                   <div class="des">ແພກເກດນີ້ແມ່ນໄລ່ລາຄາຂ້າມພາກເຊັ່ນ: ຫຼວງພະບາງ ຫາ ຈຳປາສັກ ..., ເຊິ່ງລາຍລະອຽດແມ່ນໄລ່ຕາມຂ້າງລຸ່ມນີ້.</div>
               </div>
           </div>
          </div>
<!-- Table Over zone -->
			<div class="bui-u-mb--xlarge www-u-Overflow--hidden">
				<div class="www-Table-wrap PricingTable-wrap">
					<table class="www-Table PricingTable over">
						<thead>
							<tr>
								<th>
									ປະເພດບໍລິການ
								</th>

								<th>
									ຄ່າຂົນສົ່ງຕ່າງແຂວງ/ກີບ
								</th>

								<th>
									ລາຄາກ່ອງ(ກີບ)
								</th>
								<th>ຄິດໄລ່ລາຄາ</th>
							</tr>
						</thead>

						<tbody>
							<tr v-for="overPrice in overPrices">
								<td v-html="overPrice.name">
									<!-- 										{{price.name}} -->
								</td>

								<td>
									<strong>{{overPrice.price}}</strong>
								</td>

								<td v-html="overPrice.packgage">
								</td>

								<td>
									<a @click="openModal()" type="button" class="button is-danger is-rounded">ຄິດໄລ່</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			    </div>
		</div>
	</section>
</div>
</template>

<script>
export default {
data (){
	return {
		prices: [
		{
			id: 1,
			name: '<strong color="red">Mini </strong>ຍາວ+ກ້ວາງ+ສຸງ < 45cm	<br> ນ້ຳໜັກບໍ່ເກີນ 1Kg ',
			price: '12,000',
			packgage: '<del><span>5,000<del><span>'
		},
		{
			id: 2,
			name: '<strong>S</strong> ຍາວ+ກ້ວາງ+ສຸງ < 45cm <br> ນ້ຳໜັກບໍ່ເກີນ 3Kg ',
			price: '15,000',
			packgage: '<del><span>5,000</span><del>'
		},
		{
			id: 3,
			name: '<strong>S+</strong> ຍາວ+ກ້ວາງ+ສຸງ < 70cm <br> ນ້ຳໜັກບໍ່ເກີນ 5Kg ',
			price: '20,000',
			packgage: '6,000'
		},
		{
			id: 4,
			name: '<strong>M</strong> ຍາວ+ກ້ວາງ+ສຸງ < 90cm <br> ນ້ຳໜັກບໍ່ເກີນ 10Kg ',
			price: '30,000',
			packgage: '10,000'
		},
		{
			id: 5,
			name: '<strong>M+</strong> ຍາວ+ກ້ວາງ+ສຸງ < 105cm <br> ນ້ຳໜັກບໍ່ເກີນ 15Kg ',
			price: '40,000',
			packgage: '12,000'
		},
		{
			id: 6,
			name: '<strong>L</strong> ຍາວ+ກ້ວາງ+ສຸງ < 120cm <br> ນ້ຳໜັກບໍ່ເກີນ 20Kg ',
			price: '50,000',
			packgage: '15,000'
		},
		{
			id: 7,
			name: '<strong>XL</strong> ຍາວ+ກ້ວາງ+ສຸງ < 150cm <br> ນ້ຳໜັກບໍ່ເກີນ 25Kg ',
			price: '60,000',
			packgage: '19,000'
		},
		],
			overPrices: [
			{
			id: 1,
			name: '<strong color="red">Mini </strong>ຍາວ+ກ້ວາງ+ສຸງ < 45cm	<br> ນ້ຳໜັກບໍ່ເກີນ 1Kg ',
			price: '25,000',
			packgage: '<del><span>5,000<del><span>'
		},
		{
			id: 2,
			name: '<strong>S</strong> ຍາວ+ກ້ວາງ+ສຸງ < 45cm <br> ນ້ຳໜັກບໍ່ເກີນ 3Kg ',
			price: '30,000',
			packgage: '<del><span>5,000</span><del>'
		},
		{
			id: 3,
			name: '<strong>S+</strong> ຍາວ+ກ້ວາງ+ສຸງ < 70cm <br> ນ້ຳໜັກບໍ່ເກີນ 5Kg ',
			price: '40,000',
			packgage: '6,000'
		},
		{
			id: 4,
			name: '<strong>M</strong> ຍາວ+ກ້ວາງ+ສຸງ < 90cm <br> ນ້ຳໜັກບໍ່ເກີນ 10Kg ',
			price: '60,000',
			packgage: '10,000'
		},
		{
			id: 5,
			name: '<strong>M+</strong> ຍາວ+ກ້ວາງ+ສຸງ < 105cm <br> ນ້ຳໜັກບໍ່ເກີນ 15Kg ',
			price: '80,000',
			packgage: '12,000'
		},
		{
			id: 6,
			name: '<strong>L</strong> ຍາວ+ກ້ວາງ+ສຸງ < 120cm <br> ນ້ຳໜັກບໍ່ເກີນ 20Kg ',
			price: '100,000',
			packgage: '15,000'
		},
		{
			id: 7,
			name: '<strong>XL</strong> ຍາວ+ກ້ວາງ+ສຸງ < 150cm <br> ນ້ຳໜັກບໍ່ເກີນ 25Kg ',
			price: '120,000',
			packgage: '19,000'
		},
	]
}
	},

methods: {
	openModal () {
		this.$modal.show('calculate');
	},
	hideModal () {
		this.$modal.hide('calculate');
	}
}
}
</script>


<style type="text/css" media="screen">
.modals-calculate{
margin:40px;
}
.www-Table.PricingTable.over thead tr{
background-color: #F52F30;
    border-bottom: 1px solid #e53935;
}

.www-Table.PricingTable.over thead th {

    color: #fff;
}
</style>