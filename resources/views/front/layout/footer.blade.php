<footer class="footer-section">
    <div class="container relative">

        <!-- ================= NEWSLETTER ================= -->
        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center">
                        <span class="me-1">
                            <img src="/images/envelope-outline.svg" alt="Newsletter" class="img-fluid">
                        </span>
                        <span>Subscribe to Updates</span>
                    </h3>

                    <form action="#" class="row g-3">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ================= FOOTER CONTENT ================= -->
        <div class="row g-5 mb-5">

            <!-- BRAND -->
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap">
                    <a href="{{ url('/') }}" class="footer-logo"><span>Metoraa</span></a>
                </div>

                <p class="mb-4">
                    Metoraa is a modern B2B marketplace for commercial kitchen equipment,
                    manufacturing machinery, and industrial tools. We help businesses across
                    India source verified equipment with transparent pricing, nationwide delivery,
                    and expert support.
                </p>

                <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                </ul>
            </div>

            <!-- LINKS -->
            <div class="col-lg-8">
                <div class="row links-wrap">

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Shipping & Delivery</a></li>
                            <li><a href="#">Returns & Refunds</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Commercial Kitchen Equipment</a></li>
                            <li><a href="#">Manufacturing Machinery</a></li>
                            <li><a href="#">Industrial Equipment</a></li>
                            <li><a href="#">Bulk Orders</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

        <!-- ================= COPYRIGHT ================= -->
        <div class="border-top copyright">
            <div class="row pt-4">

                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        Metoraa. All Rights Reserved.
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</footer>
<!-- End Footer Section -->

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/tiny-slider.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>
