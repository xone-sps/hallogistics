<template>
  <div>
    <!-- Banner -->
    <div class="banner">
      <section class="section">
        <div class="container">
          <div class="margin-top-h">
            <div class="columns">
              <div class="column is-8 is-offset-2">
                <div class="main_title"><h2>ກວດສອບພັດສະດຸ</h2></div>
                <div class="saidbar-search">
                  <form v-on:submit.prevent="toClick()">
                    <input type="text" v-model="parcelId" class="input is-rounded" id="search-bar" placeholder="ປ້ອນເລກໃບບິນ">
                    <a v-on:click="toClick()"><i class="fa fa-search search-icon"></i></a>
                    <div v-if="errors.length">
                      <p class="required">{{errors}}</p>
                    </div>
                  </form>
                </div>
<!--             <div class="field">
              <label class="label is-pulled-left">ເລກໃບບິນ</label>
              <div class="control">
                <input class="input is-round" v-model="parcelId" type="text" placeholder="ເລກໃບບິນ">
              </div>
              <div class="has-text-centered">
                <a v-on:click="toClick()" class="nile-bottom md">ກວດສອບພັດສະດຸ</a>
              </div>
            </div> -->
<!--             <div v-if="!loading">
                          <table class="table is-fullwidth" v-if="status != false">
              <thead>
                <tr>
                  <th>ວັນທີ ແລະເວລາ</th>
                  <th>ສະຖານະ</th>
                  <th>ສາງ</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="track in data">
                  <th>{{ track.date }}</th>
                  <th>{{ track.details }}</th>
                  <th>{{ track.place }}</th>
                </tr>
              </tbody>
            </table>
          </div> -->
        </div>
      </div>
      <!-- Modal tracking -->
      <modal name="calculate"
      :width="500"
      :height="'auto'"
      :clickToClose="true"
      :scrollable="true"
      >
      <div class="modals-calculate" v-if="status != false">
        <div class="has-text-centered">
          <img style="max-height: 56px;" src="@/assets/logo.png">
          <h2>ກວດສອບພັດສະດຸ</h2>
          <div>
            <h2>
              {{des.From}} &#8646; {{des.Destination}}
            </h2>
          </div>
        </div>
        <table class="table track is-fullwidth">

          <thead>
            <tr>
              <th>ວັນທີ ແລະເວລາ</th>
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
    :width="500"
    :height="'auto'"
    :clickToClose="true"
    :scrollable="true"
    >
    <div class="modals-calculate">
      <div class="has-text-centered">
        <img style="max-height: 56px;" src="@/assets/logo.png">
        <h2>ກວດສອບພັດສະດຸ</h2>
        <div>
          <p>ບໍ່ພົດພັດສະດຸກາລຸນາກວດລະຫັດຄືນອີກຄັ້ງ</p>
        </div>
      </div>
      <div class="has-text-centered modal-footer">
        <a @click="hidemodalError()" class="button is-danger is-rounded">ປິດໜ້ານີ້</a>
      </div>
    </div>
  </modal>
</div>
</div>
</section>
</div>

<!--   <banner/> -->
<!-- Service -->
<div class="service">
  <Service/>
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
        errors:[],
        des:[]
      }
    },
//   methods:{
//     getData(){
//         this.$loading (true)
//       axios.get("https://cors-anywhere.herokuapp.com/http://trackhal.com/cgi-bin/GInfo.dll?EmsApiTrack&ntype=10000&cno="+this.parcelId)
//       .then(
//         res => {      
//           this.data = res.data.trackingEventList;
//           this.des = res.data.Response_Info;
//          this.$loading(false)
//        // console.log(res.data);
//     }).catch(error => {
//     this.$loading(true)
//     console.log('ID not match');
// })
// },

methods:{
  getData(){
    this.$loading (true)
    axios.get("https://cors-anywhere.herokuapp.com/http://trackhal.com/cgi-bin/GInfo.dll?EmsApiTrack&ntype=10000&cno="+this.parcelId)
    .then(
      res => {      
        this.data = res.data.trackingEventList;
        this.des = res.data.Response_Info;
        this.$modal.show('calculate');
        this.$loading(false)
       // console.log(res.data);
     })

    .catch(error => {
      this.$loading(true)
    // console.log('ID not match');
  })
  },
  toClick(){
    this.errors = [];
    if(!this.parcelId){
      this.errors.push("ປ້ອນເລກໃບບິນ !");
    } else{
      this.getData();
      this.status = true,
      this.$modal.hide('modalError');
    }
  },
  openModal () {
    this.$modal.show('calculate');
    this.$modal.show('modalError');
  },
  hideModal () {
    this.$modal.hide('calculate');
    this.$loading(false)
  },
  hidemodalError(){
    this.$modal.hide('modalError');
  }
},
created(){
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
.calculate{
  overflow-y:auto;
}
.modals-calculate{
  margin:20px 10px 20px 10px;
}
table tbody tr th.tracking-date{
  font-size:12px;
}
.v--modal{
  overflow-y:auto;
  overflow:auto;
  left: auto !important;
  top: 0;
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
</style>
