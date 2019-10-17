<template>
	<div>
		<footer class="footer">
			<section class="section footers">
				<div class="content">
					<div class="columns">
						<div class="column is-3">
<!-- 							<router-link to="/">
								<img style="max-height: 80px;" src="@/assets/logo.png">
							</router-link> -->
							<h2 class="title">Contact Hal logistics</h2>
							<div class="nile-widget">
								<div class="margin-bottom-60px">
									<div class="contact-info opacity-9">
										<!-- <i class="fa fa-phone margin-right-10px"></i> -->
										<!-- 			<i class="fab fa-map-marker-alt"></i> -->
										<div class="text">
											<p class="title">ສຳນັກງານໃຫ່ຍ</p>
											<span class="font-weight-500 text-uppercase">ບ້ານຮ່ອງຄ້າ, ເມືອງຈັນທະບູລີ, ນະຄອນຫຼວງວຽງຈັນ</span>
										</div>
									</div>
								</div>
								<div class="text">
									<span class="title-in"><i class="fa fa-phone margin-right-10px"></i>ສາຍດ່ວນ:</span>
									<p class="font-weight-500 text-uppercase"><a href="tel:55538210">20 55538210</a> / <a href="tel:55538211">20 55538211</a></p>
								</div>

								<ul class="social-media list-inline margin-0px text-white">
									<li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/HAL.Logistics" target="_bank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
									</li>
									<li class="list-inline-item"><a class="youtube" href="https://www.youtube.com/channel/UClfgjHxF1S8uEsNsqcRBZAA" target="_bank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a class="twitter">
										<i class="fab fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="column is-3">
								<h2 class="title">Our Service</h2>
								<ul class="footer-menu">
									<li>
										<router-link to ="/price">ຄ່າບໍລິການ</router-link>
									</li>
									<li>
										<router-link to="/">ການບໍລິການ</router-link>
									</li>
									<li>
										<router-link to ="/contact">ຕິດຕໍ່ພວກເຮົາ</router-link>

									</li>
									<li>
										<router-link to="/about">ກ່ຽວກັບພວກເຮົາ</router-link>
									</li>
								</ul>
							</div>
							<div class="column is-3">
								<h2 class="title">ເຂດບໍລິການ</h2>
								<ul class="footer-menu">
									<li>
										<router-link to="/branch/north">ສາຂາພາກເໜືອ</router-link>
									</li>
									<li>
										<router-link to="/branch/vientiane">ສາຂານະຄອນຫຼວງ</router-link>
									</li>
									<li>
										<router-link to="/branch/central">ສາຂາພາກກາງ</router-link>
									</li>
									<li>
										<router-link to="/branch/south">ສາຂາພາກໃຕ້</router-link>
									</li>
								</ul>
							</div>
							<div class="column is-3">
								<h2 class="title">ເປີດບໍລິການຮັບ-ຝາກເຄື່ອງທຸກໆວັນ</h2>
								<ul class="footer-menu">
									<p>ວັນຈັນ ຫາ ວັນເສົາ</p>
									<li>
										<!-- <div>07:30 - 18:00<small> (ຮັບສົ່ງເຖິງທີ່ 09:00 - 15:00)</small></div> -->
										<p>07:30 - 18:00 (ຮັບສົ່ງເຖິງທີ່ 09:00 - 15:00)</p>
									</li>
									<li>
										<p>ວັນອາທິດ</p>
										<div><p>08:30 - 17:30 (ປິດບໍລິການຮັບ - ສົ່ງເຖິງທີ່)</p></div>
									</li>
								</ul>
							</div>
						</div>
						<div class="columns">
						<div class="column is-right"><h3 class="title store-title">ສາມາດດາວໂຫຼດແອັບໄດ້ທີ່</h3>
							<div class="store-icons">
								<a href="https://apps.apple.com/us/app/hal-logistics/id1483001714#?platform=iphone" target="_blank">
							<img src="@/assets/images/icons/App-Store.png" alt="App store"></a>
							<a href="https://play.google.com/store/apps/details?id=me.com.phoud.hal_logistics" target="_blank">
								<img src="@/assets/images/icons/Play-Store.png" alt="Play store"></a>
							</div>
							</div>
						</div>
					</div>

				</section>
				<hr>
				<div class="content has-text-centered">
					<div class="columns">
						<div class="column is-6">
							<p>&copy; 2018 Hal logistics
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</template>
	<style scoped>
	.list-inline-item:not(:last-child) {
		margin-right: 15px;
	}
	.columns:last-child {
		margin-bottom: 0;
	}
	a{
		color:#fff;
	}
	.store-icons{
		text-align: center;
		font-size: 28px;

	}
	.title.store-title{
		font-size: 24px;
		text-align: center;
	}
	.store-icons img{
width: 180px;
    height: auto;
		border-radius: 6px 6px 6px 6px;
	}
	.section.footers{
		padding: 10px 15px 15px 20px;
	}
	</style>
