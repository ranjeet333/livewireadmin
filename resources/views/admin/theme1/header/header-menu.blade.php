<!-- begin:: Header Menu -->
 <!-- Uncomment this to display the close button of the panel -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
	<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
		<ul class="kt-menu__nav ">
			@foreach (config('theme.header_menus') as $key => $menu)
			
				@if(isset($menu['sub_menu']))

				<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-text">{{ $menu['title'] }}</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
						<ul class="kt-menu__subnav">

							@foreach ($menu['sub_menu'] as $key => $menu)

								@if(isset($menu['sub_menu']))

									<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
											<span class="kt-menu__link-icon">
												<i class="{{ $menu['icon'] }}"></i>
											</span>
											<span class="kt-menu__link-text">{{ $menu['title'] }}</span>
											<i class="kt-menu__hor-arrow la la-angle-right"></i>
											<i class="kt-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
											<ul class="kt-menu__subnav">

												@foreach ($menu['sub_menu'] as $key => $menu)

													<li class="kt-menu__item " aria-haspopup="true">
														<a href="javascript:;" class="kt-menu__link ">
															<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
																<span></span>
															</i><span class="kt-menu__link-text">{{ $menu['title'] }}</span>
														</a>
													</li>

												@endforeach
											</ul>
										</div>
									</li>

								@else

									<li class="kt-menu__item " aria-haspopup="true">
										<a href="{{ url($menu['page']) }}" class="kt-menu__link ">
											<span class="kt-menu__link-icon">
												<i class="{{ $menu['icon'] }}"></i>
											</span>
											<span class="kt-menu__link-text">{{ $menu['title'] }}</span>
										</a>
									</li>

								@endif

							@endforeach

						</ul>
					</div>
				</li>

				@else

					<li class="kt-menu__item kt-menu__item--rel kt-menu__item--active">
						<a href="{{ url($menu['page']) }}" class="kt-menu__link ">
							<span class="kt-menu__link-text">{{ $menu['title'] }}</span>
							<i class="kt-menu__ver-arrow la la-angle-right"></i>
						</a>
					</li>

				@endif

			@endforeach
		</ul>
	</div>
</div>

<!-- end:: Header Menu