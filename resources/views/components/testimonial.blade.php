<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonial</h5>
            <h1 class="mb-0">Our Clients Say!!!</h1>
        </div>

        {{-- Bootstrap 5 Carousel --}}
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            {{-- Carousel Indicators --}}
            <div class="carousel-indicators position-relative mt-4">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            {{-- Carousel Inner --}}
            <div class="carousel-inner">
                {{-- Slide 1 --}}
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle" alt="Client 1" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">John Abraham</h5>
                                    <p class="mb-0">New York, USA</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-2.jpg') }}" class="img-fluid rounded-circle" alt="Client 2" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">Sarah Johnson</h5>
                                    <p class="mb-0">London, UK</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-3.jpg') }}" class="img-fluid rounded-circle" alt="Client 3" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">David Miller</h5>
                                    <p class="mb-0">Sydney, Australia</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-4.jpg') }}" class="img-fluid rounded-circle" alt="Client 4" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">Emily Davis</h5>
                                    <p class="mb-0">Toronto, Canada</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-4.jpg') }}" class="img-fluid rounded-circle" alt="Client 5" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">Michael Brown</h5>
                                    <p class="mb-0">Berlin, Germany</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-3.jpg') }}" class="img-fluid rounded-circle" alt="Client 6" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">Jessica Wilson</h5>
                                    <p class="mb-0">Paris, France</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle" alt="Client 7" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">Robert Taylor</h5>
                                    <p class="mb-0">Dubai, UAE</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle" alt="Client 8" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">Amanda White</h5>
                                    <p class="mb-0">Singapore</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="testimonial-item text-center rounded pb-4 h-100">
                                <div class="testimonial-comment bg-light rounded p-4">
                                    <p class="text-center mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,</p>
                                </div>
                                <div class="testimonial-img p-1 mt-3">
                                    <img src="{{ asset('assets/img/testimonial-2.jpg') }}" class="img-fluid rounded-circle" alt="Client 9" style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="margin-top: -10px;">
                                    <h5 class="mb-0 mt-3">Daniel Lee</h5>
                                    <p class="mb-0">Seoul, South Korea</p>
                                    <div class="d-flex justify-content-center mt-1">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Carousel Controls (Arrows) --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-primary rounded-circle" aria-hidden="true" style="padding: 20px; background-size: 50%;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-primary rounded-circle" aria-hidden="true" style="padding: 20px; background-size: 50%;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Testimonial End -->