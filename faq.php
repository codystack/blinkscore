<?php
include "./components/header.php";
include "./components/mobile-navbar.php";
include "./components/navbar-light.php";
include "./components/sticky-navbar.php";
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main id="primary" class="site-main">
            <div class="space-for-header"></div>
            <section class="tj-page-header section-gap-x" data-bg-image="./assets/images/faq.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tj-page-header-content text-center">
                            <h1 class="tj-page-title">FAQ</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div>
            </section>


            <section class="tj-faq-section section-gap section-separator">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-heading text-center">
                                <h2 class="sec-title title-anim">Frequently asked <span>questions</span></h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="accordion tj-faq" id="faqOne">
                                    <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                                        <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="true">How long does it take to process a proof of funds request?</button>
                                        <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>We generally process POF requests within 24 to 48 hours, depending on the type and volume of the request.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false">Which banks do you fund?</button>
                                        <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>We collaborate with reputable Nigerian and international banks to issue Proof of Funds (POF) documents.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false">I am not in Lagos or Abuja, how can I apply?</button>
                                        <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>Our services are available nationwide, and you can apply from anywhere. The entire process can be completed online, ensuring a seamless experience regardless of your location.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false">Will I be able to do transactions on my account?</button>
                                        <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>No, the funds provided for Proof of Funds are strictly for verification purposes only. Withdrawals, transfers, or any other transactions from the account are not permitted.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false">Can you split the payment in batches?</button>
                                        <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>Yes, we offer flexible payment options, allowing you to split payments into batches based on your needs and prior agreement.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-6" aria-expanded="false">What do I need for account opening?</button>
                                        <div id="faq-6" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>To open an account, you’ll need a valid means of identification (such as a National ID, Passport, or Driver’s License), proof of address, a passport photograph, and basic KYC information. Additional requirements may vary depending on the bank.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false">What is the minimum and maximum amount you provide for proof of funds?</button>
                                        <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>We provide Proof of Funds ranging from ₦1 million to over ₦500 million+, based on your specific requirements.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false">Will my funds be available for withdrawal?</button>
                                        <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>No, the Proof of Funds we provide is strictly for verification purposes and cannot be withdrawn or transferred. It serves solely as a financial guarantee for your transaction.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false">What happens if my proof of funds is rejected?</button>
                                        <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                            <div class="accordion-body faq-text">
                                                <p>While rare, in the unlikely event of a rejection, we will carefully review the issue and provide either a suitable solution or a refund, depending on the circumstances.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<?php include "./components/footer.php"; ?>