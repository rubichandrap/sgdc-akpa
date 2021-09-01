@include('templates.whatsapp')

<div id="footer" class="footer" data-aos="fade" data-aos-offset="0">
        <div class="row">
            <div class="col-lg-4 col-md-12 v-divider">
                <div class="footer-start">
                    <img src="{{asset('assets/images/akpa.png')}}" class="footer-logo">
                    <h5 class="company-name">
                        PT Anugrah Karunia Perkasa Abadi © 2019
                    </h5>
                    <p class="company-address"><i class="fa fa-map-marker mr-2"></i>
                        Jalan Pangeran jayakarta
                        Komplek Ruko Gatep No. 19N
                        Sawah Besar, Jakarta Pusat
                        DKI Jakarta
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 v-divider">
                        <div class="footer-center">
                            <div class="row">
                                <div class="col-lg-6 col-md-4">
                                    <ul class="footer-lists">
                                        <li class="footer-infos-cust">
                                            <h5>Customer Service 24/7</h5>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone mr-2"></i>
                                            <p><a>021-60097941</a></p>
                                        </li>
                                        <li>
                                            <i class="fab fa-whatsapp mr-2"></i>
                                            <p><a>081999000103</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <ul class="footer-lists">
                                        <li class="footer-infos-follow">
                                            <h5>Follow Us</h5>
                                        </li>
                                        <li class="socmed">
                                            <a href="https://twitter.com/sgdcinternet" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                            <a href="https://www.facebook.com/www.akpa.net.id/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                            <a href="https://www.instagram.com/helpdesk_official" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                            <a href="https://www.linkedin.com/company/pt-anugrah-karunia-perkasa-abadi/?originalSubdomain=id" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <ul class="footer-lists">
                                        <li class="footer-infos-marketing">
                                            <h5>Marketing</h5>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone mr-2" style="vertical-align: top; margin-top: 4px;"></i>
                                            <p>021-60097941<br />
                                                <span class="ext">ext. 18</span>
                                            </p>
                                        </li>
                                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-end">
                            <div class="row">
                                {{-- <div class="col-lg-12 col-md-6">
                                    <ul class="footer-lists">
                                        <li class="footer-infos-group">
                                            <h5>AKPA Group</h5>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/images/logo.png')}}" class="sdgc-logo-footer">
                                            <a href="http://polaris.net.id/www/" target="_blank"><img src="{{asset('assets/images/polaris.png')}}" class="polaris-logo-footer"></a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="col-lg-12 col-md-12">
                                    <ul class="footer-lists">
                                        <li class="footer-infos-support">
                                            <h5>Support Menu</h5>
                                        </li>
                                        <li class="support-menus-text">
                                            <a href="{{route('faq')}}">FAQ</a>
                                            <a href="http://eticket.akpa.net.id" target="_blank">E-Ticket</a>
                                            <a href="http://speed.akpa.net.id" target="_blank">Speedtest</a>
                                            <a href="http://akpa.net.id/webmail" target="_blank">Mail</a>
                                            <a href="http://cacti.akpa.net.id" target="_blank">MRTG</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>