<template>
	<div>
    <nav class="nav-width navbar menu-nav mainNav is-desktop" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <router-link class="navbar-item" to="/">
           <img style="max-height: 36px;" src="@/assets/logo.png">
         </router-link>
         <a role="button" class="navbar-burger burger" v-if="!showNav" @click="showNavbar">
           <!-- v-if="isMobile" @click="showMobileNav()" -->
           <span aria-hidden="true"></span>
           <span aria-hidden="true"></span>
           <span aria-hidden="true"></span>
         </a>
         <a role="button" class="navbar-burger burger" v-else @click="hideNavbar">
           <div class="icon">
             <i class="fas fa-times"></i>
           </div>
           <!-- <i class="fas fa-bars"></i> -->
         </a>
       </div>
       <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <router-link class="navbar-item" :to="{name:'home'}" active-class="active" exact>
            ໜ້າຫຼັກ
          </router-link>

          <router-link class="navbar-item" :to="{name:'service'}" active-class="active" exact>
            ການບໍລິການ
          </router-link>
          <div class="navbar-item has-dropdown is-hoverable">
            <router-link class="navbar-link" :to="{name:'vientiane'}" active-class="active" exact>
              ເຂດບໍລິການ
            </router-link>

            <div class="navbar-dropdown">
              <router-link :to="{name:'vientiane'}" class="navbar-item" active-class="active" exact>
                ນະຄອນຫຼວງ
              </router-link>
              <router-link :to="{name:'north'}" class="navbar-item" active-class="active" exact>
                ພາກເໜືອ
              </router-link>
              <router-link :to="{name:'central'}" class="navbar-item" active-class="active" exact>
                ພາກກາງ
              </router-link>
              <router-link :to="{name:'south'}" class="navbar-item" active-class="active" exact>
                ພາກໃຕ້
              </router-link>
            </div>
          </div>

          <div class="navbar-item has-dropdown is-hoverable">
            <router-link class="navbar-link" :to="{name:'about'}">
              ກ່ຽວກັບພວກເຮົາ
            </router-link>

            <div class="navbar-dropdown">
              <router-link :to="{name:'about'}" class="navbar-item" active-class="active" exact>
                ກ່ຽວກັບພວກເຮົາ
              </router-link>
              <router-link :to="{name:'contact'}" class="navbar-item" active-class="active" exact>
               ຕິດຕໍ່ພວກເຮົາ
             </router-link>
           </div>
         </div>
         <router-link class="navbar-item" :to="{name:'price'}" active-class="active" exact>
          ຄ່າບໍລິການ
        </router-link>
        <router-link class="navbar-item" :to="{name:'home'}" active-class="active" exact>
          ຂ່າວສານ
        </router-link>
      </div>
<!-- 
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Sign in
            </a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</nav>
<!-- Sidebar -->
<div v-if="showNav">
  <div id="ms-sidebar" class="sidebar is-hidden-desktop-only is-hidden-desktop"
  >
  <section class="my-sidebar-drawer">
    <div class="my-sidebar-drawer-loginInfo">
      <div class="sidebar-container" >
        <img src="@/assets/hal_logo100.png" class="i-sidebar-content-fill-content i-sidebar-content-replaced-content"
        >
      </div>
      <div class="drawer-unlogin">
        <router-link :to="{ name: 'home' }">
          <a class="drawer-seeker">
            <span class="line-bottom">ຮຸ່ງອາລຸນຂົນສົ່ງດ່ວນ</span>
          </a>
        </router-link>
      </div>
    </div>
    <ul class="sidebar-drawer-box">
      <template>
        <li>
          <a href="/">
            <i class="fa fa-home"></i>
            <span>ໜ້າຫຼັກ</span>
          </a>
        </li>
        <li>
          <a href="/branch/vientiane">
           <i class="fas fa-people-carry"></i>
           <span>ສາຂານະຄອນຫຼວງ</span>
         </a>
       </li>
       <li>
        <a href="/branch/north">
         <i class="fas fa-people-carry"></i>
         <span>ສາຂາພາກເໜືອ</span>
       </a>
     </li>
     <li>
      <a href="/branch/central">
        <i class="fas fa-people-carry"></i>
        <span>ສາຂາພາກກາງ</span>
      </a>
    </li>
    <li>
      <a href="/branch/south">
        <i class="fas fa-people-carry"></i>
        <span>ສາຂາພາກໃຕ້</span>
      </a>
    </li>
    <li>
      <a href="/price">
       <i class="fas fa-money-check-alt"></i>
       <span>ຄ່າບໍລິການ</span>
     </a>
   </li>
   <li>
    <a href="/about">
     <i class="fas fa-truck-moving"></i>
     <span>ກ່ຽວກັບພວກເຮົາ</span>
   </a>
 </li>
 <li>
  <a href="/contact">
    <i class="fa fa-phone"></i>
    <span>ຕິດຕໍ່ພວກເຮົາ</span>
  </a>
</li>
</template>
</ul>
</section>
</div>
</div>

</div>
</div>
</template>
<script>
  import {mapActions, mapGetters, mapState, mapMutations} from 'vuex';
  export default {
    data(){
      return {

        isActive: '',
        showApp: false,
        showNav:false,
      }
    },
  // watch: {
  //   isSidebar: function (n, o) {
  //     this.isActive = n === 'left-side' ? '' : 'is-active'
  //   },
  // },
  computed: {
    // ...mapState(['isMobile', 'isSidebar']),

  },
  methods: {
    showNavbar(){
      this.showNav = !this.showNav;
    },
    hideNavbar(){
     this.showNav = !this.showNav;
     this.showApp = !this.showApp;
   },
}

}

</script>

<style scoped>
.showNav{
  transition: all 0.8s ease-in-out;
  -webkit-transform: translateX(0) !important;
  transform: translateX(0) !important;
  -webkit-overflow-scrolling: touch;
  will-change: transform;
  -webkit-transition: -webkit-transform 233ms cubic-bezier(0, 0, .21, 1);
  transition: -webkit-transform 233ms cubic-bezier(0, 0, .21, 1);
  transition: transform 233ms cubic-bezier(0, 0, .21, 1);
  transition: transform 233ms cubic-bezier(0, 0, .21, 1), -webkit-transform 233ms cubic-bezier(0, 0, .21, 1);
  display: block;
}
.sidebar{
  display: none;
}
.mainNav.is-fixed-top {
  -webkit-box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .15);
  box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .15);
}

@media only screen and (max-width: 1024px) {
  .topNav {
    display: none;
  }

  .logoImage {
    padding: 4px 0;
  }

  .mainNav.is-fixed-top {
    position: fixed;
    top: 0;
    height: 60px;
    box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .15);
  }
}





li.is-active {
  background-color: #ECECEC !important;
}

.sidebar {
  position: fixed !important;
  top: 0;
  max-height: 100vh !important;
  height: 100vh;
  max-width: 80vw !important;
  background-color: #efefef;
  min-width: 45px !important;
  outline: none;
  overflow-x: hidden !important;
  overflow-y: auto !important;
  z-index: 10000;
  -webkit-overflow-scrolling: touch;
  will-change: transform;
  -webkit-transition: -webkit-transform 233ms cubic-bezier(0, 0, .21, 1);
  transition: -webkit-transform 233ms cubic-bezier(0, 0, .21, 1);
  transition: transform 233ms cubic-bezier(0, 0, .21, 1);
  transition: transform 233ms cubic-bezier(0, 0, .21, 1), -webkit-transform 233ms cubic-bezier(0, 0, .21, 1);
  display: inline-block;
}

.sidebar.left-side {
  left: 0 !important;
  -webkit-transform: translateX(-100%) !important;
  transform: translateX(-100%) !important;
}

.sidebar.open {
  -webkit-transform: translateX(0) !important;
  transform: translateX(0) !important;
}

.my-sidebar-drawer-loginInfo {
  height: 128px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background-color: #ed1f24;
  overflow: hidden;
  background-image: linear-gradient(to bottom right, #ed1424, #ed1f24);
  background-repeat: no-repeat;
  background-size: cover;
}

.my-sidebar-drawer {
  width: 100%;
  height: 100%;
  -overflow-scrolling: touch;
}

/** box */
.sidebar-drawer-box {
  width: 100%;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #555;
}

.sidebar-drawer-box li {
  position: relative;
  height: 48px;
  line-height: 48px;
  overflow: hidden;
  font-size: 14px;
}

.sidebar-drawer-box li a {
  display: block;
  margin-left: 20px;
}

.sidebar-drawer-box li span {
  font-weight: 600;
  color: #3A3E4A;
}

.sidebar-drawer-box li .sidebar-icon-md {
  padding: 10px 16px 10px 16px;
  margin-right: 16px;
  float: left;
  font-size: 26px !important;
  color: #898B92;
  min-width: 56px;
  max-width: 56px;
}

.sidebar-icon-md {
  position: relative;
  display: inline-block;
  font-size: 16px !important;
  line-height: 1;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -webkit-text-stroke-width: .2px;
  -moz-osx-font-smoothing: grayscale;
}

/** box */
.my-sidebar-drawer-loginInfo .sidebar-container {
  width: 100px;
  height: 100px;
  padding: 16px;
/*  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;*/
}

.my-sidebar-drawer-loginInfo .sidebar-container img {
  display: block;
/*  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;*/
}

.i-sidebar-content-layout-size-defined .i-sidebar-content-fill-content {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

.i-sidebar-content-fill-content {
  display: block;
  height: 0;
  max-height: 100%;
  max-width: 100%;
  min-height: 100%;
  min-width: 100%;
  width: 0;
  margin: auto;
}

.i-sidebar-content-replaced-content, .i-sidebar-content-screen-reader {
  padding: 0 !important;
  border: none !important;
}

.my-sidebar-drawer-loginInfo .drawer-unlogin {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  padding: 2px 16px 16px;
  white-space: nowrap;
  font-size: 15px;
  line-height: 1.2;
  color: #fff;
}

.my-sidebar-drawer-loginInfo .drawer-seeker {
  display: inline-block;
  padding: 0 6px 0 0;
  font-size: 15px;
  line-height: 1.2;
  /*border-right: solid 1px #fff;*/
  color: #fff;
}

.my-sidebar-drawer-loginInfo .drawer-employer {
  display: inline-block;
  padding-left: 2px;
  font-size: 15px;
  line-height: 1.2;
  color: #fff;
}

#ms-sidebar {
  background: #fff;
  width: 70%;
  height: 100%;
}

.sidebar-mask {
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  width: 100vw !important;
  height: 100vh !important;
  opacity: 0.2;
  background-image: none !important;
  background-color: #000;
  z-index: 9999;
}

.sidebar-mask.left-side {
  display: none;
}

.ine-bottom {
  border-bottom: 1px solid #ffffff !important;
}

.line-bottom-blue {
  border-bottom: 1px solid #004FCE !important;
}

.line-bottom-green {
  border-bottom: 1px solid #00D29D !important;
}

.sidebar-drawer-box + .sidebar-drawer-box {
  border-top: 1px solid #EBEBEC;
}

@media screen and (max-width: 366px) {
  .my-sidebar-drawer-loginInfo .drawer-seeker, .my-sidebar-drawer-loginInfo .drawer-employer {
    font-size: 14.2px;
  }
}

</style>