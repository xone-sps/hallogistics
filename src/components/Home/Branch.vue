<template>
	<div>
   <div class="container">
    <!-- Title -->
    <div class="section-title margin-bottom-40px">
      <div class="columns">
        <div class="column has-text-centered">
         <div class="icon">
          <img src="@/assets/images/icons/service-dark-4.png" alt=""></div>

        </div>
      </div>
      <div class="columns justify-content-center has-text-centered">
        <div class="column is-8">
         <div class="h2">{{title}}</div>
         <div class="des">{{desc}}</div>
       </div>
     </div>
   </div>
   <!-- // End Title -->

   <div class="columns is-multiline">
    <div class="column is-3" v-for="item in items" >
      <div class="price-table">
        <div class="title main-color branch">{{item.zone}}</div>
        <div class="per-mile">ລາຍລະອຽດ</div>
        <ul class="elements">
          <li v-for="detail in item.details">
            <strong>{{detail.name}}</strong> {{detail.detail}}
          </li>
          </ul>
          <div class="padding-25px">
            <a href="#" class="nile-bottom sm-block">ເບິ່ງລາຍລະອຽດ</a>
          </div>
        </div>
      </div>
        <!-- item -->
        <div class="column is-3 col-md-6">
          <div class="price-table active">
            <div class="title main-color branch">ນະຄອນຫຼວງວຽວຈັນ</div>
            <div class="per-mile">ລາຍລະອຽດ</div>
            <ul class="elements">
             <li>ຍາວ + ກວ້າງ + ສູງ < 70 cm</li>
             <li>ນ້ຳໜັກ < 5 kg </li>
             <li>Warehousing</li>
             <li>ລາຄາກ່ອງ 6,000 ₭</li>
             <li>24/7 support</li>
           </ul>
           <div class="padding-25px">
            <a href="#" class="nile-bottom sm-block">ເບິ່ງລາຍລະອຽດ</a>
          </div>
        </div>
      </div>
      <!-- // end item -->
      <!-- item -->
      <div class="column is-3 col-md-6">
        <div class="price-table">
          <div class="title main-color branch">ພາກກາງ</div>
          <div class="per-mile">ລາຍລະອຽດ</div>
          <ul class="elements">
           <li>ຍາວ + ກວ້າງ + ສູງ < 45 cm</li>
           <li>ນ້ຳໜັກ < 3 kg </li>
           <li>Warehousing</li>
           <li>ລາຄາກ່ອງ   <del>
            <span class="amount">5,000 ₭</span>
          </del> Free</li>
          <li>24/7 support</li>
        </ul>
        <div class="padding-25px">
          <a href="#" class="nile-bottom sm-block">ເບິ່ງລາຍລະອຽດ</a>
        </div>
      </div>
    </div>
    <!-- // end item -->

    <!-- item -->
    <div class="column is-3 col-md-6">
      <div class="price-table">
        <div class="title main-color branch">ພາກໃຕ້</div>
        <div class="per-mile">ລາຍລະອຽດ</div>
        <ul class="elements">
          <li>ຍາວ + ກວ້າງ + ສູງ < 90 cm</li>
          <li>ນ້ຳໜັກ < 10 kg </li>
          <li>Warehousing</li>
          <li>ລາຄາກ່ອງ 10,000 ₭</li>
          <li>24/7 support</li>
        </ul>
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
export default {
  data (){

    return {
      title:'ເຂດບໍລິການ',
      desc: 'In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue, eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur bibendum. ',
      items:[
      {
        id: 1,
        zone: 'ພາກເໜືອ',
        isActive: false,
        details:[
        {
          name: 'ຫຼວງພະບາງ',
          detail: '(ບ້ານ ນາຊາງ, ນະຄອນຫຼວງພະບາງ)',
        },
        {
          name: 'ອຸດົມໄຊ',
          detail: '(ບ້ານ ວັງໄຮ, ເມືອງ ໄຊ)',
        },
        {
          name: 'ຫຼວງນ້ຳທາ',
          detail: '(ບ້ານ ໜອງບົວວຽງ, ເມືອງຫຼວງນ້ຳທາ)',
        },                              {
          name: 'ບໍ່ແກ້ວ',
          detail: '(ບ້ານ ປ່າອ້ອຍ, ເມືອງ ຫ້ວຍຊາຍ)',
        },
        {
          name: 'ໄຊຍະບູລີ',
          detail: '(ບ້ານ ສີມຸງຄຸນ, ເມືອງ ໄຊຍະບູລີ)',
        },
        {
          name: 'ຊຽງຂວາງ',
          detail: '(ບ້ານ ໂພນງານມໃຕ້, ເມືອງ ແປກ)',
        },
        {
          name: 'ຫົວພັນ',
          detail: '(ບ້ານ ທາດເມືອງ, ເມືອງ ຊຳເໜືອ)',
        },
        {
          name: 'ຜົງສາລີ',
          detail: ' (ໄວໆນີ້)',
        },
        ]
      },
            {
        id: 2,
        zone: 'ນະຄອນຫຼວງວຽວຈັນ',
         isActive: true,
        details:[
        {
          name: 'ຮ່ອງຄ້າ',
          detail: '(ບ້ານ ຮ່ອງຄ້າ, ເມືອງຈັນທະບູລີ)',
        },
        {
          name: 'ດົງໂດກ',
          detail: '(ບ້ານ ສະພັງມຶກ, ເມືອງ ໄຊທານີ)',
        },
        {
          name: 'ວັດໄຕ',
          detail: '(ບ້ານວັດໄຕນ້ອຍ, ເມືອງສີໂຄດຕະບອງ)',
        },                              {
          name: 'ຈີ່ນາຍໂມ້',
          detail: '(ບ້ານຈອມເພັດ, ເມືອງສີສັດຕະນາກ)',
        },
        {
          name: 'ປາກທ້າງ',
          detail: '(ບ້ານປາກທ້າງ, ເມືອງສີໂຄດຕະບອງ)',
        },
        {
          name: 'ໂພນພະເນົາ',
          detail: '(ບ້ານ ໂພນພະເນົາ, ເມືອງໄຊເສດຖາ)',
        },
        {
          name: 'ໂພນທັນ',
          detail: '(ບ້ານໂພນທັນ, ເມືອງສີສັດຕະນາກ)',
        },
        {
          name: 'ຊັ່ງຈ່ຽງ',
          detail: ' (ບ້ານວັດໄຕນ້ອຍ, ເມືອງສີໂຄດຕະບອງ)',
        },
        {
                  name: 'ຕະຫຼາດເຊົ້າ',
          detail: ' (ບ້ານທັດສະດີ, ເມືອງຈັນທະບູລີ)',
        },
        ]
      },
            {
        id: 3,
        zone: 'ພາກກາງ',
        isActive: false,
        details:[
        {
          name: 'ວັງວຽງ',
          detail: '(ບ້ານ ເມືອງຊອງ, ແຂວງວຽງຈັນ)',
        },
        {
          name: 'ໂພນໂຮງ - ໂພນໝີ',
          detail: '(ບ້ານ ໂພນໝີ, ເມືອງ ວຽງຄຳ, ວຽງຈັນ)',
        },
        {
          name: 'ບໍລິຄຳໄຊ',
          detail: '(ບ້ານ ມີໄຊ, ເມືອງປາກຊັນ)',
        },                              {
          name: 'ຄຳມ່ວນ',
          detail: '(ບ້ານ ຈອມທອງ, ເມືອງ ທ່າແຂກ)',
        },
        {
          name: 'ສະຫວັນນະເຂດ',
          detail: '(ບ້ານ ນາເລົ່າ, ນະຄອນໄກສອນພົມວິຫານ)',
        },
        ]
      },
            {
        id: 4,
        zone: 'ພາກໃຕ້',
           isActive: false,
        details:[
        {
          name: 'ສາລະວັນ',
          detail: '(ບ້ານ ນາເຫຼັກ, ເມືອງສາລະວັນ)',
        },
        {
          name: 'ຈຳປາສັກ',
          detail: '(ບ້ານ ໂພນສະຫວັນ, ນະຄອນປາກເຊ)',
        },
        {
          name: 'ເຊກອງ',
          detail: '(ບ້ານ ວັດຫຼວງ, ເມືອງລະມາມ)',
        },                              {
          name: 'ອັດຕະປື',
          detail: '(ບ້ານ ຫຼັກສານ, ເມືອງ ສາມັກຄິໄຊ)',
        },
        ]
      },

      ]
    }
  }
}
</script>
