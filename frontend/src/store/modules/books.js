export const books = {
    /**
     * Defines the state being monitored for the module.
     */
    state: {
        tadayBooks: [],
    },
    /**
     * Defines the actions used to retrieve the data.
     */
    actions: {
        // loadCafes({commit, rootState, dispatch}) {
        //     commit('setCafesLoadStatus', 1);

        //     CafeAPI.getCafes()
        //         .then(function (response) {
        //             commit('setCafes', response.data);
        //             dispatch('orderCafes', {
        //                 order: rootState.filters.orderBy,//通过这种方式去访问其他modules里面的state
        //                 direction: rootState.filters.orderDirection
        //             });
        //             commit('setCafesLoadStatus', 2);
        //         })
        //         .catch(function () {
        //             commit('setCafes', []);
        //             commit('setCafesLoadStatus', 3);
        //         });
        // },
        getTodayBooks: async function({ commit }) {
            // commit('setToken',token)
            const res = await fetch('http://coolapp.test/api/test');
            commit('setTodayBooks', res.data);
        }
    },
    /**
     * Defines the mutations used
     */
    mutations: {
        // setCafesLoadStatus(state, status) {
        //     state.cafesLoadStatus = status;
        // },
        setTodayBooks: function(state,object) {
            state.todayBooks = object
        }
    },
    /**
     * Defines the getters used by the module
     */
    getters: {
        // getCafesLoadStatus(state) {
        //     return state.cafesLoadStatus;
        // },

        // getCafes(state) {
        //     return state.cafes;
        // },
    }
};
