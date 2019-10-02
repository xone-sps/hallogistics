<template>
  <div class="section branch">
   <div class="container">
<section class="section">
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
</section>
</div>
</div>
</template>
<script>
import savannaket from '@/assets/images/branchs/central/br_svk.jpeg';
import khammuan from '@/assets/images/branchs/central/br_khm.jpeg';
import salavan from '@/assets/images/branchs/south/br_salavan.jpeg';
import champasuk from '@/assets/images/branchs/south/br_champasuk.jpeg';
import attapue from '@/assets/images/branchs/south/br_attapue.jpeg';
import xekong from '@/assets/images/branchs/south/br_xekong.jpeg';


export default{
// name:'Vientiane'
data() {
  return {
    title:'ສາຂາ ພາກໃຕ້',
    description:'ປັດຈຸບັນນີ້ໃນພາກເໜືອ ພວກເຮົາມີຈຸດບໍລິການ 6 ສາຂາ ທ່ານສາມາດຝາກເຄື່ອງໄດ້ທຸກສາຂາທີ່ຢູ່ໃກ້ບ້ານທ່ານ! ແລະ ຮັບເຖິງທີ່ສົ່ງເຖິງບ່ອນສະເພາະເຂດບໍລິການທີ່ກຳນົດໃນລາຍລະອຽດຂອງແຕ່ລະສາຂາ',

    items: [

        {
     id: 1,
      name: 'ສາຂາຄຳມ່ວນ',
      phone: '0209334343',
      image: khammuan,
      googlemap:'map',
      satus: 'default',
   },
       {
     id: 2,
      name: 'ສາຂາສະຫວັນນະເຂດ',
      phone: '0209334343',
      image: savannaket,
      googlemap:'map',
      satus: 'default',
   },
    {
     id: 3,
     name: 'ສາຂາສາລະວັນ',
     phone: '0209334343',
     image: salavan,
     googlemap:'map',
     satus: 'default',
   },
   {
     id: 4,
     name: 'ສາຂາຈຳປາສັກ',
     phone: '0209334343',
     image: champasuk,
     googlemap:'map',
     satus: 'default',
   },
   {
    id: 5,
    name: 'ສາຂາເຊກອງ',
    phone: '0209334343',
    image: xekong,
    googlemap:'map',
    satus: 'default',
  },
  {
   id: 6,
   name: 'ສາຂາອັດຕະປື',
   phone: '0209334343',
   image: attapue,
   googlemap:'map',
   satus: 'default',
 },
 ]
}

}
}

</script>