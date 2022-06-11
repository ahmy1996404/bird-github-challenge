import Vue from "vue";

import Vuex from "vuex";

import axios from "axios";

import VuexPersistence from "vuex-persist";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        userName: null,
        userData: null,
        userScore: null,
    },
    plugins: [new VuexPersistence().plugin],
    mutations: {
        SET_userName(state, payload) {
            state.userName = payload;
        },
        SET_userData(state, payload) {
            state.userData = payload;
        },
        SET_userScore(state, payload) {
            state.userScore = payload;
        },
    },
    actions: {
        performUserData({ commit }, payload) {
            return new Promise((resolve, reject) => {
                axios
                    .get("api/user-github-points/" + payload)
                    .then((res) => {
                        commit("SET_userName", payload);
                        commit("SET_userData", res.data.data.data);
                        commit("SET_userScore", res.data.data.score);
                        console.log(res.data.data.data);
                        resolve(res);
                    })
                    .catch((error) => reject(error));
            });
        },
    },
    getters: {
        get_userName(state) {
            return state.userName;
        },
        get_userData(state) {
            return state.userData;
        },
        get_userScore(state) {
            return state.userScore;
        },
    },
});
