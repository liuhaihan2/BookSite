<template>
  <div class="home">
    <div class="books">
      <div class="book" v-for="(item, index) in books" :key="index">
        <p>item.name</p>
        <p>item.author</p>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
//format code shift option + f
import { mapState, mapActions } from "vuex";

export default {
  name: "home",
  data: () => {
    return {
      books: []
    };
  },
  computed: mapState([
    "todayBooks" //首页每篇更新的十本书
  ]),

  components: {
  },
  mounted() {
    this.init();
  },
  methods: {
    ...mapActions(["getTodayBooks"]),
    init: function() {
      this.getTodayBooks().then(res => {
          // eslint-disable-next-line
          console.log('res', res)
         this.books = this.todayBooks
      });
    }
  }
};
</script>
