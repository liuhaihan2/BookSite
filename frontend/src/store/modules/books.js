import api from '../../api/index'
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
        getTodayBooks: function ({ commit }) {
            return api('http://coolapp.test/api/book/todayBooks')
                .then((res) => {
                    return res.json()
                })
                .then(function (res) {
                    commit('setTodayBooks', res)
                });
        }
    },
    /**
     * Defines the mutations used
     */
    mutations: {
        // setCafesLoadStatus(state, status) {
        //     state.cafesLoadStatus = status;
        // },
        setTodayBooks: function (state, object) {
            state.todayBooks = object
            // eslint-disable-next-line
            console.log("state.todaybooks", state.todayBooks)
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
        todayBooks: state => state.todayBooks
    },
};
