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
                .post('/signin', credentials)
                .then(({ data }) => {
                    commit('setUserData', data)

                    console.log('data', typeof(data.status));
                   
                    // let user = data.user 
                  if(data.status == true && data.signup_status == 0){
                     window.location.href = window.location.origin+'/personalInfo' 
                  }
                  else if(data.status == true && data.signup_status == 1)
                  {
                    window.location.href = window.location.origin+'/profile' 
                  }
                      
                }).catch(error => {
                    if(error.response.status == 404){
      
                        this.errorMsg = error.response.data.message[0]
      
                    } else if(error.response.status == 401){
      
                        this.errorMsg = error.response.data.message[0]
      
                    } else if(error.response.status == 422) {
      
                         $.each(error.response.data.errors, function(item,index){
      
                              let input = jQuery(document).find('input[name="'+item+'"]')
                              let inputAfter = jQuery(document).find('input[name="'+item+'"] + span')
      
                              input.addClass('is-invalid') 
                              
                              inputAfter.remove() 
                              // input.after('<span class="text-danger">'+error.response.data.errors[item]+'</span>')
      
                      })
      
                    } else {
      
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
