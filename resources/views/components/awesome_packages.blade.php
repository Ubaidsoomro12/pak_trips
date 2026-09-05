<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Packages</h5>
            <h1 class="mb-0">Awesome Packages</h1>
        </div>
        
        {{-- Responsive Grid System --}}
        <div class="row g-4">
            {{-- Package 1 --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="packages-item h-100">
                    <div class="packages-img position-relative">
                        <img src="{{ asset('assets/img/packages-4.jpg') }}" 
                             class="img-fluid w-100 rounded-top" 
                             alt="Venice - Italy">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" 
                             style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt me-2"></i>Venice - Italy
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt me-2"></i>3 days
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user me-2"></i>2 Person
                            </small>
                        </div>
                        <div class="packages-price py-2 px-4 position-absolute" 
                             style="top: 0; left: 50%; transform: translateX(-50%); 
                                    background: #13357B; color: #fff; 
                                    border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                    z-index: 5;">
                            $349.00
                        </div>
                    </div>
                    <div class="packages-content bg-light rounded-bottom">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Venice - Italy</h5>
                            <small class="text-uppercase text-muted">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row g-0 bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Read More</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Package 2 --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="packages-item h-100">
                    <div class="packages-img position-relative">
                        <img src="{{ asset('assets/img/packages-2.jpg') }}" 
                             class="img-fluid w-100 rounded-top" 
                             alt="The New California">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" 
                             style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt me-2"></i>California - USA
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt me-2"></i>5 days
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user me-2"></i>2 Person
                            </small>
                        </div>
                        <div class="packages-price py-2 px-4 position-absolute" 
                             style="top: 0; left: 50%; transform: translateX(-50%); 
                                    background: #13357B; color: #fff; 
                                    border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                    z-index: 5;">
                            $449.00
                        </div>
                    </div>
                    <div class="packages-content bg-light rounded-bottom">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">The New California</h5>
                            <small class="text-uppercase text-muted">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row g-0 bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Read More</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Package 3 --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="packages-item h-100">
                    <div class="packages-img position-relative">
                        <img src="{{ asset('assets/img/packages-3.jpg') }}" 
                             class="img-fluid w-100 rounded-top" 
                             alt="Discover Japan">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" 
                             style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt me-2"></i>Tokyo - Japan
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt me-2"></i>7 days
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user me-2"></i>2 Person
                            </small>
                        </div>
                        <div class="packages-price py-2 px-4 position-absolute" 
                             style="top: 0; left: 50%; transform: translateX(-50%); 
                                    background: #13357B; color: #fff; 
                                    border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                    z-index: 5;">
                            $549.00
                        </div>
                    </div>
                    <div class="packages-content bg-light rounded-bottom">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Discover Japan</h5>
                            <small class="text-uppercase text-muted">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row g-0 bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Read More</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Package 4 --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="packages-item h-100">
                    <div class="packages-img position-relative">
                        <img src="{{ asset('assets/img/packages-1.jpg') }}" 
                             class="img-fluid w-100 rounded-top" 
                             alt="Thailand Trip">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" 
                             style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt me-2"></i>Phuket - Thailand
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt me-2"></i>4 days
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user me-2"></i>2 Person
                            </small>
                        </div>
                        <div class="packages-price py-2 px-4 position-absolute" 
                             style="top: 0; left: 50%; transform: translateX(-50%); 
                                    background: #13357B; color: #fff; 
                                    border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                    z-index: 5;">
                            $649.00
                        </div>
                    </div>
                    <div class="packages-content bg-light rounded-bottom">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Thailand Trip</h5>
                            <small class="text-uppercase text-muted">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row g-0 bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Read More</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Package 5 --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="packages-item h-100">
                    <div class="packages-img position-relative">
                        <img src="{{ asset('assets/img/packages-4.jpg') }}" 
                             class="img-fluid w-100 rounded-top" 
                             alt="Dubai Adventure">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" 
                             style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt me-2"></i>Dubai - UAE
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt me-2"></i>6 days
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user me-2"></i>2 Person
                            </small>
                        </div>
                        <div class="packages-price py-2 px-4 position-absolute" 
                             style="top: 0; left: 50%; transform: translateX(-50%); 
                                    background: #13357B; color: #fff; 
                                    border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                    z-index: 5;">
                            $749.00
                        </div>
                    </div>
                    <div class="packages-content bg-light rounded-bottom">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Dubai Adventure</h5>
                            <small class="text-uppercase text-muted">Luxury Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row g-0 bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Read More</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Package 6 --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="packages-item h-100">
                    <div class="packages-img position-relative">
                        <img src="{{ asset('assets/img/packages-4.jpg') }}" 
                             class="img-fluid w-100 rounded-top" 
                             alt="Paris Escape">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" 
                             style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt me-2"></i>Paris - France
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt me-2"></i>5 days
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user me-2"></i>2 Person
                            </small>
                        </div>
                        <div class="packages-price py-2 px-4 position-absolute" 
                             style="top: 0; left: 50%; transform: translateX(-50%); 
                                    background: #13357B; color: #fff; 
                                    border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;
                                    z-index: 5;">
                            $849.00
                        </div>
                    </div>
                    <div class="packages-content bg-light rounded-bottom">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Paris Escape</h5>
                            <small class="text-uppercase text-muted">Romantic Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row g-0 bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Read More</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="btn-hover btn text-white py-2 px-4 w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Packages End -->