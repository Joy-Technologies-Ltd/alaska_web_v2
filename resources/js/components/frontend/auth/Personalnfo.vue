<template>
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
                        <li>
                            <router-link to="/signin" uk-scroll> Login</router-link>
                        </li>
                    </ul>
                    <router-link to="/signup"
                        class="bg-gradient-to-bl font-semibold from-purple-400 px-8 py-2 ml-8 rounded text-sm text-white to-blue-600 hover:shadow-lg hover:text-white">
                        Registration
                    </router-link>
                </div>
            </div>
        </header>
        <div class="lg:py-40 pt-24 pb-12 relative -mt-20" id="home" style="height:800px">


            <div class="uk-container mx-auto lg:mt-28">
                <div class="banner1">
                    <!-- <div class="objectWrapper"> -->
                    <!-- <img src="frontend/assets/images/demos/first-banner.png" alt="" class="Image__ImageWrapper"> -->
                    <div class="dashboardWrapper">
                        
                        <form @submit.prevent="signUpWithPersonalInfo"
                            class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" style="width:200%;">
                            <div>
                                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Personal Information </h1>

                                <div>
                                    <div>
                                        <label class="mb-0">User Name </label>
                                        <input type="text" placeholder="username" name="user_name"
                                            v-model="siginUpForm.user_name"
                                            class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    </div>

                                </div>


                                <div>
                                    <label class="mb-0"> Select Gender </label>
                                    
                                   
                                    <v-select id="mySelect" class=" bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" name="gender" :options="genders" label="gender_name" :reduce="gender => gender.id" v-model="siginUpForm.gender" placeholder="Select Gender">
                                    </v-select>
                                     
                                </div>
                                <div>
                                    <label class="mb-0"> Date of Birth</label>
                                    <input type="date" name="date_of_birth" placeholder="enter your phone number"
                                        v-model="siginUpForm.date_of_birth"
                                        class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                </div>
                                <div>
                                    <label class="mb-0"> Enter your country </label>
                                        <v-select id="mySelect" class=" bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" name="country_id" :options="countries" label="name" :reduce="country => country.id" v-model="siginUpForm.country_id" placeholder="Select Country">
                                    </v-select>
                                     
                                </div>
                                <div>
                                    <label class="mb-0"> Enter your language </label>
                                       <v-select id="mySelect" class=" bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" name="language_id" :options="languages" label="name" :reduce="language => language.id" v-model="siginUpForm.language_id" placeholder="Select Language">
                                    </v-select>
                                     
                                </div>
                                <div>
                                    <button type="submit"
                                        class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                        Submit</button>
                                </div>

                            </div>
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
                    <form  @submit.prevent="signUp" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>

                        <div>
                            <div>
                                <label class="mb-0"> Name </label>
                                <input type="text" placeholder="Your Name" name="name" v-model="siginUpForm.name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            </div>
                          
                        </div>
                        <div>
                            <div>
                                <label class="mb-0"> Name </label>
                                <input type="text" placeholder="Your Name" name="name" v-model="siginUpForm.name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            </div>
                          
                        </div>
                       
                        <div>
                            <label class="mb-0"> Email Address </label>
                            <input type="email" name="email" placeholder="Info@example.com" v-model="siginUpForm.email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        </div>
                        <div>
                            <label class="mb-0"> Password </label>
                            <input type="password" name="password" placeholder="******" v-model="siginUpForm.password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        </div>
                        <div class="grid lg:grid-cols-2 gap-3">
                            <div>
                                <label class="mb-0"> Gender </label>
                                <select name="cars" id="Gender" v-model="siginUpForm.gender">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>

                            </div>
                            <div>
                                <label class="mb-0"> Phone: optional  </label>
                                <input type="text" placeholder="+543 5445 0543" v-model="siginUpForm.phone" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            </div>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" id="chekcbox1" checked="">
                            <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                            </label>
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                Get Started</button>
                        </div>
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
                                <p style="color:white;">Alaska provide expert medical advice and healthcare through
                                    online video
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
                                    <p style="color:white;"> D58(5th Floor) Road#8,Niketon, <br> Gulshan-1, Dhaka-1212,
                                        Bangladesh.</p>
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
                                <p class="mb-0" style="color:white;">&copy; {{ 2021 }} Alaska. All rights
                                    reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">

                            <!-- Copyright Menu -->
                            <div class="copyright-menu">
                                <ul class="policy-menu">
                                    <li><a style="color:white;" href=" url('service/terms-and-conditions') ">Terms and
                                            Conditions</a>
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
        data() {
            return {
                url: window.location.origin,
                // name:"",
                // email:"",
                // gender:"",
                // password:"",
                // phone:"",
                // errorMsg:""
                siginUpForm: {},
                showDone: false,
                showSignUp: true,
                signUpForm: true,
                genders:[],
                countries:[],
                languages:[],
            }
        },
        created() {

                axios.get(this.url+'/api/countries')
                .then(res => {
                this.countries      = res.data.countries
                }),
                axios.get(this.url+'/api/languages')
                .then(res => {
                this.languages      = res.data.languages
                }),
               
                axios.get(this.url+'/api/genders')
                .then(res => {
                this.genders      = res.data.genders
                })
        },

        methods: {
          
            toastMessage(type, message, icon, position, actionIcon) {
                var toast = null;
                if (type == 'success') {
                    toast = this.$toasted.success
                } else if (type == 'info') {
                    toast = this.$toasted.info
                } else if (type == 'error') {
                    toast = this.$toasted.error
                } else {

                }
                toast(message, {
                    // theme:'bubble',
                    icon: icon ? icon : 'check',
                    position: position ? position : 'top-right',
                    iconPack: 'fontawesome',
                    icon: icon ? icon : 'check',
                    duration: 2000,
                    action: {
                        icon: actionIcon ? actionIcon : 'times',
                        class: 'text-white',
                        onClick: (e, toastObject) => {
                            toastObject.goAway(0);
                        }
                    },
                });
            },
           
            signUpWithPersonalInfo() {
                let data = this.siginUpForm
                axios.post('/personal-info', data)
                    .then(res => {

                        this.toastMessage(res.data.status, res.data.message)
                        setTimeout(() => {
                            window.location.href = '/signin'
                        }, 3000)

                    })
                    .catch(error => {

                        if (error.response.status == 422) {
                            this.error = error.response.data.errors

                            $.each(error.response.data.errors, function (item, index) {
                                let input = jQuery(document).find('input[name="' + item + '"]')
                                let inputAfter = jQuery(document).find('input[name="' + item + '"] + span')

                                input.addClass('is-invalid')

                                inputAfter.remove()
                                input.after('<span class="text-danger">' + error.response.data.errors[
                                    item] + '</span>')

                            })



                        }
                    })
            },

        }

    }

</script>
<style scoped>
#mySelect .v-select .dropdown-toggle {
   border: none;
}
    .footer-top {
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

    .policy-menu {
        text-align: right;

    }

    .headline {
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
 .style-chooser .vs__search::placeholder,
  .style-chooser .vs__dropdown-toggle,
  .style-chooser .vs__dropdown-menu {
    background: #dfe5fb;
    border: none;
    color: #394066;
    text-transform: lowercase;
    font-variant: small-caps;
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
        top: 40px;
        right: 0px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

</style>
