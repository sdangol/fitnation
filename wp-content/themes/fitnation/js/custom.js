$('.products').masonry({
  // options
  itemSelector: '.product',
  fitWidth: true,
  gutter: 10
});


$(document).on('ready',function(){
	(function() {
				// Fake loading.
				setTimeout(init, 1000);

				function init() {
					document.body.classList.remove('loading');

					//************************ Example 1 - reveal on load ********************************
					
					var rev1 = new RevealFx(document.querySelector('#rev-1'), {
						revealSettings : {
							bgcolor: '#7f40f1',
							onCover: function(contentEl, revealerEl) {
								contentEl.style.opacity = 1;
							}
						}
					});
					rev1.reveal();

					var rev2 = new RevealFx(document.querySelector('#rev-2'), {
						revealSettings : {
							bgcolor: '#fcf652',
							delay: 250,
							onCover: function(contentEl, revealerEl) {
								contentEl.style.opacity = 1;
							}
						}
					});
					rev2.reveal();

					//************************ Example 2 - reveal on scroll ********************************
					
					var scrollElemToWatch_1 = document.getElementById('rev-3'),
						watcher_1 = scrollMonitor.create(scrollElemToWatch_1, -300),				
						rev3 = new RevealFx(scrollElemToWatch_1, {
							revealSettings : {
								bgcolor: '#fcf652',
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						}),
						rev4 = new RevealFx(document.querySelector('#rev-4'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						}),
						rev5 = new RevealFx(document.querySelector('#rev-5'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						});						
						rev6 = new RevealFx(document.querySelector('#rev-6'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						});						
						rev7 = new RevealFx(document.querySelector('#rev-7'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						});						
						rev8 = new RevealFx(document.querySelector('#rev-8'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						});

						scrollElemToWatch_2 = document.getElementById('rev_our_products'),
						watcher_2 = scrollMonitor.create(scrollElemToWatch_2, -300),
						rev_our_products = new RevealFx(scrollElemToWatch_2, {
							revealSettings : {
								bgcolor: '#fcf652',
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						}),
						product_1 = new RevealFx(document.querySelector('#product_1'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								direction: 'rl',
								delay: 250,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						}),
						product_2 = new RevealFx(document.querySelector('#product_2'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								direction: 'lr',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						}),	
						product_3 = new RevealFx(document.querySelector('#product_3'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								direction: 'lr',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						}),						
                  
						product_4 = new RevealFx(document.querySelector('#product_4'), {
							revealSettings : {
								bgcolor: '#7f40f1',
								direction: 'lr',
								delay: 500,
								onCover: function(contentEl, revealerEl) {
									contentEl.style.opacity = 1;
								}
							}
						}),

						// scrollElemToWatch_3 = document.getElementById('rev-9'),
						// watcher_3 = scrollMonitor.create(scrollElemToWatch_3, -300),
						// rev9 = new RevealFx(scrollElemToWatch_3, {
						// 	revealSettings : {
						// 		bgcolor: '#fcf652',
						// 		direction: 'rl',
						// 		onCover: function(contentEl, revealerEl) {
						// 			contentEl.style.opacity = 1;
						// 		}
						// 	}
						// }),
						// rev10 = new RevealFx(document.querySelector('#rev-10'), {
						// 	revealSettings : {
						// 		bgcolor: '#7f40f1',
						// 		delay: 250,
						// 		onCover: function(contentEl, revealerEl) {
						// 			contentEl.style.opacity = 1;
						// 		}
						// 	}
						// }),
						// rev11 = new RevealFx(document.querySelector('#rev-11'), {
						// 	revealSettings : {
						// 		bgcolor: '#7f40f1',
						// 		delay: 500,
						// 		onCover: function(contentEl, revealerEl) {
						// 			contentEl.style.opacity = 1;
						// 		}
						// 	}
						// });

					watcher_1.enterViewport(function() {
						rev3.reveal();
						rev4.reveal();
						rev5.reveal();
						rev6.reveal();
						rev7.reveal();
						rev8.reveal();
						watcher_1.destroy();
					});
					watcher_2.enterViewport(function() {
						rev_our_products.reveal();
						product_1.reveal();
						product_2.reveal();
						product_3.reveal();
						product_4.reveal();
						watcher_2.destroy();
					});
					// watcher_3.enterViewport(function() {
					// 	rev9.reveal();
					// 	rev10.reveal();
					// 	rev11.reveal();
					// 	watcher_3.destroy();
					// });

					//************************ Example 3 - api examples ********************************
					
					var rev12 = new RevealFx(document.querySelector('#rev-12')),
						trigger_1 = document.getElementById('rev-trigger-1'),
						trigger_2 = document.getElementById('rev-trigger-2'),
						trigger_3 = document.getElementById('rev-trigger-3'),
						trigger_4 = document.getElementById('rev-trigger-4'),
						trigger_5 = document.getElementById('rev-trigger-5');
					
					trigger_1.addEventListener('click', function() {
						rev12.reveal({
							bgcolor: '#c1c0b7',
							duration: 300,
							onStart: function(contentEl, revealerEl) { contentEl.style.opacity = 0; },
							onCover: function(contentEl, revealerEl) { contentEl.style.opacity = 1; }
						});
					});

					trigger_2.addEventListener('click', function() {
						rev12.reveal({
							bgcolor: '#c1c0b7',
							duration: 300,
							direction: 'rl',
							onStart: function(contentEl, revealerEl) { contentEl.style.opacity = 0; },
							onCover: function(contentEl, revealerEl) { contentEl.style.opacity = 1; }
						});
					});

					trigger_3.addEventListener('click', function() {
						rev12.reveal({
							bgcolor: '#c1c0b7',
							easing: 'easeOutExpo',
							direction: 'bt',
							onStart: function(contentEl, revealerEl) { 
								anime.remove(contentEl);
								contentEl.style.opacity = 0; 
							},
							onCover: function(contentEl, revealerEl) { 
								anime({
									targets: contentEl,
									duration: 800,
									delay: 80,
									easing: 'easeOutExpo',
									translateY: [40,0],
									opacity: [0,1]
								});
							}
						});
					});

					trigger_4.addEventListener('click', function() {
						rev12.reveal({
							bgcolor: '#c1c0b7',
							duration: 300,
							direction: 'tb',
							onStart: function(contentEl, revealerEl) { 
								anime.remove(contentEl);
								contentEl.style.opacity = 0; 
							},
							onCover: function(contentEl, revealerEl) { 
								anime({
									targets: contentEl,
									duration: 500,
									delay: 50,
									easing: 'easeOutBounce',
									translateY: [-40,0],
									opacity: {
										value: [0,1],
										duration: 300,
										easing: 'linear'
									}
								});
							}
						});
					});

					trigger_5.addEventListener('click', function() {
						rev12.reveal({
							bgcolor: '#7f40f1',
							duration: 400,
							easing: 'easeInOutQuad',
							onStart: function(contentEl, revealerEl) { 
								anime.remove(contentEl);
								contentEl.style.opacity = 0; 
							},
							onCover: function(contentEl, revealerEl) { 
								contentEl.style.opacity = 1; 
								anime({
									targets: contentEl,
									duration: 800,
									delay: 80,
									easing: 'easeOutExpo',
									scale: [0.5,1],
									opacity: [0,1]
								});
							}
						});
					});
				}
			})();
	
});