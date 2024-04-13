


<div class="mapbox clearfix">
	<div class="row">
		<div class="col-md-6 col-sm-12 col-xs-12 mapbox__leftcol">

			<div id="mapp" style="width: 100%; height: 500px;"></div>

		</div>
		<div class="col-md-6 col-sm-12 col-xs-12 mapbox__rightcol">
			<div class="mapbox__texts">

				<p class="mapbox__texts__address">
					Kremsa Digital s.r.o.<br />
					Námestie hraničiarov 37<br />
					851 03 Bratislava<br />
					Slovakia
				</p>

				<div class="mapbox__telbox">
					<a href="tel:+421911573672" class="mapbox__telbox__tel">
						<i class="fa fa-phone" aria-hidden="true"></i>
						+421 911 573 672
					</a>
					<a href="tel:+421244455261" class="mapbox__telbox__tel">
						<i class="fa fa-phone" aria-hidden="true"></i>
						+421 2 444 55 261
					</a>
					<a href="mailto:office_sk@kremsa.com" class="mapbox__telbox__tel">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						office_sk@kremsa.com
					</a>
				</div>

			</div>
		</div>
	</div>
</div>


		<div class="footer">
			<div class="content-wrapper">

				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 footer__coll">
						<?php echo clean_custom_menus_footer(); ?>
						<p class="disclaimer">&copy;<?php date('Y'); ?> Kremsa. All rights reserved. &nbsp;&nbsp; <a style="color: #636363; text-decoration: underline;" href="/ochrana-osobnych-udajov/">Ochrana osobných údajov</a></p>

						<div class="footer-social">
							<a href="https://www.facebook.com/kremsa" target="_blank" class="footer-social__item">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>

							<a href="https://www.linkedin.com/company/kremsa-digital/" target="_blank" class="footer-social__item">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>

							<a href="https://www.instagram.com/kremsa_digital/" target="_blank" class="footer-social__item">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</div>

						<br />

						<div class="row">
							<div class="col-md-6">

								<script src="https://apis.google.com/js/platform.js" async defer></script>
								<div class="footer-badge">
									<div class="g-partnersbadge" data-agency-id="4044706415" ></div>
								</div>

							</div>
							<div class="col-md-6">

								<div class="smacklogo">
									<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/smaklogo.png" alt="" />
								</div>

							</div>
						</div>

					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 footer__colr">
                        <?php echo do_shortcode('[mc4wp_form id="1046"]'); ?>

						<div class="marketeris">
							<a href="https://marketeris.sk/autor/kremsa-digital" target="_blank"><img style="height: 40px;" src="/wp-content/themes/kremsa/img/marketeris-button_inv.png" alt=""></a>
						</div>
					</div>
				</div>

			</div>
		</div>

		</div><!-- //#wrapper -->

		<?php wp_footer(); ?>

        <script>
            var map;
            var kremsa = {lat: 48.120225, lng: 17.119148};
            function initMap() {
                map = new google.maps.Map(document.getElementById('mapp'), {
                    center: {lat: kremsa.lat, lng: kremsa.lng},
                    zoom: 17,
                    zoomControl: true,
                    mapTypeControl: false,
                    scaleControl: true,
                    streetViewControl: true,
                    rotateControl: false,
                    fullscreenControl: false,
                    styles: [
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#d3d3d3"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                {
                                    "color": "#808080"
                                },
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#b3b3b3"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "weight": 1.8
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#d7d7d7"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ebebeb"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#a7a7a7"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#efefef"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#696969"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#737373"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#d6d6d6"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {},
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#dadada"
                                }
                            ]
                        }
                    ]
                });
                var marker = new google.maps.Marker({
                    position: kremsa,
                    map: map,
                    icon: '<?php echo get_bloginfo( 'template_directory' );?>/img/marker.png',
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVNUwarqmyG2yT-AHt7NtMouPv8R-QNek&callback=initMap" async defer></script>

	</body>
</html>
