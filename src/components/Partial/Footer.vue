<template>
	<div>
		<footer class="footer">
			<section class="section">
				<div class="content">
					<div class="columns">
						<div class="column is-3">
							<router-link class="navbar-item" to="/">
								<img style="max-height: 80px;" src="@/assets/logo.png">
							</router-link>
							<h2 class="title">Hal logistics</h2>
							<div class="nile-widget">
								<div class="margin-bottom-60px">
									<div class="contact-info opacity-9">
										<!-- <i class="fa fa-phone margin-right-10px"></i> -->
										<i class="fab fa-map-marker-alt"></i>
										<div class="text">
											<h2 class="title">ສຳນັກງານໃຫ່ຍ :</h2> <br>
											<span class="font-weight-500 text-uppercase">ບ້ານຮ່ອງຄ້າ, ເມືອງຈັນທະບູລີ, ນະຄອນຫຼວງວຽງຈັນ</span>
										</div>
									</div>
								</div>
								<div class="text">
									<span class="title-in"><i class="fa fa-phone margin-right-10px"></i>Call Center :</span>
									<span class="font-weight-500 text-uppercase">00222123333019</span>
								</div>
							</div>
						</div>
						<div class="column is-3">
							<h2 class="title">Our Service</h2>
							<ul class="footer-menu">
								<li>
									<router-link to ="/">Contact</router-link>
									
								</li>
								<li>
									<router-link to="/">About</router-link>
								</li>
							</ul>
						</div>
						<div class="column is-3">
							<h2 class="title">Site Page</h2>
							<ul class="footer-menu">
								<li>
									<router-link to ="/">Contact</router-link>
									
								</li>
								<li>
									<router-link to="/">About</router-link>
								</li>
							</ul>
						</div>
						<div class="column is-3">
							<h2 class="title">ເປີດບໍລິການຮັບ-ຝາກເຄື່ອງທຸກໆວັນ</h2>
							<ul class="footer-menu">
								<li>
									<p>ວັນຈັນ ຫາ ວັນເສົາ</p>
									<div>07:30 - 18:00<small> (ຮັບສົ່ງເຖິງທີ່ 09:00 - 15:00)</small></div>
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
						<p>Copy right 2018 Hal logistics
						</p>

					</div>
				<div class="column is-6">
					<ul class="social-media list-inline margin-0px text-white">
						<li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
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
</style>