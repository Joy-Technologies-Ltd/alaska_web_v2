import Home from '../../../components/frontend/Home'
import Profile from '../../../components/frontend/Profile'
import Login from '../../../components/frontend/auth/Login'
import Signup from '../../../components/frontend/auth/Signup'
import PersonalInfo from '../../../components/frontend/auth/Personalnfo'

let routeFrontend = [

    {
        name:'Home',
        path:'/',
        component:Home,
        
        // meta: {
        //     auth: true,
        //     breadcrumb: {
        //         label: 'Home',
                
        //       }
        //   }

    },
    {
        name:'Profile',
        path:'/profile',
        component:Profile,
        
        // meta: {
        //     auth: true,
        //     breadcrumb: {
        //         label: 'Home',
                
        //       }
        //   }

    },
    {
        name:'Login',
        path:'/signin',
        component:Login,
        
        // meta: {
        //     auth: true,
        //     breadcrumb: {
        //         label: 'Home',
                
        //       }
        //   }

    },
    {
        name:'Signup',
        path:'/signup',
        component:Signup,
        
        // meta: {
        //     auth: true,
        //     breadcrumb: {
        //         label: 'Home',
                
        //       }
        //   }

    },
    {
        name:'PersonalInfo',
        path:'/personal-info',
        component:PersonalInfo,
        
        // meta: {
        //     auth: true,
        //     breadcrumb: {
        //         label: 'Home',
                
        //       }
        //   }

    },
]

export default routeFrontend