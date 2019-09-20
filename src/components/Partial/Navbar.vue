<template>
	<div>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <router-link class="navbar-item" to="/">
           <img style="max-height: 36px;" src="@/assets/logo.png">
         </router-link>
         <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <router-link class="navbar-item" :to="{name:'home'}" active-class="active" exact>
            ໜ້າຫຼັກ
          </router-link>


          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              ບໍລິການຂອງພວກເຮົາ
            </a>

            <div class="navbar-dropdown">
              <router-link :to="{name:'about'}" class="navbar-item" active-class="active" exact>
                About
              </router-link>
              <a class="navbar-item">
                Jobs
              </a>
              <a class="navbar-item">
                Contact
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                Report an issue
              </a>
            </div>
          </div>

          <div class="navbar-item has-dropdown is-hoverable">
            <router-link class="navbar-link" :to="{name:'vientiane'}" active-class="active" exact>
              ສາຂາ
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
              <hr class="navbar-divider">
              <a class="navbar-item">
                Report an issue
              </a>
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
            <router-link class="navbar-item" :to="{name:'price'}">
            ລາຄາ
          </router-link>
          <router-link class="navbar-item" :to="{name:'blog'}">
            ຂ່າວສານ
          </router-link>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-primary">
                <strong>Sign up</strong>
              </a>
              <a class="button is-light">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
</div>
</template>