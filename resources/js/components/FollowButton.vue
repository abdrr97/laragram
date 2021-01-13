<template>
  <div>
    <button
      @click="follow()"
      class="inline-flex items-center py-2 border rounded-md text-xs focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 capitalize bg-blue-500 text-black px-3"
    >
      Follow
    </button>
  </div>
</template>

<script>
import axios from "axios";
export default {
  props: ["userId"],
  methods: {
    follow() {
      console.log(`user id = ${this.userId}`);
      //   axios.post("follow/" + user_id).then((res) => {
      //     alert(res.data);
      //   });
    },
  },
  computed: {},
};
</script>
