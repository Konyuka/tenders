import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex)

const state = {
    tenderIDs: []
}

const mutations = {
    addToCart(state, value) {
        state.tenderIDs.push(value)

    }
}

export default new Vuex.Store({
    state, 
    mutations,
    plugins: [
        createPersistedState({
            storage: window.sessionStorage,
        }),
    ],
})