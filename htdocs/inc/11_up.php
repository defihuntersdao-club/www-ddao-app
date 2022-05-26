<?php
print "
	<header>
		<div class=\"top-info\">This project is beta. DYOR</div>
		<div class=\"top-header container-fluid\">
			<div class=\"row align-items-center g-0\">
				<div class=\"col-2 col-sm-2 col-xl-6\">
					<div class=\"top-header__logo\">
						<a href=\"/\">
							<img src=\"images/logo.png\" alt=\"DAO LOGO\" />
						</a>
						<div id=vers class=vers>v".$site_version."</div>
					</div>
				</div>
				

				<div class=\"col-10 col-sm-10 col-xl-6 d-flex align-items-end\">


					<div class=\"top-header__info  d-flex align-items-center\">
						<div class=\"networks d-none\" id=networks>
							<a href=\"#\" class=\"networks__active top-header__poligon\" id=\"dropdownNetwork\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
								<span class=\"networks__btn d-flex align-items-center\">
									<img src=\"images/poligon.svg\" alt=\"\" />
									<span>Polygon</span>
								</span>
								<svg width=\"11\" height=\"7\" viewBox=\"0 0 11 7\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
									<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.982895 0.640364C1.30774 0.315516 1.83443 0.315517 2.15928 0.640366L5.69226 4.17336L9.22526 0.640365C9.55011 0.315516 10.0768 0.315516 10.4016 0.640365C10.7265 0.965213 10.7265 1.4919 10.4016 1.81675L6.28045 5.93793C6.12445 6.09393 5.91287 6.18157 5.69226 6.18157C5.47164 6.18157 5.26007 6.09393 5.10407 5.93793L0.982893 1.81674C0.658045 1.4919 0.658046 0.965212 0.982895 0.640364Z\" fill=\"black\"/>
									</svg>						
							</a>
							<div class=\"networks__links dropdown-menu\" aria-labelledby=\"dropdownNetwork\">
								<div class=\"name\">Select a network</div>
								<div class=\"networks-link\">
									<a href=\"#\" class=\"networks__link\">
										<img src=\"images/ethereum.svg\" alt=\"\" />
										<span>Ethereum</span>
									</a>
									<a href=\"#\" class=\"scan\">
										<span>Etherscan</span>
										<img src=\"images/arrow.svg\" alt=\"\" />
									</a>
								</div>
								<div class=\"networks-link\">
									<a href=\"#\" class=\"networks__link\">
										<img src=\"images/bsc.svg\" alt=\"\" />
										<span>BSC</span>
									</a>
									<a href=\"#\" class=\"scan\">
										<span>BscScan</span>
										<img src=\"images/arrow.svg\" alt=\"\" />
									</a>
								</div>
								<div class=\"networks-link active\">
									<a href=\"#\" class=\"networks__link\">
										<img src=\"images/poligon.svg\" alt=\"\" />
										<span>Polygon</span>
									</a>
									<a href=\"#\" class=\"scan\">
										<span>Polygonscan</span>
										<img src=\"images/arrow.svg\" alt=\"\" />
									</a>
								</div>
							</div>
						</div>
						
						<div class=\"top-header__wallet\">
							<div id=auth_off class=\"d-none\">
							<div class=\"top-header__wallet-bl\">
								<div class=\"top-header__wallet-m\"><span class=\"my-token modified\" id=ddao_balance>-</span> DDAO</div>
								<a href=\"#\" data-fancybox class=\"top-header__wallet-id\" data-bs-toggle=\"modal\" data-bs-target=\"#accountModal\">
									<span class=\"wallet-id\">-</span>
									<span class=\"status\"></span>
								</a>
							</div>
							</div>

							<div id=auth_on class=\"\">
							    <a href=\"#\" class=\"top-header__wallet-link wallet_connect\">Connect Wallet</a>
							</div>


						</div>
						
						<div class=\"menu-block\">
							<a href=\"#\" class=\"menu-block__btn\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
								<svg width=\"18\" height=\"4\" viewBox=\"0 0 18 4\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
									<path d=\"M0.868164 2.28915C0.868164 1.83082 1.02572 1.44768 1.34082 1.13974C1.66309 0.831797 2.08919 0.677826 2.61914 0.677826C3.14909 0.677826 3.57161 0.831797 3.88672 1.13974C4.20898 1.44768 4.37012 1.83082 4.37012 2.28915C4.37012 2.74749 4.20898 3.13063 3.88672 3.43857C3.57161 3.74651 3.14909 3.90048 2.61914 3.90048C2.08919 3.90048 1.66309 3.74651 1.34082 3.43857C1.02572 3.13063 0.868164 2.74749 0.868164 2.28915Z\" fill=\"#3D8AFF\"/>
									<path d=\"M7.24902 2.28915C7.24902 1.83082 7.40658 1.44768 7.72168 1.13974C8.04395 0.831797 8.47005 0.677826 9 0.677826C9.52995 0.677826 9.95247 0.831797 10.2676 1.13974C10.5898 1.44768 10.751 1.83082 10.751 2.28915C10.751 2.74749 10.5898 3.13063 10.2676 3.43857C9.95247 3.74651 9.52995 3.90048 9 3.90048C8.47005 3.90048 8.04395 3.74651 7.72168 3.43857C7.40658 3.13063 7.24902 2.74749 7.24902 2.28915Z\" fill=\"#3D8AFF\"/>
									<path d=\"M13.6299 2.28915C13.6299 1.83082 13.7874 1.44768 14.1025 1.13974C14.4248 0.831797 14.8509 0.677826 15.3809 0.677826C15.9108 0.677826 16.3333 0.831797 16.6484 1.13974C16.9707 1.44768 17.1318 1.83082 17.1318 2.28915C17.1318 2.74749 16.9707 3.13063 16.6484 3.43857C16.3333 3.74651 15.9108 3.90048 15.3809 3.90048C14.8509 3.90048 14.4248 3.74651 14.1025 3.43857C13.7874 3.13063 13.6299 2.74749 13.6299 2.28915Z\" fill=\"#3D8AFF\"/>
									</svg>
									
							</a>

							<div class=\"menu-block__links dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuButton1\">
								<a href=\"https://discord.com/invite/defihuntersdao\" class=\"menu-block__link menu-block__link_discord\" target=_blank>
									<span>Discord</span>
									<svg width=\"16\" height=\"17\" viewBox=\"0 0 16 17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<path d=\"M14 8.49919C14.0023 9.3791 13.7967 10.2471 13.4 11.0325C12.9296 11.9737 12.2065 12.7653 11.3116 13.3187C10.4168 13.8721 9.3855 14.1654 8.33333 14.1659C7.45342 14.1682 6.58541 13.9626 5.8 13.5659L2 14.8325L3.26667 11.0325C2.86995 10.2471 2.66437 9.3791 2.66667 8.49919C2.66707 7.44703 2.96041 6.41576 3.51381 5.52089C4.06722 4.62602 4.85884 3.9029 5.8 3.43252C6.58541 3.03581 7.45342 2.83023 8.33333 2.83252H8.66667C10.0562 2.90918 11.3687 3.4957 12.3528 4.47976C13.3368 5.46383 13.9233 6.77629 14 8.16586V8.49919Z\" stroke=\"#636775\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
										</svg>
										
								</a>
								<a href=\"#\" class=\"menu-block__link menu-block__link_darktheme\" onclick=\"return change_theme();\">
									<span>Theme</span>
									<svg width=\"16\" height=\"17\" viewBox=\"0 0 16 17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<path d=\"M13.9999 9.39581C13.8951 10.5306 13.4692 11.6121 12.7721 12.5137C12.075 13.4153 11.1356 14.0997 10.0637 14.4868C8.99188 14.874 7.83192 14.9479 6.7196 14.6999C5.60728 14.4518 4.5886 13.8922 3.78275 13.0863C2.97691 12.2805 2.41723 11.2618 2.16921 10.1495C1.92118 9.03715 1.99508 7.8772 2.38224 6.80534C2.7694 5.73348 3.45382 4.79405 4.35541 4.09698C5.257 3.3999 6.33847 2.97401 7.47327 2.86914C6.80888 3.76799 6.48917 4.87544 6.57229 5.99008C6.65541 7.10473 7.13584 8.15251 7.9262 8.94287C8.71656 9.73323 9.76435 10.2137 10.879 10.2968C11.9936 10.3799 13.1011 10.0602 13.9999 9.39581V9.39581Z\" stroke=\"#636775\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
										</svg>
										
								</a>
								<a href=\"#\" class=\"menu-block__link menu-block__link_language d-none\">
									<span>Language</span>
									<svg width=\"16\" height=\"17\" viewBox=\"0 0 16 17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<g clip-path=\"url(#clip0_19_651)\">
										<path d=\"M7.99967 15.4992C11.6816 15.4992 14.6663 12.5144 14.6663 8.83252C14.6663 5.15062 11.6816 2.16585 7.99967 2.16585C4.31778 2.16585 1.33301 5.15062 1.33301 8.83252C1.33301 12.5144 4.31778 15.4992 7.99967 15.4992Z\" stroke=\"#636775\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
										<path d=\"M1.33301 8.83252H14.6663\" stroke=\"#636775\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
										<path d=\"M7.99967 2.16585C9.66719 3.99142 10.6148 6.36054 10.6663 8.83252C10.6148 11.3045 9.66719 13.6736 7.99967 15.4992C6.33215 13.6736 5.38451 11.3045 5.33301 8.83252C5.38451 6.36054 6.33215 3.99142 7.99967 2.16585V2.16585Z\" stroke=\"#636775\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
										</g>
										<defs>
										<clipPath id=\"clip0_19_651\">
										<rect width=\"16\" height=\"16\" fill=\"white\" transform=\"translate(0 0.83252)\"/>
										</clipPath>
										</defs>
										</svg>								
										
								</a>

<!--								<a href=\"https://app.sushi.com/swap?inputCurrency=0x7ceb23fd6bc0add59e62ac25578270cff1b9f619&outputCurrency=0x90f3edc7d5298918f7bb51694134b07356f7d0c7\" class=\"menu-block__buy buy-dao\" target=_blank>Buy DDAO</a>-->
<!--								<a href=\"https://app.sushi.com/trident/swap?tokens=0x2791Bca1f2de4661ED88A30C99A7a9449Aa84174&tokens=0x90F3edc7D5298918F7BB51694134b07356F7d0C7&chainId=137\" class=\"menu-block__buy buy-dao\" target=_blank>Buy DDAO</a>-->
								<a href=\"https://app.sushi.com/swap?tokens=0x2791Bca1f2de4661ED88A30C99A7a9449Aa84174&tokens=0x90F3edc7D5298918F7BB51694134b07356F7d0C7&chainId=137\" class=\"menu-block__buy buy-dao\" target=_blank>Buy DDAO</a>
								<a href=\"https://app.gysr.io/pool/0x964b072af7adcdd22c2c5423a9e5d017f5a1c570\" class=\"menu-block__farm farm-button\" target=_blank>Farm on GYSR</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		 </div>

		 <div class=\"container\">
			 <div class=\"row2 d-flex justify-content-center\">
					<div class=\"top-tabs\">
						<a href=\"#/claim\" class=\"top-tabs__tab tab-1 active \">Claim</a>
						<a href=\"#/pool\" class=\"top-tabs__tab tab-2\">Pool</a>
<!--						<a href=\"#/stake\" class=\"top-tabs__tab tab-3 \">Staking</a>-->
						<a href=\"#/stake\" class=\"top-tabs__tab tab-3 disabled\" onclick=\"return false;\">Staking</a>
<!--						<a href=\"#/stepn\" class=\"top-tabs__tab tab-3 \">Stepn</a>-->

					</div>
			 </div>
		 </div>
		 
		 
	</header>

";
?>