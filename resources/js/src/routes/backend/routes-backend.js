import Home from '../../../components/backend/Home'
import SignIn from '../../../components/backend/auth/SignIn'
import User from '../../../components/backend/auth/users/Index'
import UserCreate from '../../../components/backend/auth/users/Create'
import Role from '../../../components/backend/auth/roles/Index'
import Permission from '../../../components/backend/auth/Permission'
import AssignRoleModel from '../../../components/backend/auth/AssignRoleModel'
import AssignPermissionModel from '../../../components/backend/auth/AssignPermissionModel'
import Dashboard from '../../../components/backend/dashboard/Index'
import Admin from '../../../components/backend/admins/Index'
import AdminCreate from '../../../components/backend/admins/Create'
import GeneralUser from '../../../components/backend/general/Index'



let routeBackend = [
    {
        name:'Home',
        path:'/',
        component:Home,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'Home',
                
              }
          }

    },

    {
        name:'SignIn',
        path:'/signin',
        component:SignIn,
    },
    {
        name:'User',
        path:'/users',
        component:User,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'User',
                
              }
          }

    },

    {
        name:'UserCreate',
        path:'/users/create',
        component:UserCreate,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'UserCreate',
                
              }
          }

    },

    {
        name:'UserCreate',
        path:'/users/:id',
        component:UserCreate,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'UserCreate',
                
              }
          }

    },

    {
        name:'Role',
        path:'/role',
        component:Role,
        
        meta: {
            auth: true,
            // breadcrumb: {
            //     label: 'Role',
                
            //   }
          }

    },
    {
        name:'Permission',
        path:'/permission',
        component:Permission,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'Permission',
                
              }
          }

    },
    {
        name:'AssignRoleModel',
        path:'/assign-role-model',
        component:AssignRoleModel,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'AssignRoleModel',
                
              }
          }

    },
    {
        name:'AssignPermissionModel',
        path:'/assign-permission-model',
        component:AssignPermissionModel,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'AssignPermissionModel',
                
              }
          }

    },
    // for admin create
    {
        name:'Admin',
        path:'/admin-user',
        component:Admin,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'Admin',
                
              }
          }

    },

    {
        name:'AdminCreate',
        path:'/admin-user/create',
        component:AdminCreate,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'AdminCreate',
                
              }
          }

    },

    {
        name:'AdminCreate',
        path:'/admin-user/:id',
        component:AdminCreate,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'AdminCreate',
                
              }
          }

    },
    {
        name:'Dashboard',
        path:'/admin-dashboard',
        component:Dashboard,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'Dashboard',
                
              }
          }

    },
    {
        name:'GeneralUser',
        path:'/admin-general',
        component:GeneralUser,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'GeneralUser',
                
              }
          }

    },
  
]

export default routeBackend