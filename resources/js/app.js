import Contact from "../../public/js/Components/Contact.vue";

require('./bootstrap');
import {createApp} from "vue";

const app = createApp(Contact);

app.mount('#contact');
