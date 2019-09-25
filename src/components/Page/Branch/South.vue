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
        import salavan from '@/assets/images/branchs/south/br_salavan.jpeg';
        import champasuk from '@/assets/images/branchs/south/br_champasuk.jpeg';
        import attapue from '@/assets/images/branchs/south/br_attapue.jpeg';
        import xekong from '@/assets/images/branchs/south/br_xekong.jpeg';


        export default{
// name:'Vientiane'
data() {
  return {
    title:'ສາຂາ ພາກໃຕ້',
    description:'ປັດຈຸບັນນີ້ໃນພາກເໜືອ ພວກເຮົາມີຈຸດບໍລິການ 4 ສາຂາ ທ່ານສາມາດຝາກເຄື່ອງໄດ້ທຸກສາຂາທີ່ຢູ່ໃກ້ບ້ານທ່ານ! ແລະ ຮັບເຖິງທີ່ສົ່ງເຖິງບ່ອນສະເພາະເຂດບໍລິການທີ່ກຳນົດໃນລາຍລະອຽດຂອງແຕ່ລະສາຂາ',

    items: [
    {
     id: 1,
     name: 'ສາຂາສາລະວັນ',
     phone: '0209334343',
     image: salavan,
     googlemap:'map',
     satus: 'default',
   },
   {
     id: 2,
     name: 'ສາຂາຈຳປາສັກ',
     phone: '0209334343',
     image: champasuk,
     googlemap:'map',
     satus: 'default',
   },
   {
    id: 3,
    name: 'ສາຂາເຊກອງ',
    phone: '0209334343',
    image: xekong,
    googlemap:'map',
    satus: 'default',
  },
  {
   id: 4,
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