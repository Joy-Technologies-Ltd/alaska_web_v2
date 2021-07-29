import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

axios.defaults.baseURL = window.location.origin + '/api'

export default new Vuex.Store({
    state: {
        user: null
    },

    mutations: {
        setUserData(state, userData) {
            state.user = userData
            localStorage.setItem('user', JSON.stringify(userData))
            axios.defaults.headers.common.Authorization = `Bearer ${userData.token}`
        },

        clearUserData() {
            localStorage.removeItem('user')
            location.reload()
        }
    },

    actions: {
        signIn({ commit }, credentials) {
            return axios
                .post('/admin/signin', credentials)
                .then(({ data }) => {
                    commit('setUserData', data)

                    console.log('data', typeof(data.status));
                   
                    // let user = data.user 
                  if(data.status == true){
                     window.location.href = window.location.origin+'/admin' 
                  }
                      
                })
        },

        signOut({ commit }) {
            commit('clearUserData')
        }
    },

    getters: {
        isLogged: state => !!state.user,
        user: state => state.user,
        
    }
})
