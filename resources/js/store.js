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

    },
    removeFromCart(state, value) {
        const newArray = state.tenderIDs.filter(function (obj) {
            // console.log(obj)
            return obj !== value;
        });
        // console.log(newArray)
        state.tenderIDs = newArray
        // window.sessionStorage.clear();

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