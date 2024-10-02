const { createApp } = Vue;

createApp({
  data() {
    return {
      music: [],
    };
  },
  methods: {
    getMusic() {
      axios.get("http://localhost/php-dischi-json/api.php").then((res) => {
        console.log(res.data);
        this.music = res.data;
      });
    },
  },
  created() {
    this.getMusic();
  },
}).mount("#app");
