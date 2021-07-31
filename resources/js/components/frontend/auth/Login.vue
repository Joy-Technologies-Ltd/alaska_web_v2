<template>
    <!-- <div>
        <h1>I'm Homepage</h1>
    </div> -->
    <div>
          <header class="border-none bg-transparent" uk-sticky="cls-active: is_fixed ; cls-inactive: bg-transparent">
            <div class="header_inner">
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <router-link to="/">
                            <img src="frontend/assets/images/demos/logo.png" alt="" style="height: auto;">
                            <img src="frontend/assets/images/logo-light.html" class="logo_inverse" alt="">
                            <img src="frontend/assets/images/logo-mobile.png" class="logo_mobile" alt="">
                        </router-link>
                    </div>

                    <div class="triger" uk-toggle="target: .header_menu ; cls: is-visible">
                        <i class="uil-bars"></i>
                    </div>
                    <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

                </div>
                <div class="right-side uk-visible@s">

                    <ul class="header_menu" uk-scrollspy-nav="closest: li; scroll: true">
                        <li><router-link to="/signin" uk-scroll> Login</router-link> </li>
                    </ul>
                    <router-link to="/signup" 
                        class="bg-gradient-to-bl font-semibold from-purple-400 px-8 py-2 ml-8 rounded text-sm text-white to-blue-600 hover:shadow-lg hover:text-white">
                        Registration
                    </router-link>
                </div>
            </div>
        </header>
        <div class="lg:py-40 pt-24 pb-12 relative -mt-20" id="home">
           
           
            <div class="uk-container mx-auto lg:mt-28">
                <div class="banner1">
                <!-- <div class="objectWrapper"> -->
                <!-- <img src="frontend/assets/images/demos/first-banner.png" alt="" class="Image__ImageWrapper"> -->
                <div class="dashboardWrapper">
                    <form  @submit.prevent="signIn" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" style="width:150%;">
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>
                        <div>
                            <label class="mb-0"> Email Address </label>
                            <input type="email" placeholder="Info@example.com" v-model="email" name="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        </div>
                        <div>
                            <label class="mb-0"> Password </label>
                            <input type="password" placeholder="******" v-model="password" name="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-600 font-semibold p-2 mt-3 rounded-md text-center text-white w-full">
                                SignIn</button>
                        </div>
                        <div class="headline"></div>
                        <router-link to="signup">
                             <button id="myButton" style="background-color: #42b72a;" class="bg-blue-600 font-semibold p-2 mt-3 rounded-md text-center text-white w-full">Create New Account!</button>
                        </router-link>
                    </form>
                </div>
                <!-- </div> -->
            </div>
                
                <div
                    class="lg:w-5/12 lg:space-y-6 text-center lg:text-left lg:block flex flex-col justify-center items-center">
                    

                    <h1 class="font-bold lg:leading-snug lg:text-4xl text-2xl">
                        Stay connected anywhere with Alaska online
                    </h1>
                    <p>
                        Enjoy the full effortless Alaska experience from your browser without having to install the
                        application on your computer or mobile phone.
                    </p>
                    <div class="gap-4">
                        <a href="#" class="bg-gradient-to-bl font-semibold from-purple-500 to-blue-600 px-10 py-2 rounded text-sm text-white 
                        hover:shadow-lg hover:text-white">
                           Download Now </a>
                    </div>
                   
                </div>
            </div>
             
        </div>
                <!-- <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                    <form  @submit.prevent="signIn" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>
                        <div>
                            <label class="mb-0"> Email Address </label>
                            <input type="email" placeholder="Info@example.com" v-model="email" name="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        </div>
                        <div>
                            <label class="mb-0"> Password </label>
                            <input type="password" placeholder="******" v-model="password" name="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-600 font-semibold p-2 mt-3 rounded-md text-center text-white w-full">
                                SignIn</button>
                        </div>
                        <div class="headline"></div>
                        <router-link to="signup">
                             <button id="myButton" style="background-color: #42b72a;" class="bg-blue-600 font-semibold p-2 mt-3 rounded-md text-center text-white w-full">Create New Account!</button>
                        </router-link>
                    </form>


                </div> -->
                    <!-- Footer Top -->
            <div class="footer-top">
                <div class="container-fluid">

                
                
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="frontend/assets/images/demos/logo.png" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p style="color:white;">Alaska provide expert medical advice and healthcare through online video
                                        consultation.</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-4 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title" style="color:white;">Menus</h2>
                                <ul>
                                    <li><a style="color:white;" href="url('/') ">Home</a></li>
                                     <li><a style="color:white;" href="route('login')">Login</a></li>
                                    <li><a style="color:white;" href="route('mobile-verify')">Register</a></li>
                                   
                                   
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                      

                        <div class="col-lg-4 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title" style="color:white;">Contact Us</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                        <p style="color:white;"> D58(5th Floor) Road#8,Niketon, <br> Gulshan-1, Dhaka-1212, Bangladesh.</p>
                                    </div>
                                    <p style="color:white;">
                                        <i class="fas fa-phone-alt"></i>
                                        +880 961 167 7187
                                    </p>
                                    <p class="mb-0" style="color:white;">
                                        <i class="fas fa-envelope"></i>
                                        info@alaska.xyz
                                    </p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /Footer Top -->
         

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                 
                <div class="container-fluid">

                

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0" style="color:white;">&copy; {{ currentYear }} Alaska. All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">

                                <!-- Copyright Menu -->
                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        <li><a style="color:white;" href=" url('service/terms-and-conditions') ">Terms and Conditions</a>
                                        </li>
                                        <li><a style="color:white;" href=" url('service/privacy-policy') ">Policy</a></li>
                                    </ul>
                                </div>
                                <!-- /Copyright Menu -->

                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->
                </div>
                
            </div>
            <!-- /Footer Bottom -->
            </div>
</template>
<script>
export default {
    data(){
    return {
        url: window.location.origin,
        email:"",
        password:"",
        errorMsg:""
    }
  },
  created(){
       axios.get(this.url+'/api/signin')
                .then(res => {
                    console.log('signup_status',res.data);
                    if(res.data.signup_status==0)
                    {
                         setTimeout(() => {
                            window.location.href = '/personal-info'
                        }, 1000)

                    }
                      
                }),
      console.log(this.$store.getters.isLogged);
  },

    methods:{
         signIn(){
          this.$store
          .dispatch('signIn', {
              email: this.email,
              password: this.password
          })
      }
    }
    
}
</script>
<style scoped>
  .footer-top{
    background-color: #2563eb;
    padding: 40px 70px;
}
.footer-bottom {
    background-color: #2563eb;
      padding: 0px 70px;

}

 .copyright {
    border-top: 1px solid #1663a6;
    padding: 20px 0;
}
.policy-menu{
    text-align: right;
    
}
 .headline{
        align-items: center;
        border-bottom: 1px solid #dadde1;
        display: flex;
        margin: 20px 16px;
        text-align: center;
        }
        header .header_inner {
        max-width: 1200px !important;
    }

   
    header {
        box-shadow: none;
        background-color: #fff;
        border-bottom: 1px solid #E5E9EF;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        z-index: 99;
        height: 76px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    header .header_inner {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        max-width: 1400px;
        margin: auto;
        width: 100%;
        padding: 0 35px;
    }

    header .header_inner .left-side {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    header .header_inner .left-side #logo {
        display: inline-block;
        margin-right: 20px;
        font-size: 21px;
        letter-spacing: .9px;
    }

    header .header_inner .left-side #logo img {
        max-width: none;
        height: 28px;
    }

    header .header_inner .left-side #logo img.logo_inverse,
    header .header_inner .left-side #logo img.logo_mobile {
        display: none;
    }

    header .header_inner .left-side .triger {
        position: absolute;
        left: 25px;
        top: 20px;
        color: #464646;
        display: none;
        font-size: 19px;
    }

    header .header_inner .right-side {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        margin-left: auto;
    }

    header .header_inner .right-side .header-links-item {
        padding: 10px;
    }

    header .header_inner .right-side .header-links-item svg {
        width: 25px;
        height: 25px;
        color: #676666;
    }

    header .header_inner .right-side .header-avatar {
        width: 32px;
        height: 32px;
        border-radius: 100%;
        margin-left: 15px;
    }

    .is_fixed {
        -webkit-transition: all 0.8s;
        transition: all 0.8s;
        -webkit-box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.04);
        box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.04);
        background-color: white;
        border: 0;
    }

    .header_dropdown {
        width: 330px;
        margin-top: 50px;
        border-radius: 5px;
    }

    .header_dropdown ul {
        padding: 0;
        margin: 0 -20px;
    }

    .header_dropdown ul li a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        text-decoration: none;
        color: #808080;
        position: relative;
        padding: 8px 20px;
        font-weight: 500;
    }

    .header_dropdown ul li a:hover {
        background: #f7f7f7;
    }


    .header_menu {
        padding: 0;
        margin: 0;
    }

    .header_menu li {
        list-style: none;
        display: inline;
        padding: 0;
        margin-left: 7px;
    }

    .header_menu li a {
        color: #b3b3b3;
        font-size: 0.92rem;
        text-transform: capitalize;
        font-weight: 500;
        padding: 0.8rem 0.6rem;
        border-radius: 0.375rem;
    }

    .header_menu li a:hover,
    .header_menu li a.active {
        color: black;
    }

    .header_menu li ul li a {
        color: #797979;
    }

    .header_menu li ul li a:hover {
        color: #000;
    }

    @media (min-width: 1240px) {

        .uk-container,
        header .header_inner {
            max-width: 1200px !important;
        }
    }

    .header_inner {
        padding: 0 20px !important;
    }

    .header_menu li a {
        font-size: 16px;
        padding: 0.8rem 0.9rem;
    }

    .header_menu li.uk-active a {
        color: #1e2be8 !important
    }
    .banner1 {
        position: absolute;
        width: 54%;
        height: 100%;
        top: 20px;
        right: 0px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }
</style>
