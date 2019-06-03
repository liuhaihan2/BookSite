export const filters = {
    /**
     * Defines the state being monitored for the module.
     */
    state: {

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
        //                 order: rootState.filters.orderBy,
        //                 direction: rootState.filters.orderDirection
        //             });
        //             commit('setCafesLoadStatus', 2);
        //         })
        //         .catch(function () {
        //             commit('setCafes', []);
        //             commit('setCafesLoadStatus', 3);
        //         });
        // },

    },
    /**
     * Defines the mutations used
     */
    mutations: {
        // setCafesLoadStatus(state, status) {
        //     state.cafesLoadStatus = status;
        // },
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
