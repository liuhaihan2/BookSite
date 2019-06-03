import Vue from 'vue'
import Vuex from 'vuex'
import {books} from './modules/books.js'
import {bookLists} from './modules/bookLists'
import {appreciations} from './modules/appreciations'
import {users} from './modules/users'
import {filters} from './modules/filters'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        books,
        bookLists,
        appreciations,
        users,
        filters
    }
});
