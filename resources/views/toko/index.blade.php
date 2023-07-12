@extends('template.main')

<!-- portolio -->
@section('container2')
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Produk Kami</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>

                <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3 mt-3">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ url('assets/img/products')}}/{{$product->photo}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name}}</h5>
                            <p class="card-text">
                                <strong>Harga:</strong> Rp. {{ number_format($product->price) }}
                                <br>
                                <strong>Stock:</strong> {{ $product->stock }}
                                <br>
                                <hr>
                                <strong >Keterangan:</strong><br>
                                {{ $product->description }}
                            </p>
                            <a href="{{ url('customer')}}/{{$product->id}}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pesan</a>
                        </div>
                    </div>
                    </div>
                    @endforeach
                </div>
                
@endsection
<!-- endportofolio -->

<!-- about -->
@section('container3')
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">ZIFA STORE</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/ap.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Zifa Store</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Zifa Store adalah Apple Premium Reseller di Indonesia yang mengkhususkan diri dalam produk-produk Apple dan Aksessoris Apple.</p>
                        </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/help.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Help</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Jika Anda ingin bantuan atau memiliki masukan, silahkan hubungi kami: 
                            <br>    Jam 9:30 - 17:30 (Senin s.d. Jumat)
                            <br>    Jam 9:30 - 15:00 (Sabtu) 
                            <br>    Email : customercare@zifastore.com 
                            <br>    Phone : 1500372 
                            <br>    WA : 0821-2378-8235</p>
                            </div>
                        </div>
                    </li>          
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Supported
                                <br />
                                By
                                <br />
                                STT-NF
                            </h4>
                        </div>
                    </li>
                </ul>
@endsection
<!-- endabout -->

<!-- team -->
@section('container4')
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/hana.jpg" alt="..." />
                            <h4>Aisyah Hanani</h4>
                            <p class="text-muted">0110222286</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/aissyahanaa?igshid=OGQ5ZDc2ODk2ZA==" aria-label="Parveen Anand Twitter Profile"><i class="fa-brands fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/aisyah-hanani-611b12258?trk=contact-info" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/fina.jpg" alt="..." />
                            <h4>Safinatunnajah</h4>
                            <p class="text-muted">0110222234</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/sfntunnajahh" aria-label="Diana Petersen Twitter Profile"><i class="fa-brands fa-instagram"></i></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/safina-tunnajah-a84868252" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/syiful.jpg" alt="..." />
                            <h4>Syiful Anam</h4>
                            <p class="text-muted">0110222144</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/ipuul47?igshid=MzNlNGNkZWQ4Mg==" aria-label="Larry Parker Instaggram Profile"><i class="fa-brands fa-instagram"></i></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/chak.silow?mibextid=ZbWKwL" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/zia.jpg" alt="..." />
                            <h4>Zia Zakariyya Al G</h4>
                            <p class="text-muted">0110222024</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/zalghaniy?igshid=NGExMmI2YTkyZg==" aria-label="Zia Zakariyya Al Ghaniy Instagram Profile"><i class="fa-brands fa-instagram"></i></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/dhia-ya-b70870258" aria-label="Zia Zakariyya Al Ghaniy LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
@endsection
<!-- team -->

<!-- contact -->
@section('container5')
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Berlangganan</h2>
                    <h3 class="section-subheading text-muted">Lengkapi data dibawah untuk berlangganan:</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
@endsection
<!-- endcontact -->

