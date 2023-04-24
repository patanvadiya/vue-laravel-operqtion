import {
    createStore
} from 'vuex';

export const store = createStore({
    state() {
        return {
            apiData: null
        };
    },
    mutations: {
        setApiData(state, data) {
            state.apiData = data;
        },

    },
    actions: {
        async fetchApiData({
            commit
        }) {
            const response = await fetch('http://127.0.0.1:8000/api/get-employee');
            const data = await response.json();

            commit('setApiData', data);
        }
    },
    getters: {
        getApiData(state) {
            return state.apiData;
        }
    }
});