<template>
  <div>
    <!-- Banner -->
    <div class="banner">
      <section class="section">
        <div class="columns">
          <div class="column is-8 is-offset-2">
            <div class="main_title"><h2>ກວດສອບພັດສະດຸ</h2></div>
            <div class="saidbar-search">
              <form action="">
                <input type="text" v-model="parcelId" class="input is-rounded" id="search-bar" placeholder="ປ້ອນເລກໃບບິນ">
                <a v-on:click="toClick()"><i class="fa fa-search search-icon"></i></a>
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
 <div class="news">
  <div>
    <News/>
  </div>
</div>
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
      status: false
    }
  },
  methods:{
    getData(){
      axios.get("https://cors-anywhere.herokuapp.com/http://trackhal.com/cgi-bin/GInfo.dll?EmsApiTrack&ntype=10000&cno="+this.parcelId).then(
        res => {      

          this.data = res.data.trackingEventList;
      // console.log(res.data.trackingEventList);
    });
    },
    toClick(){
      this.getData();
      this.status = true
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

