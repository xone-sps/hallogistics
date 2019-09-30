<template>
	<div>
		<footer class="footer">
			<section class="section">
				<div class="content">
					<div class="columns">
						<div class="column is-3">
							<router-link to="/">
								<img style="max-height: 80px;" src="@/assets/logo.png">
							</router-link>
							<h2 class="title">Hal logistics</h2>
							<div class="nile-widget">
								<div class="margin-bottom-60px">
									<div class="contact-info opacity-9">
										<!-- <i class="fa fa-phone margin-right-10px"></i> -->
										<!-- 			<i class="fab fa-map-marker-alt"></i> -->
										<div class="text">
											<h2 class="title">ສຳນັກງານໃຫ່ຍ</h2>
											<span class="font-weight-500 text-uppercase">ບ້ານຮ່ອງຄ້າ, ເມືອງຈັນທະບູລີ, ນະຄອນຫຼວງວຽງຈັນ</span>
										</div>
									</div>
								</div>
								<div class="text">
									<span class="title-in"><i class="fa fa-phone margin-right-10px"></i>Call Center :</span>
									<span class="font-weight-500 text-uppercase">20 55538210 / 20 55538211</span>
								</div>
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
				</div>

			</section>
			<hr>
			<div class="content has-text-centered">
				<div class="columns">
					<div class="column is-6">
						<p>&copy; 2018 Hal logistics
						</p>

					</div>

					<ul class="social-media list-inline margin-0px text-white">
						<li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/HAL.Logistics" target="_bank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a class="youtube" href="https://www.youtube.com/channel/UClfgjHxF1S8uEsNsqcRBZAA" target="_bank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
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
</style>
