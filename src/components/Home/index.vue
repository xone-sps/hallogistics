<template>
  <div>
    <!-- Banner -->
    <div class="banner">
<div style="
">
      <section class="section">
        <div class="container">
          <div class="margin-top-h">
            <div class="columns">
              <div class="column is-8 is-offset-2 has-text-centered">
                <div class="main_title"><h2>ກວດສອບພັດສະດຸ</h2>
                </div>
                <div class="saidbar-search">
                  <form v-on:submit.prevent="toClick()">
                    <input type="text" v-model="parcelId" class="input is-rounded" id="search-bar" placeholder="ປ້ອນເລກໃບບິນ">
                    <a v-on:click="toClick()"><i class="fa fa-search search-icon is-desktop"></i></a>
                    <div v-if="errors.length">
                      <p class="required">{{errors}}</p>
                    </div>
                  </form>
                </div>
                <div class="hal-title">
                <h2>ຮຸ່ງອາລຸນຂົນສົ່ງດ່ວນ</h2>
                <p>ພວກເຮົາໃຫ້ຫຼາຍກວ່າການຂົນສົ່ງ</p>
                </div>
        </div>
      </div>
      <!-- Modal tracking -->
      <modal name="tracking"
      :height="'auto'"
      :clickToClose="true"
      :scrollable="true"
      :width="'75%'"
      :minWidth="320"
      :minHeight="230"
      :maxWidth="720"
      >
      <div class="modals-tracking" v-if="status != false">
        <div class="has-text-centered">
          <img style="max-height: 56px;" src="@/assets/favorite.png">
          <h2>ກວດສອບພັດສະດຸ</h2>
          <div>
            <h2 class="checking-title" v-if="data">
              {{des.From}} &#8646; {{des.Destination}}
            </h2>
          </div>
        </div>
        <table class="table track is-fullwidth">

          <thead>
            <tr>
              <th>ວັນທີ/ເວລາ</th>
              <th>ສະຖານະ</th>
              <th>ສາງ</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="track in data">
              <th class="tracking-date">{{ track.date }}</th>
              <th>{{ track.details }}</th>
              <th>{{ track.place }}</th>
            </tr>
          </tbody>
        </table>
        <div class="has-text-centered modal-footer">
          <a @click="hideModal()" class="button is-danger is-rounded">ປິດໜ້ານີ້</a>
        </div>
      </div>
    </modal>
    <!-- Error modal -->

    <!-- Modal tracking -->
    <modal name="modalError"
      :width="'55%'"
      :minWidth="320"
      :minHeight="230"
      :maxWidth="720"
    :height="'auto'"
    :clickToClose="true"
    :scrollable="true"
    :padding="20"
    >
    <div class="modals-tracking">
      <div class="has-text-centered">
        <img style="max-height: 56px;" src="@/assets/favorite.png">
        <h2><strong>ກວດສອບພັດສະດຸ</strong></h2>
        <div>
          <p>ບໍ່ພົບພັດສະດຸກາລຸນາກວດລະຫັດຄືນອີກຄັ້ງ !</p>
        </div>
      </div>
      <br>
      <div class="has-text-centered modal-footer">
        <a @click="hidemodalError()" class="button is-danger is-rounded">ປິດໜ້ານີ້</a>
      </div>
    </div>
  </modal>
</div>
</div>
</section>
</div>
</div>
<div class="service2">
  <Service2/>
</div>
<!-- Pricing -->
<div class="pricing">
  <Price/>
</div>
<!-- Branch -->
<div class="section branch">
 <Branch/>
</div>
<!-- news  -->

<!--  <div class="news">
  <div>
    <News/>
  </div>
</div> -->

</div>
</template>
<script>
  import axios from 'axios';
  import Banner from '@/components/Home/Banner.vue';
  import Service from '@/components/Home/Service';
  import Service2 from '@/components/Home/Service2';
  import Price from '@/components/Home/Price';
  import News from '@/components/Home/News';
  import Branch from '@/components/Home/Branch';
  export default {
    name: 'Home',
    data () {
      return {
        data:'',
        parcelId:'',
        status: false,
        errors:'',
        active:false,
        des:[]
      }
    },

methods:{
  getData(){
     this.$loading (true)  
    axios.get("https://cors-anywhere.herokuapp.com/http://trackhal.com/cgi-bin/GInfo.dll?EmsApiTrack&ntype=10000&cno="+this.parcelId)
    .then(
      res => {    
        this.data = res.data.trackingEventList;
        this.des = res.data.Response_Info;
        if(this.des){
            this.status = true,
            this.$modal.show('tracking');
            this.$loading(false)
        }else{
          this.$modal.show('modalError');
          this.$loading(false);
        }
     }).catch(error => {
      this.$loading(true)
  })
  },
  toClick(){
    this.errors ='';
    if(!this.parcelId){
      this.errors="ກາລຸນາປ້ອນເລກໃບບິນ !";
    } else{
      this.getData();
      this.status = true
      //this.$modal.hide('modalError');
    }
  },
  openModal () {
    this.$modal.show('tracking');
    this.$modal.show('modalError');
  },
  hideModal () {
    this.$modal.hide('tracking');
    this.$loading(false)
  },
  hidemodalError(){
    this.$modal.hide('modalError');
  },
  loading (){
          this.$loading(true)
  }
},
created(){
   // this.getData();
   // this.toClick();
},
 mounted() {
    // this.getData()
    // this.$loading(true);
       // console.log('created');
  },
components: {
  Banner,
  Service,
  Service2,
  Price,
  News,
  Branch
}

}
</script>

<style scoped>
.hal-title{
    margin: 12px auto;
    
}
.hal-title h2{
      font-size: 22px;
    font-weight: 500;
}
.modals-tracking{
  margin:20px 10px 20px 10px;
}
table tbody tr th.tracking-date{
  font-size:13px;
}
.v--modal{
  overflow-y:auto;
  overflow:auto;
  left: auto !important;
  top: 0;
  left: 0 !important;
}
.v--modal-overlay .v--modal-box{
  overflow:auto !important;
  height:auto;
  width:100%;
  top:100;
}
.table th {
  color: #363636;
  font-weight: 500;
}
.table thead td, .table thead th{
  font-weight:600 !important;
}

.loading{
  z-index:1000 !important;
}
.loading-text{
  font-weight:600;
  color: #e53935 !important;
  font-size: 16px !important;
}
.loading-circle{
  border-left-color:#e53935 !important;
}
.required{
  color:#e53935 ;
}
.v--modal-block-scroll{
  width: 100% !important;
}
@media (max-width: 520px){
.v--modal{
  overflow-y:auto;
  overflow:auto;
  left: auto !important;
  top: 0;
  width: 300px !important;
}
.table th {
    color: #000;
    font-weight: 400;
    font-size: 11px;
    }
    table tbody tr th.tracking-date{
  font-size:11px;
  font-weight: 300;
}
.checking-title{
  font-size: 14px;
}
.v--modal-overlay .v--modal-box{
  overflow:auto !important;
  height:auto;
  width:300px !important;
  top:100;
}
}
@media (max-width: 420px){
.v--modal{
  overflow-y:auto;
  overflow:auto;
  left: auto !important;
  top: 0;
  width: 300px !important;
}
.table th {
    color: #000;
    font-weight: 400;
    font-size: 10px;
    }
    table tbody tr th.tracking-date{
  font-size:9px;
  font-weight: 300;
}
.checking-title{
  font-size: 12px;
  font-weight: 500;
}
.v--modal-overlay .v--modal-box{
  overflow:auto !important;
  height:auto;
  width:300px !important;
  top:100;
}
}
</style>
