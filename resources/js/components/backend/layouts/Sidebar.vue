<template>
    <div class="sidebar" :style="height">
        <ul class="main-menu">
            <li><i class="fa fa-user"></i> <router-link to="">Role & Permission <i class="fa fa-caret-right"></i></router-link>
                <ul class="dropdown">
                    <li><router-link to="/user">User</router-link></li>
                    <li><router-link to="/role">Role</router-link></li>
                    <li><router-link to="/permission">Permission</router-link></li>
                    <li><router-link to="/assign-role">Assign Role</router-link></li>
                    <li><router-link to="/assign-permission">Assign Permission</router-link></li>
                </ul>
            </li>
            <li><i class="fa fa-comment"></i> <router-link to="/">Dashboard</router-link></li>
            <li><i class="fa fa-comment"></i> <router-link to="/admin-user">Admin</router-link></li>
            <li><i class="fa fa-comment"></i> <router-link to="/admin-general">User</router-link></li>
            <li><i class="fa fa-shopping-cart"></i> <router-link to="">Merchants</router-link></li>
            <li><i class="fa fa-music" aria-hidden="true"></i> <router-link to="">Customer</router-link></li>
            <!-- <li><i class="fa fa-user"></i> <router-link to="">Product</router-link></li> -->
            <!-- <li><i class="fa fa-product-hunt" aria-hidden="true"></i> <router-link to="">Product</router-link></li>
            <li><i class="fa fa-list"></i> <router-link to="">Category</router-link></li> -->
            <li><i class="fa fa-sign-out"></i> <a href="javascript:void(0)" @click.prevent="signOut">Sign Out</a></li>
        </ul>
    </div>
</template>

<script>
import { log } from 'util'
export default {
    props:['signOut'],
    data(){
        return {
            height:''
        }
    },

    created(){
        this.height = 'height:'+screen.height+'px'

        console.log(screen.height);


        
    }
}
</script>