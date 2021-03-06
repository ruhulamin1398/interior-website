<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- animate css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos cdn link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/73b8d6ae8a.js" crossorigin="anonymous"></script>

    <!-- icons -->
    <link rel="stylesheet" href="{{asset('theme/frontend/icon.css')}}">

    <!-- custom styles -->
    <link rel="stylesheet" href="{{asset('theme/frontend/about.css')}}">
    <link rel="stylesheet" href="{{asset('theme/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/frontend/quote.css')}}">
    <link rel="stylesheet" href="{{asset('theme/frontend/responsive.css')}}">

    @yield('pageTitle')




</head>

<body>
    <!-- header start -->
    <div class="header">
        <!-- topbar start -->
        <div class="topbar container-fluid d-flex flex-wrap justify-content-center justify-content-sm-between">
            <div class="info-content mt-2">
                <p class="phone info-content">+88 01611-103410, +88 01972-103410</p>
            </div>


            <div class="info-content mt-2">
                <p class="email">karigorint@gmail.com</p>

            </div>

            <div class="location-topbar mt-2">
                <p>Beg Tower(1st floor), Naiorpool, Sylhet</p>
            </div>
        </div>
        <!-- topbar end -->

        <!-- navbar start -->


        <div id="navbar">
            @include('frontend.include.navbar')
        </div>



        <!-- navbar end -->





    </div>
    <!-- header end -->

    @yield('frontend')


    <!-- footer start -->
    <div class="container-fluid footer-area">
        <!-- footer top start -->
        <div class="container-lg footer">
            <div class="footer-wrap pb-5">

                <div class="footer-col fb-page mb-5">
                    <h5>Follow us</h5>
                    
                    

               







                </div>

                <div class="footer-col pb-4 social-media">
                    <h5>Contact <span>info</span></h5>

                    <div class="contact-info">
                       
                        <div class="info-area">
                            <h6>Main office</h6>
                            <p>
                                Beg Tower(1st floor). Naiorpool, Opposite of Naiorpool Mosque. 3100 Sylhet, Sylhet Division, Bangladesh
                            </p>
                        </div>

                        <div class="info-area pt-3">
                            <h6>Phone</h6>
                            <p>+88 01611-103410 | +88 01972-103410</p>
                        </div>

                        <div class="info-area pt-3">
                            <h6>Email</h6>
                            <p>karigorint@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="footer-col location">
                    <h5>Location</h5>
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.1097967310548!2d91.87623131495563!3d24.894236184038025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab350093e955%3A0x8b3e8c778f8220f9!2sKarigor%20Interior%20BD!5e0!3m2!1sbn!2sbd!4v1641471123446!5m2!1sbn!2sbd" width="400" height="340" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top end -->

        <!-- footer bottom start -->
        <footer class="container-lg">
            <span>Copyright &copy; 2022 - All Rights Reserved</span>
        </footer>
        <!-- footer bottom end -->

    </div>
    <!-- footer end -->






    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <!-- bootstrap cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



    <!-- aos cdn link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- custom js link -->
    <script src="{{asset('theme/frontend/script.js')}}"></script>



    <script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?62177';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Chat Now",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Karigor interior bd",
      "brandSubTitle":"Typically replies within 10 minutes",
      "brandImg":"http://127.0.0.1:8000/theme/frontend/img/logo.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about ",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"8801611103410"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>



</body>

</html>