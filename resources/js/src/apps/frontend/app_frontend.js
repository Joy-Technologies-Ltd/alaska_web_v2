require('../../bootstrap');

window.Vue = require('vue');
import master from '../../../components/frontend/layouts/Master'
import router from '../../routes/frontend/router'
import store from '../../../store/frontend_store.js'
import moment from 'moment'
import VModal from 'vue-js-modal'
import Toasted from 'vue-toasted';
import VuejsDialog from 'vuejs-dialog';
import VuejsDialogMixin from 'vuejs-dialog/dist/vuejs-dialog-mixin.min.js'; // only needed in custom components

// include the default style
import 'vuejs-dialog/dist/vuejs-dialog.min.css';
Vue.use(VModal)
Vue.use(Toasted)
Vue.use(VuejsDialog)
Vue.use(VuejsDialogMixin)

import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect)


// Excell
import JsonExcel from "vue-json-excel";
Vue.component("downloadExcel", JsonExcel);

const app = new Vue({
    router,moment,store,
    created() {
        const userInfo = localStorage.getItem("user");
        if (userInfo) {
            const userData = JSON.parse(userInfo);
            this.$store.commit("setUserData", userData);
        }
        axios.interceptors.response.use(
            response => response,
            error => {
                if (error.response.status === 401) {
                    this.$store.dispatch('singOut')
                }
                return Promise.reject(error)
            }
        )
    },
    render: h => h(master)
}).$mount('#app_frontend');