
	<section class="modal fade" tabindex="-1" id="accountModal" aria-labelledby="accountModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-center">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title">Account</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=close_acc></button>
			</div>
			<div class="modal-body popup">
				<div class="popup__wrap">
					<div class="popup__connection row align-items-center">
						<div class="col-12 col-lg-6">
							<p>Connected address</p>
						</div>
						<div class="col-12 col-lg-6 popup__connection-btn">
							<a href="#" class="art-button art-btn-disconaction" onclick="return logout();">Disconnect</a>
						</div>
						
					</div>
					<div class="popup__wallet-id">
						<span class="status"></span>
						<span class="wallet-id-full">-</span>
						
					</div>


<!--
					<div class="row addresses align-items-center addresses-margin">
						<div class="col-10 col-lg-10">
							<div class="row">
								<div class="col-12 col-lg-8">
									<p class="addresses__name">Trusted Addresses</p>
								</div>
								<div class="col-12 col-lg-4">
									<a class="addresses__show" disabled>
										Show
										<svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M0.93895 0.811018C1.2638 0.48617 1.79048 0.486171 2.11533 0.81102L5.64832 4.34402L9.18131 0.811019C9.50616 0.486171 10.0328 0.486171 10.3577 0.811019C10.6825 1.13587 10.6825 1.66255 10.3577 1.9874L6.23651 6.10859C6.08051 6.26459 5.86893 6.35222 5.64831 6.35222C5.4277 6.35222 5.21612 6.26459 5.06012 6.10859L0.938948 1.9874C0.6141 1.66255 0.614101 1.13587 0.93895 0.811018Z" fill="#636775"/>
											</svg>
									</a>
								</div>
							</div>
							
						</div>
						<div class="col-2 col-lg-2">
							
							<button type="button" class="btn addresses__btn-plus" data-bs-toggle="modal" data-bs-target="#addAddress" disabled>
								<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.02095 10.738V0.908491H6.25107V10.738H4.02095ZM0.221236 6.93832V4.70821H10.0508V6.93832H0.221236Z" fill="white"/>
									</svg>
							  </button>
						</div>


					</div>

					<div class="row addresses-group addresses-group-margin">
<center><b><span class=comsoon>Coming soon</span></b></center>

						<ul class="list-group list-group-flush">

							<li class="list-group-item">
								<button type="button" class="btn btn-delete-address" data-bs-toggle="modal" data-bs-target="#deleteAddress">
									<span>0хС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС6</span>
								</button>								
								<a href="#" class="address-copy">
									<img src="images/copy.svg" alt="">
								</a>
								<img src="images/copied.svg" alt="" class="copied">									
							</li>

							<li class="list-group-item">								
								<button type="button" class="btn btn-delete-address" data-bs-toggle="modal" data-bs-target="#deleteAddress">
									<span>KKхС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС6</span>
								</button>	
								<a href="#" class="address-copy">
									<img src="images/copy.svg" alt="">
								</a>
								<img src="images/copied.svg" alt="" class="copied">									
							</li>

							<li class="list-group-item">								
								<button type="button" class="btn btn-delete-address" data-bs-toggle="modal" data-bs-target="#deleteAddress">
									<span>0хС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС6</span>
								</button>	
								<a href="#" class="address-copy">
									<img src="images/copy.svg" alt="">
								</a>
								<img src="images/copied.svg" alt="" class="copied">									
							</li>

							<li class="list-group-item">								
								<button type="button" class="btn btn-delete-address" data-bs-toggle="modal" data-bs-target="#deleteAddress">
									<span>0хС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС60хС60В0хС6</span>
								</button>	
								<a href="#" class="address-copy">
									<img src="images/copy.svg" alt="">
								</a>
								<img src="images/copied.svg" alt="" class="copied">									
							</li>
							

							
						  </ul>

					</div>
-->							
					<div class="popup__bottom row align-items-center">
						<div class="col-12 col-lg-6">
							<a href="#" class="popup__copy">
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.8633 1.84253H3C2.17157 1.84253 1.5 2.5141 1.5 3.34253V12.2058C1.5 13.0342 2.17157 13.7058 3 13.7058H4.69201V15.2058H3C1.34314 15.2058 0 13.8627 0 12.2058V3.34253C0 1.68567 1.34315 0.342529 3 0.342529H11.8633C13.5201 0.342529 14.8633 1.68567 14.8633 3.34253V4.52203H13.3633V3.34253C13.3633 2.5141 12.6917 1.84253 11.8633 1.84253ZM8.75768 7.03348H17.4041C18.2624 7.03348 18.9583 7.72933 18.9583 8.5877V17.2341C18.9583 18.0925 18.2624 18.7883 17.4041 18.7883H8.75768C7.89931 18.7883 7.20346 18.0925 7.20346 17.2341V8.5877C7.20346 7.72933 7.89931 7.03348 8.75768 7.03348ZM5.64924 8.5877C5.64924 6.87096 7.04094 5.47926 8.75768 5.47926H17.4041C19.1208 5.47926 20.5125 6.87096 20.5125 8.5877V17.2341C20.5125 18.9508 19.1208 20.3425 17.4041 20.3425H8.75768C7.04094 20.3425 5.64924 18.9508 5.64924 17.2341V8.5877Z" fill="#636775"/>
								</svg>
								<span>Copy Address</span>
								<svg class="copied" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.3875 18.6958C14.9709 18.6958 18.7209 14.9458 18.7209 10.3625C18.7209 5.77917 14.9709 2.02917 10.3875 2.02917C5.8042 2.02917 2.0542 5.77917 2.0542 10.3625C2.0542 14.9458 5.8042 18.6958 10.3875 18.6958Z" stroke="#636775" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M6.84619 10.3626L9.20452 12.7209L13.9295 8.00427" stroke="#636775" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								<span class="copied">Copied</span>
									
							</a>
						</div>
						<div class="col-12 col-lg-6">
							<a href=# class="popup__stats" onclick="return login_explorer(this);" target=_blank>
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.9082 16.1759H5.9082C5.44987 16.1759 5.07487 15.8009 5.07487 15.3425V5.34253C5.07487 4.8842 5.44987 4.5092 5.9082 4.5092H10.0749C10.5332 4.5092 10.9082 4.1342 10.9082 3.67586C10.9082 3.21753 10.5332 2.84253 10.0749 2.84253H5.07487C4.14987 2.84253 3.4082 3.59253 3.4082 4.5092V16.1759C3.4082 17.0925 4.1582 17.8425 5.07487 17.8425H16.7415C17.6582 17.8425 18.4082 17.0925 18.4082 16.1759V11.1759C18.4082 10.7175 18.0332 10.3425 17.5749 10.3425C17.1165 10.3425 16.7415 10.7175 16.7415 11.1759V15.3425C16.7415 15.8009 16.3665 16.1759 15.9082 16.1759ZM12.5749 3.67586C12.5749 4.1342 12.9499 4.5092 13.4082 4.5092H15.5665L7.9582 12.1175C7.6332 12.4425 7.6332 12.9675 7.9582 13.2925C8.2832 13.6175 8.8082 13.6175 9.1332 13.2925L16.7415 5.6842V7.84253C16.7415 8.30086 17.1165 8.67586 17.5749 8.67586C18.0332 8.67586 18.4082 8.30086 18.4082 7.84253V3.67586C18.4082 3.21753 18.0332 2.84253 17.5749 2.84253H13.4082C12.9499 2.84253 12.5749 3.21753 12.5749 3.67586Z" fill="#636775"/>
									</svg>						
									<span>Your Stats</span>
							</a>
						</div>
					</div>

					<div class="row addresses align-items-center address-grp">
						<div class="col-4 col-lg-4">
							<div class="row"><p>Group member</p>
							</div>
						</div>
						<div class="col-8 col-lg-8 grps">
						    <nobr>
						    <div class="grp lobster"><img src=/images/lobster.png></div>
						    <div class="grp shark gray"><img src=/images/shark.png></div>
						    <div class="grp whale gray"><img src=/images/whale.png></div>
						    </nobr>
						</div>
					</div>

					<div class="row addresses align-items-center address-balances">
						<div class="col-4 col-lg-4">
							<div class="row"><p><button onclick="redir('/info_wallet');" data-bs-dismiss="modal" class="accountModal_summary">Summary balances</button></p>
							</div>
						</div>
						<div class="col-8 col-lg-8 grps">
						    <nobr>
						    <div class="grp matic"><img src=/images/net/matic.svg><br>$ <span class=balance_matic_ALL></span></div>
						    <div class="grp eth"><img src=/images/net/eth.svg><br>$ <span class=balance_eth_ALL>0</span></div>
						    <div class="grp bsc"><img src=/images/net/bsc.svg><br>$ <span class=balance_bsc_ALL>0</span></div>
						    </nobr>
						</div>
					</div>

				</div>
			</div>
			
		  </div>
		</div>
	  </section>

	  <!-- modal add address-->
	  <section class="modal fade" id="addAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-custom-size">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Add Trusted Address</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p class="modal-text">You can claim from any address in the trusted addresses list but receive your funds at your main address.</p>
			  <input type="text" placeholder="Add Address" class="form-control" id="input-add">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary art-button btn-confirm">Confirm</button>
			  	<button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
			  
			</div>
		  </div>
		</div>
	  </section>
	<!-- modal add address end-->

	<!-- modal delete address-->
	<section class="modal fade" id="deleteAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-custom-size">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Delete Address</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  <p class="modal-text"></p>
			  
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary art-button btn-del">Delete</button>
			  	<button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
			  
			</div>
		  </div>
		</div>
	  </section>
	<!-- modal delete address end-->
	
	<!-- modal metatg alloc-->
	<section class="modal fade" id="metatg_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-custom-size">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Meta Tycoon Allocate <span id=metatg_modal_net></span></h5>
			  <button id=metatg_close type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
<br>
                                               <div class="number">                                                                                                                        
                                                        <div class="number__wrap row justify-content-between align-items-center">                                                           
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <div onclick="metatg_min();" class="number__label col-6">min</div>                                                                          
                                                                        <span onclick="metatg_minus();" class="number__minus col-6">-</span>                                                                          
                                                                </div>                                                                                                                      
                                                                <div class="col-4">                                                                                                         
                                                                        <input id=metatg_input type="number" value="300" step="100" min="300" />                                                              
                                                                </div>                                                                                                                      
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <span onclick="metatg_plus();" class="number__plus col-6">+</span>                                                                           
                                                                        <div onclick="metatg_max();"  class="number__label col-6">max</div>                                                                          
                                                                </div>                                                                                                                      
                                                        </div>                                                                                                                              

                                                </div>                              
			</div>
			<div class="modal-footer" style="margin:-20px 0 0 0;">
<div class="metatg_err w-100"><center><span id=metatg_err>&nbsp;</span></center></div>

				<button class="art-button btn btn-primary w-100" onclick=metatg_alloc();>Allocate</button>
			</div>
<!--
			<div class="modal-body">
			  <p class="modal-text"></p>
			  
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary art-button btn-del">Delete</button>
			  	<button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
			  
			</div>
-->
		  </div>
		</div>
	  </section>
	<!-- modal metatg alloc end-->
	
	<!-- modal gearz alloc-->
	<section class="modal fade" id="gearz_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-custom-size">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Gearz NFT Allocate <span id=gearz_modal_net></span></h5>
			  <button id=gearz_close type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
<br>
                                               <div class="number">                                                                                                                        
                                                        <div class="number__wrap row justify-content-between align-items-center">                                                           
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <div onclick="gearz_min();" class="number__label col-6">min</div>                                                                          
                                                                        <span onclick="gearz_minus();" class="number__minus col-6">-</span>                                                                          
                                                                </div>                                                                                                                      
                                                                <div class="col-4">                                                                                                         
                                                                        <input id=gearz_input type="number" value="2500" step="100" min="2500" />                                                              
                                                                </div>                                                                                                                      
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <span onclick="gearz_plus();" class="number__plus col-6">+</span>                                                                           
                                                                        <div onclick="gearz_max();"  class="number__label col-6">max</div>                                                                          
                                                                </div>                                                                                                                      
                                                        </div>                                                                                                                              

                                                </div>                              
			</div>
			<div class="modal-footer" style="margin:-20px 0 0 0;">
<div class="gearz_err w-100"><center><span id=gearz_err>&nbsp;</span></center></div>

				<button class="art-button btn btn-primary w-100" onclick=gearz_alloc();>Allocate</button>
			</div>
<!--
			<div class="modal-body">
			  <p class="modal-text"></p>
			  
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary art-button btn-del">Delete</button>
			  	<button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
			  
			</div>
-->
		  </div>
		</div>
	  </section>
	<!-- modal gearz alloc end-->
	
	<!-- modal tmm alloc-->
	<section class="modal fade" id="tmm_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-custom-size">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">tmm NFT Allocate <span id=tmm_modal_net></span></h5>
			  <button id=tmm_close type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
<br>
                                               <div class="number">                                                                                                                        
                                                        <div class="number__wrap row justify-content-between align-items-center">                                                           
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <div onclick="tmm_min();" class="number__label col-6">min</div>                                                                          
                                                                        <span onclick="tmm_minus();" class="number__minus col-6">-</span>                                                                          
                                                                </div>                                                                                                                      
                                                                <div class="col-4">                                                                                                         
                                                                        <input id=tmm_input type="number" value="8500" step="100" min="8500" />                                                              
                                                                </div>                                                                                                                      
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <span onclick="tmm_plus();" class="number__plus col-6">+</span>                                                                           
                                                                        <div onclick="tmm_max();"  class="number__label col-6">max</div>                                                                          
                                                                </div>                                                                                                                      
                                                        </div>                                                                                                                              

                                                </div>                              
			</div>
			<div class="modal-footer" style="margin:-20px 0 0 0;">
<div class="tmm_err w-100"><center><span id=tmm_err>&nbsp;</span></center></div>

				<button class="art-button btn btn-primary w-100" onclick=tmm_alloc();>Allocate</button>
			</div>
<!--
			<div class="modal-body">
			  <p class="modal-text"></p>
			  
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary art-button btn-del">Delete</button>
			  	<button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
			  
			</div>
-->
		  </div>
		</div>
	  </section>
	<!-- modal tmm alloc end-->
	
	<!-- modal xdao alloc-->
	<section class="modal fade" id="xdao_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-custom-size">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">xdao NFT Allocate <span id=xdao_modal_net></span></h5>
			  <button id=xdao_close type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
<br>
                                               <div class="number">                                                                                                                        
                                                        <div class="number__wrap row justify-content-between align-items-center">                                                           
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <div onclick="xdao_min();" class="number__label col-6">min</div>                                                                          
                                                                        <span onclick="xdao_minus();" class="number__minus col-6">-</span>                                                                          
                                                                </div>                                                                                                                      
                                                                <div class="col-4">                                                                                                         
                                                                        <input id=xdao_input type="number" value="1000" step="100" min="1000" />                                                              
                                                                </div>                                                                                                                      
                                                                <div class="col-4 d-flex justify-content-between">                                                                          
                                                                        <span onclick="xdao_plus();" class="number__plus col-6">+</span>                                                                           
                                                                        <div onclick="xdao_max();"  class="number__label col-6">max</div>                                                                          
                                                                </div>                                                                                                                      
                                                        </div>                                                                                                                              

                                                </div>                              
			</div>
			<div class="modal-footer" style="margin:-20px 0 0 0;">
<div class="xdao_err w-100"><center><span id=xdao_err>&nbsp;</span></center></div>

				<button class="art-button btn btn-primary w-100" onclick=xdao_alloc();>Allocate</button>
			</div>
<!--
			<div class="modal-body">
			  <p class="modal-text"></p>
			  
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary art-button btn-del">Delete</button>
			  	<button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
			  
			</div>
-->
		  </div>
		</div>
	  </section>
	<!-- modal xdao alloc end-->
	
